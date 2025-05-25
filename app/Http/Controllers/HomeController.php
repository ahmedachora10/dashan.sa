<?php

namespace App\Http\Controllers;

use App\Models\OurClient;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Review;
use App\Models\Vision;
use App\Services\InstagramService;

class HomeController extends Controller
{
    public function index() {

        view()->share('title','');

        $sliders = Slider::where('title_en','like','home-%')->orWhere('title_en','like','about-us%')->get();
        $processSliders = Slider::where('title_en','like','about-how-we-work%')->get();
        $visions = Vision::all();
        $ourServices = OurService::all()->take(4);
        $whyUsIcons = Slider::where('title_en', 'like', 'why-us-%')->get();
        $OurClients = OurClient::all();
        $Statistics = Statistic::all();
        $reviews = Review::where('status',1);

        return view('home', compact('sliders', 'processSliders', 'visions', 'ourServices','OurClients','Statistics','reviews', 'whyUsIcons'));
    }
}

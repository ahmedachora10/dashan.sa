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
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index() {

        view()->share('title','');

        $sliders = Slider::where('title_en','like','home-%')->orWhere('title_en','like','about-us%')->get();
        $processSliders = Slider::where('title_en','like','about-how-we-work%')->get();

        // $visions = Cache::remember('visions', now()->addMonth(), function () {
        //     return Vision::all();
        // });

        $ourServices = Cache::remember('our-services-home', now()->addMonth(), function () {
            return OurService::limit(4)->get();
        });

        $whyUsIcons = Slider::where('title_en', 'like', 'why-us-%')->get();

        // $OurClients = Cache::remember('our-clients', now()->addMonth(), function () {
        //     return OurClient::all();
        // });

        // $Statistics = Cache::remember('statistics', now()->addMonth(), function () {
        //     return Statistic::all();
        // });

        // $reviews = Cache::remember('active-reviews', now()->addMonth(), function () {
        //     return Review::where('status',1)->get();
        // });

        return view('home', compact('sliders', 'processSliders', 'ourServices', 'whyUsIcons'));
    }
}
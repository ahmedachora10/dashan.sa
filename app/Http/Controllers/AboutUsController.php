<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\OurService;
use App\Models\Statistic;
use App\Models\Team;

class AboutUsController extends Controller
{
    public function index() {

        view()->share('title','about');

        $headerSlider = Slider::where('title_en','about-us-header')->first();
        $sliders = Slider::where('title_en','like','about-us-section-%')->get();
        $services = OurService::all()->take(4);
        $statistics = Statistic::all();
        $members = Team::all()->take(4);

        return view('about-us', compact('sliders','headerSlider','services','statistics','members'));
    }
}

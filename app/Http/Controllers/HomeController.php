<?php

namespace App\Http\Controllers;

use App\Models\OurClient;
use App\Models\OurService;
use App\Models\OurWork;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Vision;
use App\Services\InstagramService;

class HomeController extends Controller
{
    public function index() {

        view()->share('title','');

        $sliders = Slider::all();
        $statistics = Statistic::all();
        $clients = OurClient::all();
        $visions = Vision::all();
        $ourServices = OurService::all();

        return view('home', compact('sliders', 'clients', 'statistics', 'visions', 'ourServices'));
    }
}

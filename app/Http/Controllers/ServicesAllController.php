<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;
use App\Models\Slider;
use App\Models\Review;
use App\Models\OurWork;

class ServicesAllController extends Controller
{
    public function index() {

        view()->share('title','');

        $ourServices = OurService::all();
        $headerSlider = Slider::where('title_en','services-header')->first();
        $servicesSlider = Slider::where('title_en','home-services')->first();
        $reviews = Review::all();
        $works = OurWork::with('media')->get()->take(4);

        return view('services', compact( 'ourServices','headerSlider','servicesSlider','reviews','works'));
    }

    public function show($id)
    {
        
        $service = OurService::find($id);
        view()->share('title',$service->name);
        $ourServices = OurService::all();
        $headerSlider = Slider::where('title_en','services-header')->first();
        return view('service-details', compact('service','ourServices','headerSlider'));
    }

    public function request($id)
    {
        $service = OurService::find($id);
        view()->share('title','request service');
        return view('service-request', compact('service'));
    }
}

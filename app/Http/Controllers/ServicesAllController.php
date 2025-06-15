<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;
use App\Models\Slider;
use App\Models\Review;
use App\Models\OurWork;
use Illuminate\Support\Facades\Cache;

class ServicesAllController extends Controller
{
    public function index() {

        view()->share('title','');

        $ourServices = Cache::remember('our_services', now()->addMonth(), function () {
            return OurService::all();
        });
        $headerSlider = Slider::where('title_en','services-header')->first();
        $servicesSlider = Slider::where('title_en','home-services')->first();
        // $reviews = Cache::remember('reviews', now()->addMonth(), function () {
        //     return Review::all();
        // });
        // $works = Cache::remember('works-4', now()->addMonth(), function () {
        //     return OurWork::with('media')->limit(4)->get();
        // });

        return view('services', compact( 'ourServices','headerSlider', 'servicesSlider'));
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

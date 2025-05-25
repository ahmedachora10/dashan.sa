<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;
use App\Models\OurClient;
use App\Models\Slider;

class ContactUsController extends Controller
{
    public function index() {
        view()->share('title','Contact Us');
        $supports = Support::all();
        $OurClients = OurClient::all();
        $slider = Slider::where('title_en','contact-us')->first();
        return view('contact', compact('supports','OurClients','slider'));
    }
}

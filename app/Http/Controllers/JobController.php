<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobRequest;
use App\Models\JobPost;
use App\Models\Slider;

class JobController extends Controller
{
    public function index()
    {
        view()->share('title',': jobs');
        $jobs = JobPost::all();
        $slider = Slider::Where('title_en','career-header')->first();
        return view('job', compact('jobs','slider'));
    }

    public function apply($id)
    {
        view()->share('title',': job apply');
        $job = JobPost::find($id);
        //$sliders = Slider::Where('title_en','like','our-works%')->get();
        return view('job-apply', compact('job'));
    }
}

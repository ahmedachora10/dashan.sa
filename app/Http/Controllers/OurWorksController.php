<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurWork;
use App\Models\Slider;
use App\Models\Tag;

class OurWorksController extends Controller
{
    public function index()
    {
        view()->share('title',':our works');
        $works = OurWork::with('media')->get();
        $slider = Slider::Where('title_en','our-works-header')->first();
        $tags = Tag::all();
        return view('our-works', compact('works','slider','tags'));
    }
    public function show($id)
    {
        view()->share('title',':project');

        $work = OurWork::where('id',$id)->with('media')->first();
        $images = $work->getMedia('works');
        // // Get next work or first work if this is the last one
        // $nextWork = OurWork::where('id', '>', $work->id)->orderBy('id', 'asc')->first();
        // if (!$nextWork) {
        //     $nextWork = OurWork::orderBy('id', 'asc')->first();
        // }

        // // Get previous work or last work if this is the first one
        // $previousWork = OurWork::where('id', '<', $work->id)->orderBy('id', 'desc')->first();
        // if (!$previousWork) {
        //     $previousWork = OurWork::orderBy('id', 'desc')->first();
        // }
        return view('our-works-details', compact('work','images'));
    }
}

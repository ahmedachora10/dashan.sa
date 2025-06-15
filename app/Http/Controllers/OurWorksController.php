<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurWork;
use App\Models\Slider;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class OurWorksController extends Controller
{
    public function index()
    {
        view()->share('title',':our works');
        $works = Cache::remember('works', now()->addMonth(), function () {
            return OurWork::with('media')->get();
        });

        $slider = Slider::Where('title_en','our-works-header')->first();
        $tags = Cache::remember('tags', now()->addMonth(), function () {
            return Tag::all();
        });

        return view('our-works', compact('works','slider','tags'));
    }
    public function show($id)
    {
        view()->share('title',':project');

        $work = Cache::remember("work-{$id}", now()->addMonth(), function () use ($id) {
            return OurWork::with(['media', 'tag'])->findOrFail($id);
        });
        $images = Cache::remember("work-images-{$id}", now()->addMonth(), function () use ($work) {
            return $work->getMedia('works');
        });
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

<?php

namespace App\View\Components\Theme\Sections;

use App\Models\OurWork;
use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Works extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.sections.works', [
            'works' => Cache::remember('works-home', now()->addMonth(), function () {
                return OurWork::with(['media', 'tag'])->limit(6)->get();
            }),
            'tags' => Cache::remember('works-tags', now()->addMonth(), function () {
                return Tag::withExists(['works'])->get();
            }),
        ]);
    }
}
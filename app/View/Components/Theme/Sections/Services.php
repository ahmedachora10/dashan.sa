<?php

namespace App\View\Components\Theme\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use App\Models\Slider;

class Services extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?Collection $services = null ,
        public ?Collection $sliders = null ,
        public ?Slider  $servicesSlider = null
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.sections.services');
    }
}
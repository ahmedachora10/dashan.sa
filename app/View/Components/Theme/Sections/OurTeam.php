<?php

namespace App\View\Components\Theme\Sections;

use App\Models\Team;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class OurTeam extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.sections.our-team', [
            'members' => Cache::remember('team-members', now()->addMonth(), function () {
                return Team::all();
            }),
        ]);
    }
}

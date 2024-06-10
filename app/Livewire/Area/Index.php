<?php

namespace App\Livewire\Area;

use App\Models\Area;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Index extends Component
{
    public function render()
    {
        $area = Area::all();
        
        return view('livewire.area.index', [
            'area' => $area,
        ]);
    }
}

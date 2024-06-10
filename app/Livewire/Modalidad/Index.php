<?php

namespace App\Livewire\Modalidad;

use App\Models\Modalidad;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Index extends Component
{
    public function render()
    {
        $modalidad = Modalidad::all();

        return view('livewire.modalidad.index', [
            'modalidad' => $modalidad,
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class MostrarIdea extends Component
{
    public $idea;
    public $cantidadVotos;

    public function render()
    {
        return view('livewire.mostrar-idea');
    }
}

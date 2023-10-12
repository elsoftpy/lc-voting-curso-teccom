<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Idea;
use Livewire\Component;

class CrearIdea extends Component
{
    public $title;
    public $category = 1;
    public $description;

    protected $rules = [
        'title' => ['required', 'min:4'],
        'category' => ['required', 'integer', 'exists:categorias,id'],
        'description' => ['required', 'min:4'],
    ];

    protected $messages = [
        'title.required' => 'El campo título es obligatorio.',
        'title.min' => 'El título debe tener al menos 4 caracteres.',
        'category.required' => 'El campo categoría es obligatorio.',
        'category.exists' => 'Categoría no existe',
        'category.integer' => 'La categoría debe ser numérica.',
        'description.required' => 'El campo descripción es obligatorio.',
        'description.min' => 'La descripción debe tener al menos 4 caracteres.',
    ];


    public function guardar()
    {
        $this->validate();

        Idea::create([
            'user_id' => auth()->id(),
            'categoria_id' => $this->category,
            'estado_id' => Estado::ABIERTA,
            'title' => $this->title,
            'description' => $this->description
        ]);

        session()->flash('mensaje_exitoso', 'El registro fue guardado');

        return redirect()->route('idea.index');
    }
    public function render()
    {
        return view('livewire.crear-idea', [
            'categories' => Categoria::all(),
        ]);
    }
}

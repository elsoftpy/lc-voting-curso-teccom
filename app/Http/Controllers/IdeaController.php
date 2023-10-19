<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        return view('ideas.index', [
            'ideas' => Idea::with(['user', 'categoria'])
                ->orderBy('id', 'desc')
                ->simplePaginate(Idea::CANTIDAD_IDEAS_PAGINA),
        ]);
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }
}

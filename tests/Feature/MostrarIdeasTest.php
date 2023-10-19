<?php

namespace Tests\Feature;

use App\Models\Categoria;
use App\Models\Estado;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @group Curso
 */

class MostrarIdeasTest extends TestCase
{
   use RefreshDatabase;

   public function test_lista_de_ideas_se_muestra_en_la_pagina_principal()
   {
        User::factory(1)->create();
        $user = User::first();
        $estado = Estado::create([
            'nombre' => 'Considerando',
        ]);

        $estadoDos = Estado::create([
            'nombre' => 'Cerrada',
        ]);

        $categoria = Categoria::create([
            'nombre_categoria' => 'Web App',
        ]);

        $categoriaDos = Categoria::create([
            'nombre_categoria' => 'Mobile App',
        ]);

        $ideaUno = Idea::create([
            'title' => 'Mi primera idea',
            'categoria_id' => $categoria->id,
            'estado_id' => $estado->id,
            'description' => 'Descripción de la primera idea',
            'user_id' => $user->id,
        ]);

        $ideaDos = Idea::create([
            'title' => 'Mi segunda idea',
            'categoria_id' => $categoriaDos->id,
            'estado_id' => $estadoDos->id,
            'description' => 'Descripción de la segunda idea',
            'user_id' => $user->id,
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaUno->title);
        $response->assertSee($ideaUno->description);
        $response->assertSee($ideaUno->categoria->nombre_categoria);
        $response->assertSee($ideaUno->estado->nombre);
        $response->assertSee($ideaDos->title);
        $response->assertSee($ideaDos->description);
        $response->assertSee($ideaDos->categoria->nombre_categoria);
        $response->assertSee($ideaDos->estado->nombre);
   }

   public function test_una_idea_se_muestra_en_la_pagina_detalle()
   {
    User::factory(1)->create();
    $user = User::first();
    $categoria = Categoria::create([
        'nombre_categoria' => 'Web App',
    ]);

    $estado = Estado::create([
        'nombre' => 'Considerando',
    ]);

    $ideaUno = Idea::create([
        'title' => 'Mi primera idea',
        'categoria_id' => $categoria->id,
        'estado_id' => $estado->id,
        'description' => 'Descripción de la primera idea',
        'user_id' => $user->id,
    ]);

    $response = $this->get(route('idea.show', $ideaUno));

    $response->assertSuccessful();
    $response->assertSee($ideaUno->title);
    $response->assertSee($ideaUno->description);
    $response->assertSee($ideaUno->categoria->nombre_categoria);
    $response->assertSee($ideaUno->estado->nombre);
   }

   public function test_paginacion_funciona()
   {
        $categoria = Categoria::create([
            'nombre_categoria' => 'Categoría 1',
        ]);

        $estado = Estado::create([
            'nombre' => 'Abierta',
        ]);

        Idea::factory(Idea::CANTIDAD_IDEAS_PAGINA + 1)->create();
        $ideaUno = Idea::first();
        $ideaUno->title = 'Mi primera idea';
        $ideaUno->save();

        $ultimaIdea = Idea::orderBy('id', 'desc')->first();
        $ultimaIdea->title = 'Ultima idea';
        $ultimaIdea->save();

        $response = $this->get('/');
        $response->assertDontSee($ideaUno->title);
        $response->assertSee($ultimaIdea->title);

        $response = $this->get('/?page=2');
        $response->assertSee($ideaUno->title);
        $response->assertDontSee($ultimaIdea->title);
   }
}

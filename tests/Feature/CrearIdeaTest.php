<?php

namespace Tests\Feature;

use App\Http\Livewire\CrearIdea;
use App\Models\Categoria;
use App\Models\Estado;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpFoundation\Response;
use Livewire\Livewire;
use Tests\TestCase;

/**
 * @group Curso
 */

class CrearIdeaTest extends TestCase
{
    use RefreshDatabase;

    public function test_invitado_no_ve_el_formulario_de_ideas()
    {
        $response = $this->get(route('idea.index'));

        $response->assertOk();
        $response->assertSee('Por favor, ingresar para crear una idea');
        $response->assertDontSee('Tiranos una idea y nosotros la analizaremos');
    }

    public function test_usuario_autenticado_ve_el_formulario_de_ideas()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('idea.index'));

        $response->assertOk();
        $response->assertDontSee('Por favor, ingresar para crear una idea');
        $response->assertSee('Tiranos una idea y nosotros la analizaremos');
    }

    public function test_pagina_inicial_contiene_el_componente_crear_ideas()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('idea.index'))
            ->assertSeeLivewire('crear-idea');

        $response->assertOk();
        $response->assertDontSee('Por favor, ingresar para crear una idea');
        $response->assertSee('Tiranos una idea y nosotros la analizaremos');
    }

    public function test_validacion_del_componente_crear_ideas_funciona()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(CrearIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('guardar')
            ->assertHasErrors(['title', 'category', 'description'])
            ->assertSee('El campo título es obligatorio.');
    }

    public function test_usuario_autenticado_puede_crear_idea()
    {
        $user = User::factory()->create();

        $categoria = Categoria::factory()->create();
        $estado = Estado::create([
            'nombre' => 'Abierta',
        ]);

        Livewire::actingAs($user)
            ->test(CrearIdea::class)
            ->set('title', 'Mi primera idea')
            ->set('category', $categoria->id)
            ->set('description', 'Idea de testing')
            ->call('guardar')
            ->assertRedirect(route('idea.index'));

        $this->assertDatabaseHas('ideas', [
            'title' => 'Mi primera idea',
            'estado_id' => Estado::ABIERTA,
        ]);
    }
}


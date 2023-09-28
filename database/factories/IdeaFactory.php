<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Estado;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idea>
 */
class IdeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
            'estado_id' => Estado::inRandomOrder()->first()->id,
            'title' => ucwords(fake()->words(4, true)),
            'slug' => null,
            'description' => fake()->paragraph(5),
        ];
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Idea;
use App\Models\User;
use App\Models\Voto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'elias',
            'email' => 'elias@example.com',
        ]);

        User::factory(29)->create();

        $this->call([
            CategoriaSeeder::class,
            EstadoSeeder::class,
        ]);
        Idea::factory(30)->create();

        foreach (range(1, 30) as $userId) {
            foreach (range(1, 30) as $ideaId) {
                if($ideaId % 2 === 0){
                    Voto::factory()->create([
                        'user_id' => $userId,
                        'idea_id' => $ideaId,
                    ]);
                }
            }
        }
    }
}

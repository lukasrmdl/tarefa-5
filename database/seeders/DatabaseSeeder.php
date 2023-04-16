<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'User Aula 06',
            'email' => 'aula@example.com',
        ]);

        $seedRegiao = new RegiaoSeeder();
        $seedRegiao->run();

        (new EstadoSeeder)->run();

        \App\Models\Fornecedor::factory(fake()->randomNumber(2))
                ->hasProdutos(fake()->randomNumber(1))
                ->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolio = Project::create([
            'title' => 'Portfolio Personale',
            'category_id' => 2,
            'description' => 'Sito web realizzato con Laravel per mostrare i miei progetti.',
            'thumbnail' => 'https://placehold.co/600x400?text=Portfolio',
            'repository_url' => 'https://github.com/utente/portfolio',
            'demo_url' => 'https://esempio.com/portfolio',
        ]);
        $portfolio->technologies()->attach([1, 5]);

        $meteo = Project::create([
            'title' => 'App Meteo',
            'category_id' => 2,
            'description' => 'Applicazione che mostra le previsioni del tempo usando una API esterna.',
            'thumbnail' => 'https://placehold.co/600x400?text=Meteo',
            'repository_url' => 'https://github.com/utente/app-meteo',
            'demo_url' => null,
        ]);
        $meteo->technologies()->attach([2]);

        $spesa = Project::create([
            'title' => 'Lista della Spesa',
            'category_id' => 1,
            'description' => 'Semplice gestionale per creare e gestire le liste della spesa.',
            'thumbnail' => 'https://placehold.co/600x400?text=Spesa',
            'repository_url' => 'https://github.com/utente/lista-spesa',
            'demo_url' => null,
        ]);
        $spesa->technologies()->attach([1, 3]);
    }
}

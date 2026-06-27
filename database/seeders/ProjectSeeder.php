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
        Project::create([
            'title' => 'Portfolio Personale',
            'category' => 'front end',
            'description' => 'Sito web realizzato con Laravel per mostrare i miei progetti.',
            'technologies' => 'Laravel, Blade, Bootstrap',
            'thumbnail' => 'https://placehold.co/600x400?text=Portfolio',
            'repository_url' => 'https://github.com/utente/portfolio',
            'demo_url' => 'https://esempio.com/portfolio',
        ]);

        Project::create([
            'title' => 'App Meteo',
            'category' => 'front end',
            'description' => 'Applicazione che mostra le previsioni del tempo usando una API esterna.',
            'technologies' => 'JavaScript, API REST, CSS',
            'thumbnail' => 'https://placehold.co/600x400?text=Meteo',
            'repository_url' => 'https://github.com/utente/app-meteo',
            'demo_url' => null,
        ]);

        Project::create([
            'title' => 'Lista della Spesa',
            'category' => 'back end',
            'description' => 'Semplice gestionale per creare e gestire le liste della spesa.',
            'technologies' => 'PHP, MySQL',
            'thumbnail' => 'https://placehold.co/600x400?text=Spesa',
            'repository_url' => 'https://github.com/utente/lista-spesa',
            'demo_url' => null,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Backend',
                'description' => 'Progetti incentrati sulla logica lato server, gestione dei dati e creazione di API con linguaggi come PHP, Node.js e database relazionali.',
            ],
            [
                'name' => 'Frontend',
                'description' => 'Progetti dedicati all\'interfaccia utente e all\'esperienza di navigazione, realizzati con HTML, CSS, JavaScript e framework moderni.',
            ],
            [
                'name' => 'Fullstack',
                'description' => 'Progetti completi che integrano sviluppo frontend e backend, dalla progettazione del database fino all\'interfaccia utente.',
            ],
            [
                'name' => 'Mobile',
                'description' => 'Applicazioni per dispositivi mobili sviluppate per Android e iOS, con attenzione a performance e usabilità.',
            ],
            [
                'name' => 'DevOps',
                'description' => 'Progetti legati ad automazione, deployment, CI/CD e gestione dell\'infrastruttura cloud.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Technologies = [
            'PHP',
            'JavaScript',
            'Python',
            'Java',
            'TypeScript',
        ];

        foreach ($Technologies as $Technology){
            $newTechnology = new Technology();
            $newTechnology->name = $Technology;
            $newTechnology->save();
        }
    }
}

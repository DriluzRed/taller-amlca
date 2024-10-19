<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialties = [
            'Oftalmologia',
            'Cardiologia',
            'Pediatria',
            'Neurologia',
            'Oncologia',
            'Dermatologia',
            'Ginecologia',
            'Endocrinologia',
            'Ortopedia',
            'Urologia',
        ];

        foreach ($specialties as $specialty) {
            \App\Models\Specialty::create([
                'name' => $specialty,
            ]);
        }
    }
}

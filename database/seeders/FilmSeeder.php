<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films')->insert([
            'titre' => 'Film 1',
            'pays' => 'France',
            'annee' => 2022,
            'duree' => '120:00', // assuming you store duration as TIME
            'genre' => 'Drama',
        ]);

        // Add more films as needed...
    }
}

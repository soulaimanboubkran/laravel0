<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('participations')->insert([
            'films_id' => 1, // Assuming Film 1 is already in the films table
            'acteur_id' => 1, // Assuming Acteur 1 is already in the acteurs table
            'role' => 'principal',
            // Assuming you've added this column in a previous migration
        ]);

        // Add more participations as needed...
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('acteurs')->insert([
            'nom' => 'Doe',
            'prenom' => 'John',
            'pays' => 'USA',
            'date_naissance' => '1990-01-01',
            'tel' => '123456789',
        ]);

        // Add more actors as needed...
    }
}

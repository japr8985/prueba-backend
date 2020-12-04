<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('genders')->truncate();
        \App\Models\Gender::create([ 'name' => 'Masculino']);
        \App\Models\Gender::create(['name' => 'Femenino']);
    }
}

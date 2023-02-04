<?php

namespace Database\Seeders;

use App\Models\Categorisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorisation::factory(5)->create();
    }
}

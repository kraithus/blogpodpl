<?php

namespace Database\Seeders;

use App\Models\Categorisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Entertainment',
            'Fashion',
            'Home Bred',
            'Hot This Week',
            'Music',
        ];

        for ($i = 0; $i < 5; $i++) {
            Categorisation::factory()->create([
                'name' => $names[$i],
                'slug' => Str::slug($names[$i], '-')
            ]);
        }
    }
}

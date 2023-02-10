<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'pexels-dazzle-jam-1125850.jpg',
            'pexels-george-desipris-889545.jpg',
            'pexels-pixabay-236171.jpg',
            'pexels-jonas-androx-1251171.jpg',
            'pexels-ezekixl-akinnewu-950243.jpg'
        ];

        for ($i = 0; $i < 5; $i++) {
            Article::factory()->create([
                'main_image' => $images[$i]
            ]);
        }
    }
}

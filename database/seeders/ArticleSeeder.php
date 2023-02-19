<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        $titles = [
            '50 CENT: FUTURE IS BIGGER THAN JAY-Z',
            '6IX9INES IMPERSONATOR ACTS UP',
            'YG CHARGES $1,000 MEET AND GREETS',
            'XXXTentacion Fan Explains WHy He Took Photo',
            'Travis Scott Facing More Charges'
        ];

        $click_baits = [
            'Jay-Z: You did Not Mean That 50',
            'WHO IS THE REAL 6IX9INE?',
            'All That Money Just to see this rapper?',
            'Fan Took a Picture of a Murder Scene',
            'Trav Cant Go Scot Free'

        ];

        for ($i = 0; $i < 5; $i++) {
            Article::factory()->create([
                'main_image' => $images[$i],
                'title' => $titles[$i],
                'slug' => Str::slug($titles[$i], '-'),
                'click_bait' => $click_baits[$i]
            ]);
        }
    }
}

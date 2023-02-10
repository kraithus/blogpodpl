<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            'pexels-cottonbro-studio-6878174.jpg',
            'pexels-george-milton-6954162.jpg',
            'pexels-harry-cunningham-harrydigital-7383469.jpg',
            'pexels-jeremy-enns-5083624.jpg',
            'pexels-nappy-3602934.jpg',
        ];

        $video_ids = [
            'KqkXwqD95mc',
            'j18OAI_2rNo',
            'gBqepGXLnos',
            'JTYJyMuBpPg',
            'I_-3UgF6AEM',
        ];

        for($i = 0; $i < 5; $i++) {
            Podcast::factory()->create([
                'image' => $images[$i],
                'video_id' => $video_ids[$i]
            ]);
        }
    }
}

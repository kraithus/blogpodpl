<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        $titles = [
            'EP. 01: Annoucentments and Celebrating 50 Years of Hip Hop',
            'EP. 11: Eavesdrop on Cultivating Spaces for Authenticity in Hip Hop',
            'EP. 23: DJ Quazhu On Hip Hop & DJing Culture in South Africa',
            'EP. 39: Kings Rifles on Social Commentary',
            'EP. 43: A Discussion on Tribal Identity in Malawian Hip Hop'
        ];

        $click_baits = [
            'Half A Century Poppin Off',
            'Are you the Real You?',
            'That Slaps, Hard Doesnt It?',
            'It cannot all be black and White',
            'Your Roots Should Matter'
        ];

        $hosts = [
            'Timothy Banda',
            'Gabriel Munthali',
            'Fred Kaduwa',
            'Edith Samalani',
            'Verien Chakufa'
        ];

        for ($i = 0; $i < 5; $i++) {
            Podcast::factory()->create([
                'title' => $titles[$i],
                'slug' => Str::slug($titles[$i], '-'),
                'click_bait' => $click_baits[$i],
                'host' => $hosts[$i],
                'image' => $images[$i],
                'video_id' => $video_ids[$i]
            ]);
        }
    }
}

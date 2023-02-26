<?php

namespace Database\Seeders;

use App\Models\SpotifyPlaylist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpotifyPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpotifyPlaylist::factory()->create([
            'playlist_id' => '30tVuFNNRCTfRqfz7Snxue'
        ]);
    }
}

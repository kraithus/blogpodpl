<?php

namespace Database\Seeders;

use App\Models\PodcastComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PodcastCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PodcastComment::factory(13)->create();
    }
}

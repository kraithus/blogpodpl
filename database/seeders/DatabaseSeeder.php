<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Leave only role, user, cateogrisation and writer uncommented in production
         * Ordered by hierarchy of execution based on table relationship dependencies
         */
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategorisationSeeder::class,
            WriterSeeder::class,
            ArticleSeeder::class,
            PodcastSeeder::class,
            ArticleCommentSeeder::class,
            PodcastCommentSeeder::class,
            SpotifyPlaylistSeeder::class,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Podcast;
use App\Models\SpotifyPlaylist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'article_count' => Article::count(),
            'podcast_count' => Podcast::count(),
            'playlist_count' => SpotifyPlaylist::count()
        ];

        return view('admin.dashboard', $data);
    }
}

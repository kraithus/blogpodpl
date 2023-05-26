<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorisation;
use App\Models\Podcast;
use App\Models\SpotifyPlaylist;
use App\Models\Writer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home';
        $carouselArticles = Article::latest()->skip(0)->take(3)->withCount('comments')->get();
        $nextLatestArticles = Article::latest()->skip(0)->take(2)->withCount('comments')->get();
        $latestPodcasts = Podcast::latest()->skip(0)->take(2)->withCount('comments')->get();
        $spotifyPlaylist = SpotifyPlaylist::latest()->take(1)->first();

        $data = [
            'title' => $pageTitle,
            'carouselArticles' => $carouselArticles,
            'nextLatestArticles' => $nextLatestArticles,
            'latestPodcasts' => $latestPodcasts,
            'spotifyPlaylist' => $spotifyPlaylist
        ];
        
        return view('public.index', $data);
    }
}

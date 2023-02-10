<?php

namespace App\Http\Controllers;

use App\Models\Categorisation;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PublicPodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $podcast = Podcast::where('slug', $slug)->firstOrFail();

        return view('public.podcast.show', compact('podcast'));
    }
}

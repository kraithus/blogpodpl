<?php

namespace App\Http\Controllers;

use App\Models\Categorisation;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminPodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categorisations = Categorisation::all()->sortBy('name');

        $data = [
            'categorisations' => $categorisations,
        ];

        return view('admin.podcast.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'host' => 'required|string|max:255',
            'click_bait' => 'required|string|max:255',
            'categorisation_id' => 'required|string',
            'body' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'video_id' => 'required|string'
        ]);

        $Image = $request->file('image');
        $ImageName = Str::random(20) . '.' .$Image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/podcasts');
        $Image->move($destinationPath, $ImageName);

        // create instance
        $img = \Image::make($destinationPath . '/' . $ImageName);
        
        // resize the image to a width of 633 and constrain aspect ratio (auto height)
        $img->resize(633, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        // name and save to path
        $thumbnailName = 'thumbnail_' . $ImageName;
        $img->save($destinationPath . '/' . $thumbnailName);

        // Store the uploaded file path in the session
        $request->session()->flash('image', $destinationPath . '/' . $ImageName);
        
        $title = $request->title;
        $slug = Str::slug($title);
        $userId = \Auth::id();
        $podcast = new Podcast([
            'title' => $title,
            'slug' => $slug,
            'host' => $request->host,
            'click_bait' => $request->click_bait,
            'categorisation_id' => $request->categorisation_id,
            'body' => $request->body,
            'image' => $ImageName,
            'video_id' => $request->video_id
        ]);

        //Out here because not mass assignable...
        $podcast->created_by = $userId;
        $podcast->updated_by = $userId;


        $podcast->save();

        return redirect()->route('dashboard')->with('message', 'Podcast uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorisation;
use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminArticleController extends Controller
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
        $writers = Writer::all()->sortBy('name');

        $data = [
            'categorisations' => $categorisations,
            'writers' => $writers,
        ];

        return view('admin.article.add', $data);
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
            'click_bait' => 'required|string|max:255',
            'body' => 'required|string',
            'writer_id' => 'required|string',
            'categorisation_id' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $mainImage = $request->file('main_image');
        $mainImageName = Str::random(20) . '.' .$mainImage->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/articles');
        $mainImage->move($destinationPath, $mainImageName);

        // Store the uploaded file path in the session
        $request->session()->flash('main_image', $destinationPath . '/' . $mainImageName);

        
        $title = $request->title;
        $slug = Str::slug($title);
        $userId = Auth::user()->id;
        $article = new Article([
            'title' => $title,
            'slug' => $slug,
            'click_bait' => $request->click_bait,
            'body' => $request->body,
            'writer_id' => $request->writer_id,
            'categorisation_id' => $request->categorisation_id,
            'main_image' => $mainImageName,
        ]);

        //Out here because not mass assignable...
        $article->created_by = $userId;
        $article->updated_by = $userId;


        $article->save();

        return redirect()->route('dashboard')->with('message', 'Article published');
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

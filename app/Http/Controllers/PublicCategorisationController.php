<?php

namespace App\Http\Controllers;

use App\Models\Categorisation;
use Illuminate\Http\Request;

class PublicCategorisationController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categorisation = Categorisation::where('slug', $slug)->firstOrFail(); //firstOrFail important, fetches just one instance, not a collection

        $data = [
            'categorisation' => $categorisation,
        ];

        return view('public.categorisation.show', $data);
    }
}

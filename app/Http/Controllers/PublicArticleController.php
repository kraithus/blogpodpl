<?php

namespace App\Http\Controllers;

use App\ArticleVisitLogger\ArticleVisitLoggerFacade;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Categorisation;
use App\Models\Writer;
use Illuminate\Http\Request;

class PublicArticleController extends Controller
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
        // Check if the cookie exists, refresh page and give
        // shitty middleware a chance to make the cookie
        $uniqueUserId = request()->cookie('unique_id');
        if(!$uniqueUserId) {
            return redirect()->refresh();
        }
        // log the visit [refer to Middleware/LogArticleVisit]
        ArticleVisitLoggerFacade::log($slug, $uniqueUserId);

        $article = Article::where('slug', $slug)->withCount('comments')->firstOrFail();
        $categorisation_id = $article->categorisation_id;
        $similarArticles = Article::similararticles($slug, $categorisation_id)->withCount('comments')->get();

        $data = [
            'article' => $article,
            'similarArticles' => $similarArticles,
        ];

        return view('public.article.show', $data);

    }
}

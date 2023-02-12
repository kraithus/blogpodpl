<?php
namespace App\Services;

use App\Models\Article;
use App\Models\Categorisation;

class ArticleCategorisationService
{
    public function getArticlesByCategorisationSlug($slug)
    {
        $categorisation = Categorisation::where('slug', $slug)->firstOrFail();

        return Article::where('categorisation_id', $categorisation->id)
            ->withCount('comments')
            ->paginate(1);
    }
}

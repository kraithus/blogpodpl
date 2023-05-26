<?php

namespace App\ArticleVisitLogger;

use App\Models\Article;
use App\Models\ArticleVisit;

class ArticleVisitLogger
{
    public function log($slug, $uniqueUserId)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        $articleId = $article->id;

        if (ArticleVisit::where('article_id', $articleId)->where('unique_user_id', $uniqueUserId)->doesntExist()) {
            $articleVisit = new ArticleVisit();

            $articleVisit->article_id = $articleId;
            $articleVisit->unique_user_id = $uniqueUserId;

            $articleVisit->save();
        }
    }
}

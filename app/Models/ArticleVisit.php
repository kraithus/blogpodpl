<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleVisit extends Model
{
    use HasFactory;

    /**
     * Visit belongs to an article
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

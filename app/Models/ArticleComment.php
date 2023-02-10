<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'article_id',
        'author',
        'body'
    ];

    /**
     * Comment belongs to article
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

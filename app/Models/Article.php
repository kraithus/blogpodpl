<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'click_bait',
        'body',
        'writer_id',
        'categorisation_id',
        'main_image',
    ];
    
    /**
     * Article was uploaded by a user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Article was written by...
     */
    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    /**
     * Article corresponds to a categorisation
     */
    public function categorisation()
    {
        return $this->belongsTo(Categorisation::class);
    }

    /**
     * Article has many comments
     */
    public function comments()
    {
        return $this->hasMany(ArticleComment::class);
    }

    /**
     * Scope a query to get 3 most recent articles with the same
     * category as the article being viewed
     * 
     * @param \Illuminate\Database\Eloquent\Builder  $query
     * @param string $slug
     * @param int $categorisation_id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSimilarArticles($query, $slug, $categorisation_id)
    {
        return $query->latest()->where('categorisation_id', $categorisation_id)->whereNot('slug', $slug)->limit(3);
    }
}

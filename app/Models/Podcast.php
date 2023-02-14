<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Podcast extends Model
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
        'host',
        'click_bait',
        'body',
        'categorisation_id',
        'image',
        'video_id'
    ];

    /**
     * Podcast was uploaded by a certain user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Podcast belongs to a category
     */
    public function categorisation()
    {
        return $this->belongsTo(Categorisation::class);
    }

    /**
     * Podcast has many comments
     */
    public function comments()
    {
        return $this->hasMany(PodcastComment::class);
    }
}

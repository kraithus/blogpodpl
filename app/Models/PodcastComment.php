<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PodcastComment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'podcast_id',
        'author',
        'body'
    ];

    /**
     * Comment belongs to podcast
     */
    public function podcast()
    {
        return $this->belongsTo(Podcast::class);
    }
}

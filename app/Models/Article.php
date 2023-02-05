<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

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
        return $this->belongsTo(User::class);
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
}

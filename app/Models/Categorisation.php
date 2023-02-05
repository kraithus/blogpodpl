<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorisation extends Model
{
    use HasFactory;

    /**
     * Categorisation was added by a user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Categorisation is home to many articles
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

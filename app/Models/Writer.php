<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    /**
     * Writer was added by certain user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Writer has many articles
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

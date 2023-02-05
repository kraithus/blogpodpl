<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    /**
     * Podcast was uploaded by a certain user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

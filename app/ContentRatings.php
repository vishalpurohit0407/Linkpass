<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Content;
use App\User;

class ContentRatings extends Authenticatable
{
    protected $table = 'content_ratings';

    protected $fillable = [
        'content_id', 'user_id', 'title', 'rating'
    ];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class UserTags extends Authenticatable
{
    protected $table = 'user_tags';

    protected $fillable = [
        'user_id', 'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class ContentCompletion extends Authenticatable
{
    protected $table = 'content_completion';

    protected $fillable = [
        'guide_id', 'user_id',
    ];


}

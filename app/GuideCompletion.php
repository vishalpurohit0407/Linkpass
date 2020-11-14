<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class GuideCompletion extends Authenticatable
{
    protected $table = 'guide_completion';

    protected $fillable = [
        'guide_id', 'user_id',
    ];


}

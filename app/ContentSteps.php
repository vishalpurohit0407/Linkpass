<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;
use App\ContentStepMedia;

class ContentSteps extends Authenticatable
{
    protected $table = 'content_steps';

    protected $fillable = [
        'guide_id', 'title', 'description', 'step_key', 'video_type', 'video_media'
    ];

    public function media()
    {
        return $this->hasMany('App\ContentStepMedia', 'step_id','id');
    }
}

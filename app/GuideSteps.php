<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;
use App\GuideStepMedia;

class GuideSteps extends Authenticatable
{
    protected $table = 'guide_steps';

    protected $fillable = [
        'guide_id', 'title', 'description', 'step_key', 'video_type', 'video_media'
    ];

    public function media()
    {
        return $this->hasMany('App\GuideStepMedia', 'step_id','id');
    }
}

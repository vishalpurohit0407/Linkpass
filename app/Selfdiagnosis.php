<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Selfdiagnosis extends Authenticatable
{
    protected $table = 'guide';

    protected $fillable = [
        'main_title', 'main_image', 'description', 'type','duration','duration_type','difficulty','cost','tags','introduction','introduction_video_type','introduction_video_link','status'
    ];

    protected $casts = [
        "status" => "int"
    ];

    public function guide_category()
    {
        return $this->hasMany('App\Guidecategory', 'guide_id','id');
    }

}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Config;
use Storage;

class Content extends Authenticatable
{
    protected $table = 'content';

    protected $fillable = [
        'main_title', 'main_image', 'description', 'type','duration','duration_type','difficulty','cost','tags','introduction','introduction_video_type','introduction_video_link', 'content_type', 'status'
    ];

    protected $appends = [ 'main_image_url', 'completion_content_count' ];

    public function content_category()
    {
        return $this->hasMany('App\ContentCategory', 'content_id','id');
    }

    public function getMainImageUrlAttribute()
    {
        return (isset($this->main_image) && Storage::disk(env('FILESYSTEM_DRIVER'))->exists($this->main_image) ? Config('filesystems.disks.public.url').'/'.$this->main_image : asset('assets/img/theme/no-image.jpg'));
    }

    public function getCompletionContentCountAttribute()
    {
        return \App\ContentCompletion::where('content_id', $this->id)->count();
    }

    public function content_step()
    {
        return $this->hasMany('App\ContentSteps', 'content_id','id')->orderBy('step_no', 'asc');
    }
    public function content_flowchart()
    {
        return $this->hasOne('App\ContentFlowchart', 'content_id','id');
    }
}

<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class ContentStepMedia extends Authenticatable
{
    protected $table = 'content_step_media';

    protected $fillable = [
        'step_id', 'step_key', 'media'
    ];

    protected $appends = [ 'media_url' ];

    public function getMediaUrlAttribute()
    {
        return (isset($this->media) && Storage::disk(env('FILESYSTEM_DRIVER'))->exists($this->media) ? Config('filesystems.disks.public.url').'/'.$this->media : asset('assets/img/theme/no-image.jpg'));
    }
}

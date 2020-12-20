<?php

namespace App;

use App\Http\Traits\Hashidable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Config;
use Storage;

class Content extends Authenticatable
{
    use Hashidable, SoftDeletes;

    protected $table = 'content';

    protected $fillable = [
        'type', 'category_id', 'user_id', 'social_account_id', 'main_title', 'main_image', 'description', 'external_link', 'number_of_images', 'number_of_words', 'video_length', 'podcast_length', 'status', 'posted_at'
    ];

    protected $appends = [ 'main_image_url' ];

    public function content_category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function content_user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getMainImageUrlAttribute()
    {
        return (isset($this->main_image) && Storage::disk(env('FILESYSTEM_DRIVER'))->exists($this->main_image) ? Config('filesystems.disks.public.url').'/'.$this->main_image : asset('assets/img/theme/no-image.jpg'));
    }

    public function getCompletionContentCountAttribute()
    {
        return \App\ContentCompletion::where('content_id', $this->id)->count();
    }

    public function content_tags()
    {
        return $this->hasMany('App\ContentTags', 'content_id','id');
    }
}

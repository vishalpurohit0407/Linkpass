<?php

namespace App;

use App\Http\Traits\Hashidable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Config;
use Storage;
use Auth;

class SocialAccount extends Authenticatable
{
    use Hashidable, SoftDeletes;

    protected $table = 'social_accounts';

    protected $fillable = [
        'user_id', 'name', 'host_name', 'image', 'url', 'account_url', 'status'
    ];

    protected $appends = [ 'image_url', 'user_content_count' ];

    public function social_account_user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function contents()
    {
        return $this->hasMany('App\Content', 'social_account_id', 'id');
    }


    public function getUserContentCountAttribute()
    {
        return \App\Content::where('social_account_id', $this->id)->where('user_id', isset(Auth::user()->id) ? Auth::user()->id : 'N/A')->count();
    }

    public function getImageUrlAttribute()
    {
        return (isset($this->image) && Storage::disk(env('FILESYSTEM_DRIVER'))->exists($this->image) ? Config('filesystems.disks.public.url').'/'.$this->image : asset('assets/img/no_img.png'));
    }
}

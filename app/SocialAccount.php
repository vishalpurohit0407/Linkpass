<?php

namespace App;

use App\Http\Traits\Hashidable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Config;
use Storage;

class SocialAccount extends Authenticatable
{
    use Hashidable, SoftDeletes;

    protected $table = 'social_accounts';

    protected $fillable = [
        'user_id', 'name', 'image', 'url', 'account_url', 'status'
    ];

    protected $appends = [ 'image_url' ];

    public function social_account_user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function contents()
    {
        return $this->hasMany('App\Content', 'social_account_id', 'id');
    }

    public function getImageUrlAttribute()
    {
        return (isset($this->image) && Storage::disk(env('FILESYSTEM_DRIVER'))->exists($this->image) ? Config('filesystems.disks.public.url').'/'.$this->image : asset('assets/img/no_img.png'));
    }
}

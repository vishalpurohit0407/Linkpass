<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CmsPage extends Authenticatable
{
    use Notifiable;

    protected $table = 'cms_pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'url_slug', 'content', 'status'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

}

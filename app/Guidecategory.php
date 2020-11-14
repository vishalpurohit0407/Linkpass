<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Guidecategory extends Authenticatable
{
    protected $table = 'guide_category';

    protected $fillable = [
        'guide_id', 'category_id'
    ];

    protected $casts = [
        "status" => "int"
    ];

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

}

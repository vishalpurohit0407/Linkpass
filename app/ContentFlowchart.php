<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class ContentFlowchart extends Model
{
	protected $table = 'content_flowchart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content_id', 'flowchart_id'
    ];
}

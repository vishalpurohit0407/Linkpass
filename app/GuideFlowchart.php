<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class GuideFlowchart extends Model
{
	protected $table = 'guide_flowchart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'guide_id', 'flowchart_id'
    ];
}

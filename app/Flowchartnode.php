<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Flowchartnode extends Model
{
	protected $table = 'flowchart_node';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flowchart_id', 'label', 'type', 'text','yes','no','tips_title','tips_text','next','orient_yes','orient_no','link_text','link_url','link_target'
    ];
}

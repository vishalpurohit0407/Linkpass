<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Flowchart extends Model
{
	protected $table = 'flowchart';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'status'
    ];


    public function flowchart_node()
    {
        return $this->hasMany('App\Flowchartnode', 'flowchart_id','id')->orderBy('created_at','asc');
    }
}

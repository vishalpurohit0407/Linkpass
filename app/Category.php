<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $table = 'category';

    protected $fillable = [
        'name', 'parent_id', 'icon', 'status'
    ];

    protected $casts = [
        "status" => "int"
    ];

    public function subcategory()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
    public function parent()
    {
        return $this->hasOne('App\Category', 'id', 'parent_id');
    }

    public function categoryParentChildTree($parent = 0, $spacing = '', $category_tree_array = '')
    {
        if (!is_array($category_tree_array)){
            $category_tree_array = array();
        }

        $categories = $this->where('parent_id', $parent)->where('status' , '1')->orderBy('id', 'asc')->get();

        if ($categories->isNotEmpty()) {
            foreach($categories as $categoryRow) {

                $category_tree_array[] = array('id' => $categoryRow->id, 'name' => $spacing . $categoryRow->name);
                $category_tree_array = $this->categoryParentChildTree($categoryRow->id, '&nbsp;&nbsp;&nbsp;&nbsp;'.$spacing . '-&nbsp;', $category_tree_array);
            }
        }

        return $category_tree_array;
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = true;
    public $table = 'categories';

    public function events()
    {
        return $this->belongsToMany('App\Event', 'category_has_event');
    }

    public function subcategories()
    {
        return $this->belongsToMany('App\Subcategory', 'category_has_subcategory');
    }
}

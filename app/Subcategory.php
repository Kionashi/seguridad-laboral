<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = true;
    public $table = 'subcategories';

    public function events()
    {
        return $this->belongsToMany('App\Event', 'subcategory_has_event');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_has_subcategory');
    }
    public function subcategories()
    {
        return $this->belongsToMany('App\Subcategory', 'subcategory_has_subcategory');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function ingredients()
    {
        return $this->belongsToMany('App\ingredient')->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

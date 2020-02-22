<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->hasone('App\Category');
    }

    public function tags(){
        return $this->hasMany('App\Tag');
    }
  
    public function favorite()
    {
        return $this->belongsTo('App\Favorite');
    }
}

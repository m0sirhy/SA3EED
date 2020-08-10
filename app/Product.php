<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Product extends Model
{
    //
    use Filterable;

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productimages(){
        return $this->hasMany('App\ProductImage');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }



    public function favorite()
    {
        return $this->belongsTo('App\Favorite');
    }


    public function wear()
    {
        return $this->hasOne('App\Wear');
    }
}

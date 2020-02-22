<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    public function user(){
        $this->belongsTo('App\User');
    }
 
     public function product()
    {
        return $this->hasOne('App\Product');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Type extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

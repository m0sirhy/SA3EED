<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable =['first_name','last_name','user_id','address_1','address_2','country','city','phone'];
  

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name','password' ,'email', 'password','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['image_path'];


    public function user_info()
    {
        return $this->hasOne('App\User_Info');
    }
    public function user_type()
    {
        return $this->hasOne('App\User_Type');
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }


public function getImagePathAttribute(){
    return asset('uploads/user_images/'.$this->image);
}

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;

class Category extends Model
{
    //
    protected $fillable = [
'name','image'
];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    protected $append=['image_path'];

    public Function getImagePathAttribute(){
        return asset('public_uploads/categories_image'.$this->image);

    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
protected $fillable=['image'];
    public function product(){
        return $this->belongsTo('App\Product');
    }

    protected $append=['image_path'];

    public Function getImagePathAttribute(){
        return asset('uploads/product_images/'.$this->image);

    }

}

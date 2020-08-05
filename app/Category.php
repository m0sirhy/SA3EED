<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    //
    protected $fillable = [
'name','image','slug'
];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    protected $append=['image_path'];

    public Function getImagePathAttribute(){
        return asset('uploads/categories_images/'.$this->image);

    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}

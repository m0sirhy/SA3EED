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
        return asset('public_uploads/categories_image'.$this->image);

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

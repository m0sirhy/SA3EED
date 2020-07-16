<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cats []=['اجهزة - الكترونيات','جوالات - تابلت ','عقارات للايجار ','ازياء - موضة نسائية ','حيوانات '];

        for( $i=0;$i<=20;$i++){
        $category = Category::create([
            'name' => 'Category' . Str::random('1'),
            'image' => 'default.png',
        ]);
    }
    }
}

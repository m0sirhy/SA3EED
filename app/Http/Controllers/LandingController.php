<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Category;
use App\Product;

class LandingController extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();

        $categories = Category::withCount('products')->latest('products_count')->take(6)->get();
        $my_products= Product::where('user_id',$id)->get();
      
        return view('user_side.index', compact('categories','my_products'));
    }

    public function my_store()
    {
        $products=Product::where('user_id',Auth::id())->get();
        return view('user_side.my_store',compact('products'));

    }
    public function my_products(){
        $my_products=Product::where('user_id',Auth::id())->get();

        return view('user_side.my_products',compact('my_products'));

        
    }
}

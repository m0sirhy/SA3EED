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

        $categories = Category::withCount('products')->latest('products_count')->take(2)->get();

        return view('user_side.index', compact('categories'));
    }

    public function my_store()
    {
        $products=Product::where('user_id',Auth::id())->get();
        return view('user_side.my_store',compact('products'));

    }
}

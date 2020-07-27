<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class LandingController extends Controller
{
    //
    public function index(){

        $categories=Category::withCount('products')->latest('products_count')->take(2)->get();

        return view('user_side.index',compact('categories'));
    }
}

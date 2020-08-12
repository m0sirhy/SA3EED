<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ModelFilters\Product\ProductFilter as ProductFilter;

use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=Category::get();

        return view('user_side.categories',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Request $request)
    {
        //
        $category = Category::whereSlug($slug)->first();
        $products =Product::where('category_id', $category->id)->get();
      
  //native
        if ($request->has('color'))
        {

            $products=Product::where('color', 'LIKE', '%' . $request->input('color') . '%')->where('category_id', $category->id)->get();
        }
        if ($request->has('type'))
        {

            $products=Product::where('type', 'LIKE', '%' . $request->input('type') . '%')->where('category_id', $category->id)->get();
        }


        if($request->has('brand'))
        {
            $products=Product::where('brand', 'LIKE', '%' . $request->input('brand') . '%')->where('category_id', $category->id)->get();
        }
        
        if($request->has('model'))
        {
            $products=Product::where('model', 'LIKE', '%' . $request->input('model') . '%')->where('category_id', $category->id)->get();

        }
        if($request->has('size'))
        {
            $products=Product::where('size', 'LIKE', '%' . $request->input('size') . '%')->where('category_id', $category->id)->get();

        }
             
        if($request->price !=null)
        {
            $products=Product::where('category_id', $category->id)->orderBy('price',  $request->input('price'))->get();
        }
        return view('user_side.category',compact('category','products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

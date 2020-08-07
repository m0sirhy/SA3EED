<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $products = Product::orderBy('created_at', 'desc')->limit(30)->get();
        $categories = Category::get();
        return view('user_side.products', compact('products','categories'));
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
    public function store(Request $request, User $user, Product $product)
    {
        //
        

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image'=> 'required|max:3'

        ]

    );


    $request_data = $request->except('image');
    $request_data += ['user_id' => Auth::user()->id];
    //

    $product = Product::create($request_data);

    if ($request->image) {
        $images = $request->file('image');
        foreach ($images as $image) {
            $imagename = time() . '.' . $image->hashName();
            $img = Image::make($image);
            $img->save(public_path('uploads/product_images/' . $imagename));
            $request_data['image'] = $imagename;
            $request_data += ['product_id' => $product->id];
            $product->productimages()->create($request_data);
        }

    }
    session()->flash('success', __('site.added_successfully'));
    return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

        $related = Product::where('category_id', '=', $product->category->id)
            ->where('id', '!=', $product->id)
            ->get();
        return view('user_side.product', compact('product', 'related'));
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
    public function destroy(Product $product)
    {
        //
        
        foreach ($product->productimages()->get('image') as $image) {
            if ($image != "default.png") {
                Storage::disk('public_uploads')->delete('/product_images/' . $image);

            }
        }

        $product->productimages()->delete();
        $product->delete();
        session()->flash('success', ('site.delete_successfully'));
        return redirect()->route('land');
    }
}

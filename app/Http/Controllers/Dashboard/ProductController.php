<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use App\ProductImage;
use Image;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $products = Product::when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);

        })->latest()->paginate(5);
        return view('Dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::get();
        return view('Dashboard.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user, Product $product)
    {

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
        return redirect()->route('dashboard.products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();

        return view('dashboard.products.edit', compact('product', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request_data = $request->except('image');

        if ($request->image) {
            foreach ($product->productimages()->get('image') as $image) {
                if ($image != "default.png") {
                    Storage::disk('public_uploads')->delete('/product_images/' . $image);

                }

                $images = $request->file('image');
                foreach ($images as $image) {
                    $imagename = time() . '.' . $image->hashName();
                    $img = Image::make($image);
                    $img->save(public_path('uploads/product_images/' . $imagename));
                    $request_data['image'] = $imagename;
                    $request_data += ['product_id' => $product->id];
                    $product->productimages()->update($request_data);
                }

            }

        }
        $product->update($request_data);

        session()->flash('success', ('site.edit_successfully'));
        return redirect()->route('dashboard.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Product $product)
    {

        foreach ($product->productimages()->get('image') as $image) {
            if ($image != "default.png") {
                Storage::disk('public_uploads')->delete('/product_images/' . $image);

            }
        }

        $product->productimages()->delete();
        $product->delete();
        session()->flash('success', ('site.delete_successfully'));
        return redirect()->route('dashboard.products.index');

    }
}

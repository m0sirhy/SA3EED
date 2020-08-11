<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Image;
use Illuminate\Support\Facades\Storage;

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
        $categories=Category::latest()->paginate(6);
        return view('dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' =>'required',
        ]);
        //
        $request_data=$request->except(['image']);
        if($request->image){
            $images = $request->file('image');
                  //The Hahs Used to prevent duplicates
        $imagename= time().'.'.$images->hashName();

        $img = Image::make($images);
   // resize the image to a width of 160 and constrain aspect ratio (auto height)
        /*->resize(160, null, function ($constraint) {
                                                 $constraint->aspectRatio();

                                                });
*/
                // now you are able to resize the instance
              //  $img->resize(320, 240);
                // and insert a watermark for example
                //$img->insert('public/watermark.png');

                         // finally we save the image as a new file
                      $img->save(public_path('uploads/categories_images/'.$imagename));
                      //save it name to the  table
                      $request_data['image']=  $imagename;

              }

        Category::create($request_data);
        session()->flash('success','site.add_successfully');
return redirect()->route('dashboard.categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Category $category)
    {
        //
        return view('dashboard.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        //
        $request_data=$request->except(['image']);
        if ($request->image) {
        if($category->image != 'default.png'){
            $image=$request->file('image');
            $imagename=time().'.'.$image->hashName();
            $image=Image::make($image);
            $image->save(public_path('uploads/categories_images/'.$imagename));

            $request_data['image']=$imagename;
        }
        }

        $category->update($request_data);
        session()->flash('success','site.edit_successfully');
        return redirect()->route('dashboard.categories.index');
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

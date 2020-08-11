<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\User;
use Image;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','store']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
    }


    public function index()
    {
        //
       $users=User::role('admin')->latest()->paginate(5);;
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.users.create');

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
        $request->validate(        [

          'user_name'=>'required',
          'first_name'=>'required',   
          'last_name'=>'required',   
          'email'=>'required',   
          'image'=>'image',   

          'password'=>'required|confirmed',   
                  ]
    );
       $request_data=$request->except(['password','password_confirmation','permissions','image']);
       $request_data['password']=bcrypt($request->password);
              if($request->image){
                  $image = $request->file('image');
                  //The Hahs Used to prevent duplicates
        $imagename= time().'.'.$image->hashName();
        // resize the image to a width of 160 and constrain aspect ratio (auto height)
        $img = Image::make($image)->resize(160, null, function ($constraint) {
                                                 $constraint->aspectRatio();
                                                        
                                                });

                // now you are able to resize the instance
                $img->resize(320, 240);
                // and insert a watermark for example
                //$img->insert('public/watermark.png');

                         // finally we save the image as a new file
                      $img->save(public_path('uploads/user_images/'.$imagename));
                      //save it name to the  table
                      $request_data['image']=  $imagename;

              }
                  ///Save Allthe staff
                   $user=User::create($request_data);

       //Assignig Roles
       $user->assignRole('Admin');
       //Sync Specfic Permissions for The Role
       $user->syncPermissions($request->input('permissions'));

       session()->flash('success',('site.add_successfully'));
       return redirect()->route('dashboard.users.index');
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
        return view('dashboard.users.profile');

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
        $user=User::find($id);

                return view('dashboard.users.edit',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $request->validate(        [

'user_name'=>'required',   
'first_name'=>'required',   
'last_name'=>'required',   
'email'=>'required',   
'image'=>'image',   

        ]
);
        $request_data=$request->except(['permissions','image']);
        
        if($request->image){
            if($user->image !="default.png"){
     Storage::disk('public_uploads')->delete('/user_images/'.$user->image);

 }
                  $image = $request->file('image');
                  //The Hahs Used to prevent duplicates
        $imagename= time().'.'.$image->hashName();
        // resize the image to a width of 160 and constrain aspect ratio (auto height)
        $img = Image::make($image)->resize(160, null, function ($constraint) {
                                                 $constraint->aspectRatio();
                                                        
                                                });

                // now you are able to resize the instance
                $img->resize(320, 240);
                // and insert a watermark for example
                //$img->insert('public/watermark.png');

                         // finally we save the image as a new file
                      $img->save(public_path('uploads/user_images/'.$imagename));
                      //save it name to the  table
                      $request_data['image']=  $imagename;

              }
      
      
              $user->update($request_data);
              $user->syncPermissions($request->input('permissions'));
        
               session()->flash('success',('site.edit_successfully'));
               return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
 if($user->image !="default.png"){
     Storage::disk('public_uploads')->delete('/user_images/'.$user->image);

 }
        $user->delete();      
             session()->flash('success',('site.delete_successfully'));
               return redirect()->route('dashboard.users.index');  
    }
}

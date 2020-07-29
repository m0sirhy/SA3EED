<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Auth::routes();

    Route::get('/', 'LandingController@index');


    Route::get('/discraption/{id}', 'ProductController@discraption');





    Route::get('/my_pr', function () {
        return view('user_side.my_products');
    });
    Route::get('/my_store', function () {
        return view('user_side.my_store');
    });




    Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('user','UserController');

    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController')->only([
        'index', 'show'
    ]);
    Route::resource('tag', 'TagController');
    Route::resource('favorite', 'favoriteController');

});


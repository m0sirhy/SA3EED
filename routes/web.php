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

use App\Http\Controllers\LandingController;

Route::group(['prefix' => LaravelLocalization::setLocale()], function() {
    Auth::routes();

    Route::get('/', 'LandingController@index')->name('land');


    Route::get('/discraption/{id}', 'ProductController@discraption');


    Route::get('/add_product', function () {
        return view('user_side.add_product');
    });


    Route::get('/my_pr', function () {
        return view('user_side.my_products');
    });
    Route::get('/my_store', function () {
        return view('user_side.my_store');
    });




    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController')->only([
        'index', 'show'
    ]);


});
Route::group(['middleware' => ['auth']], function () {
    Route::resource('user','UserController');

    Route::get('/my_store','LandingController@my_store');


    Route::get('/my_products','LandingController@my_products' )->name('my');

});
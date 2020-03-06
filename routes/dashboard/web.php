<?php

/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('welcome', function () {
                return view('dashboard.index');
            });
            Route::Resource('/', 'DashboardController');

            //User Route
            Route::Resource('users', 'UserController');
            Route::Resource('categories', 'CategoryController');

            //Roles Route
            Route::resource('roles', 'RoleController');
            Route::resource('products','ProductController');
        });
    });
});

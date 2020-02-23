<?php
Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('/chk',function(){
        return 'thsis dashboard';
    });


});

<?php

use App\Http\Controllers\Admin\PermitController as AdminPermitController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::controller(AdminPermitController::class)->group(function(){
        Route::group(['prefix' => 'permit', 'as' => 'permit.'], function(){
            Route::get('/', 'index')->name('index');
            Route::get('{permit}/show', 'show')->name('show');
            Route::post('{permit}/pemeriksa', 'pemeriksa')->name('pemeriksa');
        });
    });
});

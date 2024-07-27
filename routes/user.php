<?php
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\User\PermitController;


        // Route::group(['prefix' => 'permit', 'as' => 'permit.'], function(){
        //     Route::group(['prefix' => '{permit}'], function(){
        //         Route::get('edit', 'edit')->name('edit');
        //         Route::post('update', 'update')->name('update');
        //         Route::post('deleteDocuments', 'deletePermitDocument')->name('deleteDocuments');
        //         Route::get('renew', 'renew')->name('renew'); //add new renew
        //         Route::post('renew', 'saveRenew')->name('renew'); //add new renew
        //     });
        // });
 

    Route::controller(CompanyController::class)->group(function(){
        Route::group(['prefix' => 'company', 'as' => 'company.'], function(){
            Route::get('/', 'index')->name('index');
            Route::post('/profail', 'profail')->name('company.profail');
            Route::post('/create-company', 'saveForm3')->name('company.saveForm3');
        });
    });






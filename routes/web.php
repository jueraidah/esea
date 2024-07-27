<?php

namespace App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::controller(LoginController::class)
    ->group(function () {

        Route::get('/', 'index')->name('login');
        Route::post('/login', 'store')->name('dologin');
        Route::get('/loginpengguna', 'showLoginForm')->name('loginpengguna');
        Route::get('/loginpentadbir', 'showLoginFormpentadbir')->name('loginpentadbir');
    });

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::controller(RegisterController::class)
    ->group(function () {
        Route::get('/register', 'index')->name('register');
        Route::post('/register', 'store');

         Route::post('register', 'register')->name('register');
    });

Route::controller(ForgotPasswordController::class)
    ->group(function () {
        Route::get('/forget-password', 'showForgetPasswordForm')->name('forget.password.get');
        Route::post('/forget-password', 'submitForgetPasswordForm')->name('forget.password.post');
        Route::get('/reset-password/{token}', 'showResetPasswordForm')->name('reset.password.get');
        Route::post('/reset-password', 'submitResetPasswordForm')->name('reset.password.post');
    });

    Route::middleware('auth')->group(function () {

        // Routes using UserDashboardController
        Route::controller(UserDashboardController::class)->group(function () {
            Route::get('/home', 'index')->name('user.dashboard');
            // Uncomment and define other routes as needed
            // Route::get('/home-test', 'test')->name('user.test');
        });

        // Routes using CompanyController
        Route::controller(CompanyController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('user.dashboard');
            Route::get('/profail', 'profail')->name('user.profail');
            Route::get('/eborang', 'eborang')->name('user.eborang');
            Route::get('/pemegangpassport', 'pemegangpassport')->name('user.pemegangpassport');
            Route::get('/pemegangbukanpassport', 'pemegangbukanpassport')->name('user.pemegangbukanpassport');
            Route::get('/kemasukanbaru', 'tambaheborang')->name('user.kemasukanbaru');
            Route::get('/kemasukanBP', 'tambaheborangBP')->name('user.kemasukanBP');
            Route::get('/company', 'company')->name('user.company');

            // Uncomment and define other routes as needed
            // Route::get('/index-company/{id}/profile', 'index')->name('company.index');
            // Route::get('/create-company', 'create')->name('company.create');
            // Route::post('/create-company', 'saveForm3')->name('company.saveForm3');

        });

        Route::post('/update', [ProfileController::class, 'update'])->name('company.saveForm3');
       
    });


Route::middleware('auth')->group(function(){

    require('user.php');

    require('admin.php');
});




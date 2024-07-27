<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    public function index()
    {
        return view('auth.login');
    }

    public function showLoginForm()
    {
        return view('auth.loginpengguna');  // Ensure this view exists
    }

    public function showLoginFormpentadbir()
    {
        return view('auth.loginpentadbir');  // Ensure this view exists
    }

    public function store(Request $request)
    {
        try
        {

            $this->validate($request, [
                'name' => 'required',
                'password' => 'required',
            ]);

            if (!auth()->attempt($request->only('name', 'password'))){
                return back()->with('status', 'Maklumat log masuk tidak sah! Sila cuba semula .');
            }

            return redirect()->route('user.dashboard');

        } catch(\Exception $exception){
            return back()->with('error', 'Log Masuk Gagal! Sila cuba semula .');
        }
    }
}

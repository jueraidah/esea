<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:users',
            'nama' => 'required|string|max:255',
            'noic' => 'required|string|size:12|unique:users',
            'name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'kewarganegaraan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'dokumen' => 'required|in:Pemegang Pasport,Bukan Pemegang Passport',
            'password' => 'required|string|confirmed|min:8',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user
        User::create([
            'username' => $request->input('username'),
            'nama' => $request->input('nama'),
            'noic' => $request->input('noic'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'kewarganegaraan' => $request->input('kewarganegaraan'),
            'alamat' => $request->input('alamat'),
            'dokumen' => $request->input('dokumen'),
            'password' => Hash::make($request->input('password')),


        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}

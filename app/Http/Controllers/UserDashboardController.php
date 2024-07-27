<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Company,
    User
};

class UserDashboardController extends Controller
{
    public function index()
    {
        $company=Company::where('user_id', auth()->user()->id)->first();

        return view('user.dashboard', compact('company'));
    }

   
}

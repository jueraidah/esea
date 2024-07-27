<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Permit;
use App\Models\Adstype;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PermitStoreRequest;

class PermitController extends Controller
{

    public function index(Company $company)
    {
        return view('user.permit.company')
            ->withCompany($company);
    }

 
}

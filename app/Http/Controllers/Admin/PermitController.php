<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PemeriksaRequest;
use App\Models\Permit;
use App\Models\Roles;
use Illuminate\Http\Request;
use Validator;

class PermitController extends Controller
{
    public function index()
    {
        return view('admin.permit.index')
            ->withPermits(Permit::with('company')->get());
    }

    public function show(Permit $permit)
    {
        return view('admin.permit.show')
            ->withPermit($permit);
    }

    public function pemeriksa(Permit $permit, Request $request)
    {
        if (auth()->user()->hasRole('pemeriksa')) {
            $validation = $request->validate([
                'pemeriksa_status' => 'required',
                'pemeriksa_comment' => 'required'
            ]);

            $permit->status = 1;
            $permit->pemeriksa_status = 1;
            $permit->pemeriksa_comment = $request->pemeriksa_comment;
        } else if (auth()->user()->hasRole('penyokong')) {

            $validation = $request->validate([
                'penyokong_status' => 'required',
                'penyokong_comment' => 'required'
            ]);

            $permit->status = 2;
            $permit->penyokong_status = $request->penyokong_status;
            $permit->penyokong_comment = $request->penyokong_comment;
        } else if (auth()->user()->hasRole('pelulus')) {
            $validation = $request->validate([
                'pelulus_status' => 'required',
                'pelulus_comment' => 'required'
            ]);

            if ($request->pelulus_status == 1) {

                if ($permit->status == 7) {
                    $permit->expired = $permit->renew_date->addYear(2);
                } else {
                    $permit->expired = $permit->created_at->addYear(2);
                }

            } else {

                $permit->expired = NULL;

            }

            $permit->status = ($request->pelulus_status == 1) ? 4 : 5;
            $permit->pelulus_status = $request->pelulus_status;
            $permit->pelulus_comment = $request->pelulus_comment;
        }

        $permit->save();

        return redirect()->back()->with('status', 'Kemaskini telah disimpan');
    }
}

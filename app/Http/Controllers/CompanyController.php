<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{
    User,
    Company,
    License,
    Positionholder,
    Permit
};
use Validator, DB;

class CompanyController extends Controller
{
    public function dashboard()
    {

        return view('user.dashboard');

    }


    public function create()
    {
        return view('company.create');
    }

    public function company()
    {
        // Fetch companies from the database
        $companies = Company::all();

        // Pass the companies to the view
        return view('user.company', compact('companies'));
    }

        public function show()
    {


        $user = Auth::user(); // Fetch the currently authenticated user
        dd($user); // Dump the user object and stop execution

        return view('profile.show', ['user' => $user]); // Pass $user to the view
}

    public function profail()
    {
            // Fetch the currently authenticated user
            $user = Auth::user();

            // Pass the user data to the view
            return view('user.profail', ['user' => $user]);
    }

    public function eborang()
    {
         return view('user.eborang');
    }


    public function pemegangpassport()
    {
         return view('user.pemegangpassport');
    }


    public function pemegangbukanpassport()
    {
         return view('user.pemegangbukanpassport');
    }


    public function tambaheborang()
    {
         return view('user.kemasukanbaru');
    }

    public function tambaheborangBP()
    {
         return view('user.kemasukanBP');
    }

    public function saveForm3(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'birthdate' => 'nullable|date',
            'birthplace' => 'nullable|string|max:255',
            'tel' => 'nullable|string|max:255',
            'license_number' => 'nullable|string|max:255',
            'lokasi' => 'nullable|string|max:255',
            'identification' => 'nullable|string|max:255',
            'kewarganegaraan' => 'nullable|string|max:255',
            'gender' => 'nullable|in:male,female',
            'address1' => 'nullable|string',
            'address2' => 'nullable|string',
            'address3' => 'nullable|string',
            'wilayah' => 'nullable|string|max:255',
            'negeri' => 'nullable|string|max:255',
            'documents.*' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $permit = new Permit();
        $permit->username = $validated['username'];
        $permit->nama = $validated['nama'];
        $permit->birthdate = $validated['birthdate'];
        $permit->birthplace = $validated['birthplace'];
        $permit->tel = $validated['tel'];
        $permit->license_number = $validated['license_number'];
        $permit->lokasi = $validated['lokasi'];
        $permit->identification = $validated['identification'];
        $permit->kewarganegaraan = $validated['kewarganegaraan'];
        $gender = $validated['gender'] ?? 'default_value';
        $permit->address1 = $validated['address1'];
        $permit->address2 = $validated['address2'];
        $permit->address3 = $validated['address3'];
        $permit->wilayah = $validated['wilayah'];
        $permit->negeri = $validated['negeri'];

        // Handle file uploads
        if ($request->hasFile('documents')) {
            foreach ($request->file('documents') as $file) {
                $path = $file->store('public/documents');
                // Save $path to your permit record or handle it as needed
            }
        }

        $permit->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }



}

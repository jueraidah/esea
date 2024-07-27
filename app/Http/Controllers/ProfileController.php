<?php
namespace App\Http\Controllers;

use App\Models\Permit; // Correct namespace
use Illuminate\Http\Request;
class ProfileController extends Controller
{

    public function profail()
    {
            $user = Auth::user();
            return view('user.profail', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // Validate input data
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

        // Find the existing permit record or fail if not found
        $permit = Permit::findOrFail($id);

        // Update the permit record with validated data
        $permit->username = $validated['username'];
        $permit->nama = $validated['nama'];
        $permit->birthdate = $validated['birthdate'];
        $permit->birthplace = $validated['birthplace'];
        $permit->tel = $validated['tel'];
        $permit->license_number = $validated['license_number'];
        $permit->lokasi = $validated['lokasi'];
        $permit->identification = $validated['identification'];
        $permit->kewarganegaraan = $validated['kewarganegaraan'];
        $permit->gender = $validated['gender'] ?? 'default_value';
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
                // For example, you might want to save file paths in a separate table
            }
        }

        // Save the updated permit record
        $permit->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}

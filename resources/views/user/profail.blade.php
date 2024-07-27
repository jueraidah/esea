@extends('layouts.master')

@push('style')
<style>
.profile-pic-wrapper {
    display: inline-block;
    text-align: center;
    margin-top: 10px;
}

.profile-pic {
    width: 150px; /* Adjust the size as needed */
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd;
    display: block;
    margin-bottom: 10px;
}

.file-upload-input {
    display: none;
}

.file-upload-btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.file-upload-btn:hover {
    background-color: #0056b3;
}
</style>

@endpush

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-header">

            </div>

            <div class="card-body">

                <h4 style="text-align: center;">Profail</h4>

                <h4 class="card-title">Maklumat Peribadi</h4>
                <p class="card-description">Sila Lengkapkan Maklumat</p>
                <form action="{{ route('company.saveForm3') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container">
                        <div class="row">
                            <!-- First Column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profilePicUpload">Kemaskini Gambar +</label>
                                    <div class="profile-pic-wrapper">
                                        <img id="profileImage" src="path/to/default/profile/pic.jpg" alt="Profile Picture" class="profile-pic">
                                        <input type="file" id="profilePicUpload" name="documents[]" class="file-upload-input" accept="image/*" multiple>
                                        <button class="file-upload-btn" onclick="document.getElementById('profilePicUpload').click();">Upload Document</button>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name"><i>(a)</i> Nama Penuh </label>
                                    <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}">
                                </div>

                                <div class="form-group">
                                    <label for="namekeluarga"><i>(b)</i> Nama Keluarga</label>
                                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $user->nama }}">
                                </div>

                                <div class="form-group">
                                    <label for="birthdate"><i>(j)</i> Tarikh Lahir</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthdate" maxlength="12" value="">
                                </div>

                                <div class="form-group">
                                    <label for="birthplace"><i>(k)</i> Tempat Lahir</label>
                                    <input type="text" class="form-control" name="birthplace" id="birthplace" maxlength="12" value="">
                                </div>

                                <div class="form-group">
                                    <label for="tel"><i>(g)</i> Bandar</label>
                                    <input type="text" class="form-control" name="tel" id="tel" value="">
                                </div>

                                <div class="form-group">
                                    <label for="license_number"><i>(i)</i> Poskod </label>
                                    <input type="text" class="form-control" name="license_number" id="license_number" maxlength="12" value="">
                                </div>

                                <div class="form-group">
                                    <label for="lokasi"><i>(k)</i> Lokasi </label>
                                    <select class="form-control form-control-lg" name="lokasi" id="lokasi">
                                        <option value="">Select Location</option>
                                        <option value="location1" {{ $user->lokasi == 'location1' ? 'selected' : '' }}>Peninsular Malaysia</option>
                                        <option value="location2" {{ $user->lokasi == 'location2' ? 'selected' : '' }}>Sarawak</option>
                                        <option value="location3" {{ $user->lokasi == 'location3' ? 'selected' : '' }}>Labuan</option>
                                        <option value="location4" {{ $user->lokasi == 'location4' ? 'selected' : '' }}>Brunei</option>
                                        <option value="location5" {{ $user->lokasi == 'location5' ? 'selected' : '' }}>Singapore</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>

                            </div>

                            <!-- Second Column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="identification"><i>(c)</i> No.Passport </label>
                                    <input type="text" class="form-control" name="identification" id="identification" value="{{ $user->noic }}">
                                </div>

                                <div class="form-group">
                                    <label for="kewarganegaraan"><i>(h)</i> Kewarganegaraan</label>
                                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" maxlength="12" value="{{ $user->kewarganegaraan }}">
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <div class="form-group">
                                        <input type="radio" id="male" name="gender" value="male" class="form-check-input">
                                        <label for="male" class="form-check-label">Male</label>&nbsp;
                                        <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                                        <label for="female" class="form-check-label">Female</label>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="address1"><i>(d)</i>Alamat 1</label>
                                    <textarea class="form-control" rows="4" name="address1">{{ $user->address1 }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="address2"><i>(e)</i> Alamat  2</label>
                                    <textarea class="form-control" rows="4" name="address2">{{ $user->address2 }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="address3"><i>(f)</i> Alamat 3</label>
                                    <textarea class="form-control" rows="4" name="address3">{{ $user->address3 }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="wilayah"><i>(g)</i> Wilayah</label>
                                    <input type="text" class="form-control" name="wilayah" id="wilayah" value="">
                                </div>

                                <div class="form-group">
                                    <label for="negeri"><i>(g)</i> Negeri </label>
                                    <input type="text" class="form-control" name="negeri" id="negeri" value="">
                                </div>


                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary me-2 float-end">Submit</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('profilePicUpload').addEventListener('change', function(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function() {
            const dataURL = reader.result;
            const output = document.getElementById('profileImage');
            output.src = dataURL;
        };

        if (input.files.length > 0) {
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
@endpush

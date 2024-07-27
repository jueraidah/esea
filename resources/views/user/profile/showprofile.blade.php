<!-- resources/views/profile/show.blade.php -->
@extends('layouts.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <!-- Optional header content -->
            <h4>Profile Details</h4>
        </div>
        <div class="card-body">
            <h4 class="card-title">Profile Information</h4>
            <p class="card-description">Below are the details of the profile</p>

            <div class="container">
                <div class="row">
                    <!-- Displaying permit details -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <p>{{ $permit->username }}</p>
                        </div>

                        <div class="form-group">
                            <label for="nama">Full Name</label>
                            <p>{{ $permit->nama }}</p>
                        </div>

                        <div class="form-group">
                            <label for="birthdate">Date of Birth</label>
                            <p>{{ $permit->birthdate }}</p>
                        </div>

                        <div class="form-group">
                            <label for="birthplace">Place of Birth</label>
                            <p>{{ $permit->birthplace }}</p>
                        </div>

                        <div class="form-group">
                            <label for="tel">Phone</label>
                            <p>{{ $permit->tel }}</p>
                        </div>

                        <div class="form-group">
                            <label for="license_number">License Number</label>
                            <p>{{ $permit->license_number }}</p>
                        </div>

                        <div class="form-group">
                            <label for="lokasi">Location</label>
                            <p>{{ $permit->lokasi }}</p>
                        </div>

                        <div class="form-group">
                            <label for="identification">Identification</label>
                            <p>{{ $permit->identification }}</p>
                        </div>

                        <div class="form-group">
                            <label for="kewarganegaraan">Citizenship</label>
                            <p>{{ $permit->kewarganegaraan }}</p>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <p>{{ $permit->gender }}</p>
                        </div>

                        <div class="form-group">
                            <label for="address1">Address 1</label>
                            <p>{{ $permit->address1 }}</p>
                        </div>

                        <div class="form-group">
                            <label for="address2">Address 2</label>
                            <p>{{ $permit->address2 }}</p>
                        </div>

                        <div class="form-group">
                            <label for="address3">Address 3</label>
                            <p>{{ $permit->address3 }}</p>
                        </div>

                        <div class="form-group">
                            <label for="wilayah">Region</label>
                            <p>{{ $permit->wilayah }}</p>
                        </div>

                        <div class="form-group">
                            <label for="negeri">State</label>
                            <p>{{ $permit->negeri }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

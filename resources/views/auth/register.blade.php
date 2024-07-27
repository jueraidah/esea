@extends('layouts.master-mini')

@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center justify-content-center auth">
            <div class="row flex-grow">
                <div class="col-md-8 col-lg-6 mx-auto"> <!-- Center the form container -->
                    <div class="auth-form-light text-left p-5">

                        @if (session('error'))
                            <div class="alert alert-fill-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @elseif (session('status'))
                            <div class="alert alert-fill-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>e-Borang Daftar Pengguna</h4>
                        <h6 class="font-weight-light">Sila masukkan maklumat Daftar Pengguna anda.</h6>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username">Nama Penuh</label>
                                <input type="text" id="username" name="username" class="form-control" value="{{ old('username') }}" required>
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Keluarga</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama') }}" required>
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="noic">No Passport</label>
                                <input type="text" id="noic" name="noic" class="form-control" value="{{ old('noic') }}" required>
                                @error('noic')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">ID Pengguna</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kewarganegaraan">Warganegara</label>
                                <input type="text" id="kewarganegaraan" name="kewarganegaraan" class="form-control" value="{{ old('kewarganegaraan') }}" required>
                                @error('kewarganegaraan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
                                @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dokumen">Jenis Dokumen</label>
                                <select id="dokumen" name="dokumen" class="form-control" required>
                                    <option value="Pemegang Pasport" {{ old('dokumen') == 'Pemegang Pasport' ? 'selected' : '' }}>Pemegang Pasport</option>
                                    <option value="Bukan Pemegang Passport" {{ old('dokumen') == 'Bukan Pemegang Passport' ? 'selected' : '' }}>Bukan Pemegang Passport</option>
                                </select>
                                @error('dokumen')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Kata Laluan</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Sahkan Kata Laluan</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
@endpush

@extends('layouts.master')

@push('style')
@endpush

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h6></h6>
            </div>

            <div class="card-body">
                <h4 style="text-align: center;">e-BORANG PERMOHONAN (PEMEGANG PASPORT)</h4>
                <p class="text-wrap">
                    Arahan
                    <br>1. e-Borang ini hendaklah dihantar selewat-lewatnya 3 hari bekerja sebelum pelepasan pemohon ke Negeri Sabah.
                    <br>2. Sila pastikan semua maklumat diisi dengan lengkap. Pemohon yang tidak lengkap tidak akan diproses.
                    <br>3. Permohonan ini akan disemak dalam tempoh 24 jam selepas dihantar.
                </p>

                <h4 class="card-title">Maklumat Peribadi </h4>
                <p class="card-description">SILA LENGKAPKAN MAKLUMAT</p>
                <form action="{{ route('company.saveForm3') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Maklumat Kemasukan Ke Sabah </h4>

                                <div class="form-group">
                                    <label for="date_enter"><i>(j)</i> Tarikh Masuk Ke Sabah</label>
                                    <input type="date" class="form-control" name="date_enter" id="date_enter" maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label for="date_exit"><i>(j)</i> Tarikh Keluar Ke Sabah</label>
                                    <input type="date" class="form-control" name="date_exit" id="date_exit" maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label for="mod"><i>(j)</i> Mod Kemasukan Ke Sabah</label>
                                    <input type="text" class="form-control" name="mod" id="mod" maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label for="telefon"><i>(j)</i> No Telefon</label>
                                    <input type="text" class="form-control" name="telefon" id="telefon" maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label for="email"><i>(j)</i> Alamat Email</label>
                                    <input type="text" class="form-control" name="email" id="email" maxlength="12">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lokasi"><i>(k)</i> Pilih Lokasi</label>
                                    <select class="form-control form-control-lg" name="lokasi" id="lokasi">
                                        <option value="">Pilih Lokasi</option>
                                        <option value="location1">Semenanjung Malaysia</option>
                                        <option value="location2">Sarawak</option>
                                        <option value="location3">Labuan</option>
                                        <option value="location4">Brunei</option>
                                        <option value="location5">Singapura</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ketibaan"><i>(j)</i> Lokasi Ketibaan</label>
                                    <input type="text" class="form-control" name="ketibaan" id="ketibaan" maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><i>(j)</i> Alamat Semasa berada di Sabah</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" maxlength="12">
                                </div>
                                <div class="form-group">
                                    <label for="justifikasi"><i>(j)</i> Justifikasi Lawatan</label>
                                    <textarea class="form-control" rows="4" name="justifikasi"></textarea>
                                </div>
                            </div>
                        </div>

                        <p class="text-wrap">
                            <input type="checkbox" id="confirmationCheckbox">
                            <label for="confirmationCheckbox">SAYA MENGESAHKAN BAHAWA MAKLUMAT YANG SAYA BERIKAN DI DALAM BORANG PERMOHONAN DAN DOKUMEN YANG TELAH SAYA SERATKAN ADALAH TEPAT DAN BENAR.</label>
                        </p>
                    </div>

                    <button type="submit" class="btn btn-primary me-2 float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush

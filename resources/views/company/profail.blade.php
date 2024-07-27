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

                <h4 style="text-align: center;">Profail</h4>

                <h4 class="card-title">Maklumat Peribadi</h4>
                <p class="card-description">SILA LENGKAPKAN MAKLUMAT</p>
                <form action="{{ route('company.saveForm3') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container">
                        <div class="row">
                            <!-- First Column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName1">Muat Naik Gambar +</label>
                                    <div class="input-group">
                                        <input type="file" name="documents[]"
                                            class="form-control file-upload-info btn-primary" placeholder="Upload Dokumen"
                                            multiple>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name"><i>(a)</i> Nama sebenar pemohon (Seperti Dalam Dokumen Pengenalan Diri)</label>
                                    <input type="text" class="form-control" name="name" id="name" value="">
                                </div>

                                <div class="form-group">
                                    <label for="namekeluarga"><i>(b)</i> Keluarga (Seperti Dalam Dokumen Pengenalan Diri)</label>
                                    <input type="text" class="form-control" name="namekeluarga" id="namekeluarga" value="">
                                </div>

                                <div class="form-group">
                                    <label for="birthdate"><i>(j)</i> Tarikh Lahir</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthdate" maxlength="12">
                                </div>

                                <div class="form-group">
                                    <label for="birthplace"><i>(k)</i> Tempat Lahir</label>
                                    <input type="text" class="form-control" name="birthplace" id="birthplace" maxlength="12">
                                </div>

                                <div class="form-group">
                                    <label for="tel"><i>(g)</i> Bandar</label>
                                    <input type="text" class="form-control" name="tel" id="tel" value="">
                                </div>

                                <div class="form-group">
                                    <label for="license_number"><i>(i)</i> Poskod</label>
                                    <input type="text" class="form-control" name="license_number" id="license_number" maxlength="12" value="">
                                </div>
                            </div>

                            <!-- Second Column -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="identification"><i>(c)</i> No.Pasport</label>
                                    <input type="text" class="form-control" name="identification" id="identification" value="">
                                </div>

                                <div class="form-group">
                                    <label for="kewarganegaraan"><i>(h)</i> Kewarganegaraan</label>
                                    <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" maxlength="12" value="">
                                </div>

                                <div class="form-group">
                                    <label for="address1"><i>(d)</i> Alamat Baris 1</label>
                                    <textarea class="form-control" rows="4" name="address1"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="address2"><i>(e)</i> Alamat Baris 2</label>
                                    <textarea class="form-control" rows="4" name="address2"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="address3"><i>(f)</i> Alamat Baris 3</label>
                                    <textarea class="form-control" rows="4" name="address3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="wilayah"><i>(g)</i> Wilayah</label>
                                    <input type="text" class="form-control" name="wilayah" id="wilayah" value="">
                                </div>

                                <div class="form-group">
                                    <label for="negeri"><i>(g)</i> Negeri</label>
                                    <input type="text" class="form-control" name="negeri" id="negeri" value="">
                                </div>

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
@endpush

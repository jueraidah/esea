@extends('layouts.master')

@push('style')
<!-- Add any necessary styles here -->
@endpush

@section('content')
<div class="col-md-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <h4 class="col-sm-2 card-title"></h4>
                        <div class="col-sm-10">
                            <a href="{{ route('user.kemasukanbaru') }}" type="button" style="float: right;" class="btn btn-primary btn-rounded btn-sm">
                                <i class="icon-docs me-2"></i> DAFTAR BORANG BARU
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center; width: 5%">#</th>
                                    <th style="width: 25%">NAMA PEMOHON</th>
                                    <th style="width: 10%">NO.PASSPORT</th>
                                    <th style="width: 30%">ALAMAT</th>
                                    <th style="width: 10%">NO. TEL</th>
                                    <th style="text-align: center; width: 20%">TINDAKAN</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach ($companies as $key => $company)
                                <tr>
                                    <td style="text-align: center;">{{ ++$key }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->identification }}</td>
                                    <td class="text-wrap">{{ $company->address }}</td>
                                    <td>{{ $company->tel }}</td>
                                    <td style="text-align: center;">

                                    </td>
                                </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Add any necessary scripts here -->
@endpush

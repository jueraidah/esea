@extends('layouts.master')

@push('style')

<style>
    .img-wrap {
        position: relative;
    }

    .img-wrap .close {
        position: absolute;
        top: 2px;
        right: 2px;
        z-index: 100;
        color: red;
        font-size: 18px;
        cursor: pointer;
    }
</style>

@endpush
@section('title')
<h2></h2>
@endsection
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Penuh</th>
                        <th scope="col">Nama Keluarga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tarikh Permohonan</th>
                        <th scope="col">Tarikh Kemasukan Ke Sabah</th>
                        <th scope="col">Tarikh Keluar Dari Sabah</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($permits as $key => $permit)
                    {{-- {{dd($permit->company)}} --}}
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>
                            @if($permit->company->name != null)

                            {{ $permit->company->name }}

                            @endif
                        </td>
                        <td>{{ $permit->company->user->name }}</td>
                        <td>{{ config('data.permit_status')[$permit->status] }}</td>
                        <td>{{ $permit->created_at->format('d-M-y') }}</td>
                        <td>
                            @if($permit->renew_date != null )
                            {{ $permit->renew_date->format('d-M-Y') }}
                            @endif
                        </td>
                        <td>
                            @if($permit->expired != null )
                            {{ $permit->expired->format('d-M-Y') }}
                            @endif
                        </td>
                        <td>

                            <div class="row">
                                <div class="col"><a href="{{ route('admin.permit.show', [$permit]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a></div>
                            </div>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

@push('scripts')
@endpush

@push('custom-scripts')

@endpush

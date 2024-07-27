@extends('layouts.master')

@push('style')

<style>
    .table-width {
        width: 200px;
    }

    table tr th, table tr td{
        padding: 10px !important;
    }

</style>

@endpush
@section('title')
<h2></h2>
@endsection
@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">

        <form action="{{ route('admin.permit.pemeriksa', $permit) }}" method="POST">
            @csrf

            <div class="card-body">

                <div class="row mt-4 mb-4">
                    <h5>Maklumat Pemohon</h5> &nbsp;
                    @include('admin.permit.company-info')
                </div>
                <!--row-->

                {{-- <div class="row mt-4 mb-4">
                    <h3>Maklumat Pemohon Syarikat</h3>
                    @include('admin.permit.user-info')
                </div> --}}
                <!--row-->

                <div class="row mt-4 mb-4">
                    <h5>Maklumat Pemohonan Kemasukan Individu</h5> &nbsp;
                    @include('admin.permit.permit-info')
                </div>
                <!--row-->

                <div class="row mt-4 mb-4">
                    <h5>Tindakan</h5>
                    @role('pelulus')
                    @include('admin.permit.pelulus-info')
                    @else
                    @include('admin.permit.tindakan-info')
                    @endrole
                </div>
                <!--row-->

                <div class="row">
                    <div class="col">
                        <a type="button" class="btn" href="{{ route('admin.permit.index') }}">Cancel</a>
                        <button class="btn btn-primary float-end">Submit</button>
                    </div>

                </div>

            </div>
            <!--card-body-->
            @role('penyokong')
            <input id="penyokong_status" type="hidden" name="penyokong_status" value="{{ $permit->pelulus_status }}">
            @endrole

            @role('pelulus')
            <input id="pelulus_status" type="hidden" name="pelulus_status" value="{{ $permit->pelulus_status }}">
            @endrole
        </form>


    </div>
</div>
@endsection

@push('scripts')
@endpush

@push('custom-scripts')
<script>
    $(".form-check-input.penyokong").change(function() {
        $(".form-check-input").prop('checked', false);
        $(this).prop('checked', true);
        $('#penyokong_status').val($(this).val());
    });

    $(".form-check-input.pelulus").change(function() {
        $(".form-check-input").prop('checked', false);
        $(this).prop('checked', true);
        $('#pelulus_status').val($(this).val());
    });

</script>
@endpush

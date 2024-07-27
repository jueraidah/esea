&nbsp;&nbsp;
<div class="form-group">
    <label for="address"><i>(a)</i> Tarikh Permohonan</label>
    <input class="form-control" name="created_at" id="created_at" rows="4" value=" {{ $permit->created_at->format('d-M-y') }}">
</div>
<div class="form-group">
    <label for="noTel"><i>(b)</i>Dokumen </label>
    <input type="text" class="form-control" name="getAds" id="getAds" value=" {{$permit->getAds()}}">
</div>
<div class="form-group">
    <label for="companyLevel"><i>(c)</i> Dokomen Sokongan</label>
    {{-- <input type="text" class="form-control" name="getDocuments" id="getDocuments" value="{!! $permit->getDocuments() !!}"> --}}


    <td>:
        <br> [{!! $permit->getDocuments() !!}]</td>
</div>

{{--

<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th class="table-width">Tarikh Permohonan</th>
                <td>: {{ $permit->created_at->format('d-M-y') }}</td>
            </tr>

            <tr>
                <th>Jenis Iklan</th>
                <td>: {{ $permit->getAds() }}</td>
            </tr>

            <tr>
                <th>Dokumen Sokongan</th>
                <td>: {!! $permit->getDocuments() !!}</td>
            </tr>

        </table>
    </div>
</div><!--table-responsive--> --}}

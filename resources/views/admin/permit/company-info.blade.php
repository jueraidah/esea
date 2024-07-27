
&nbsp;

 <div class="form-group">
    <label for="companyName"><i>(a)</i> Nama sebenar pemohon </label>
    <input type="text" class="form-control" name="name" id="name" value=" {{  $permit->company->name }}">
</div>

<div class="form-group">
    <label for="identification"><i>(b)</i> No. Passport</label>
    <input type="text" class="form-control" name="identification" id="identification" value=" {{ $permit->company->identification }}">
</div>
<div class="form-group">
    <label for="address"><i>(c)</i> Alamat persendirian pemohon</label>
    <textarea class="form-control" name="address" id="address" rows="4" value=" {{$permit->company->address }}"></textarea>
</div>
<div class="form-group">
    <label for="noTel"><i>(d)</i> No. telefon</label>
    <input type="text" class="form-control" name="tel" id="noTel" value=" {{$permit->company->tel }}">
</div>
<div class="form-group">
    <label for="companyLevel"><i>(e)</i> Kewarganegaraan </label>
    <input type="text" class="form-control" name="level" id="level" maxlength="12" value=" {{$permit->company->level }}">
</div>

<div class="form-group">
    <label for="companyLevel"><i>(e)</i> Alamat Email :</label>
    <input type="text" class="form-control" name="level" id="level" maxlength="12" value=" {{$permit->company->license_number }}" >
</div>






{{-- <div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th class="table-width">Nama Syarikat</th>
                <td>: {{ $permit->company->name }}</td>
            </tr>

            <tr>
                <th>Telefon Number</th>
                <td>: {{ $permit->company->tel }}</td>
            </tr>

            <tr>
                <th>Alamat Syarikat</th>
                <td>: {{ $permit->company->address }}</td>
            </tr>

            <tr>
                <th>Nombor Lesen</th>
                <td>: {{ $permit->company->license_number }}</td>
            </tr>

        </table>
    </div>
</div><!--table-responsive--> --}}

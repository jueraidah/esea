<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            @role('pemeriksa|pelulus')
            <tr>
                <th class="table-width">Pengesahan Pemeriksa</th>
                <td>
                    <div class="form-check form-group">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="pemeriksa_status" value="1" @if($permit->pemeriksa_status == 1) checked @endif> Saya mengesahkan pemohonan ini telah diperiksa
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
                <th>Ulasan Pemeriksa</th>
                <td>:
                    <textarea name="pemeriksa_comment" id="" cols="120" rows="10">{{ $permit->pemeriksa_comment }}</textarea>
                </td>
            </tr>

            @endrole

            @role('penyokong')
            <tr>
                <th class="table-width">Pengesahan Penyokong</th>
                <td>
                    <div class="form-check form-group">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input penyokong" name="status_yes" value="1" @if($permit->penyokong_status == 1) checked @endif> Saya mengesahkan MENYOKONG  permohonan ini
                        </label>
                    </div>

                    <div class="form-check form-group">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input penyokong" name="status_no" value="2" @if($permit->penyokong_status == 2) checked @endif> Saya mengesahkan TIDAK MENYOKONG permohonan ini
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
                <th>Ulasan Penyokong</th>
                <td>:
                    <textarea name="penyokong_comment" id="" cols="100" rows="10">{{ $permit->penyokong_comment }}</textarea>
                </td>
            </tr>

            @endrole

        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <p class="col-sm-9">Tarikh : {{  now()->format('d/m/Y') }}</p>
                        <div class="col-sm-3">
                            <p class="text-center" style="border-bottom: 1px dotted"></p><p class="text-center">(Tandatangan)</p>
                        </div>
                    </div>

              <div class="form-group row">
                        <p class="col-sm-9"></p>
                        <div class="col-sm-3">
                            <p class="text-center" style="border-bottom: 1px dotted">{{ $permit->name }} </p><p class="text-center">(Nama/Jawatan)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--table-responsive-->

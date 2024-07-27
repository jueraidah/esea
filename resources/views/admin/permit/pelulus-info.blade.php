<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th class="table-width">Pengesahan Pelulus</th>
                <td>
                    <div class="form-check form-group">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input pelulus" name="pelulus_status" value="1" @if($permit->pelulus_status == 1) checked @endif> Saya mengesahkan MELULUSKAN permohonan ini
                        </label>
                    </div>


                    <div class="form-check form-group">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input pelulus" name="pelulus_status" value="2" @if($permit->pelulus_status == 2) checked @endif> Saya mengesahkan TIDAK MELULUSKAN permohonan ini
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
                <th>Ulasan Pelulus</th>
                <td>:
                    <textarea name="pelulus_comment" id="" cols="100" rows="10">{{ $permit->pelulus_comment }}</textarea>
                </td>
            </tr>

        </table>
    </div>
</div>
<!--table-responsive-->

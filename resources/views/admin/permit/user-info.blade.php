<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">

            <tr>
                <th class="table-width">Nama Pemilik</th>
                <td>: {{ $permit->company->user->name }}</td>
            </tr>

            <tr>
                <th>No Kad Pengenalan</th>
                <td>: {{ $permit->company->user->noic }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>: {{ $permit->company->user->email }}</td>
            </tr>

        </table>
    </div>
</div><!--table-responsive-->

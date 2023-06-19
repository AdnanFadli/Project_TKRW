    <h3 align="center">LAPORAN KAS MASUK</h3>
    <h4 align="center">Pondok Pesantren Mazroatul ulum</h4>
    <div class="card">
        <div class="card-body">
            <h2></h2>
            <table class="static" align="center" rules="all" border="2px" style="width: 95%;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemasukan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($cetakPertanggal->count() > 0)
                        @foreach ($cetakPertanggal as $masuk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $masuk->nama_pemasukan }}</td>
                                <td>{{ $masuk->jumlah }}</td>
                                <td>{{ $masuk->tanggal_masuk }}</td>
                                <td>{{ $masuk->keterangan }}</td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

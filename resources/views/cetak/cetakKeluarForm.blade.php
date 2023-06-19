@extends('layouts.tampil')
@section('content')
    <h3 align="center">LAPORAN KAS KELUAR PERTANGGAL</h3>
    <div class="card">
        <h1></h1>
        <div class="card-body">
            <div class="col">
                <label for="tglawal" class="col-sm-2 col-form-label">Tanggal Awal :</label>
                <div class="col mb-3">
                    <input type="date" class="form-control form-control-sm" id="tglawal" name="tglawal">
                </div>
            </div>
            <div class="col">
                <label for="tglakhir" class="col-sm-2 col-form-label">Tanggal Akhir :</label>
                <div class="col mb-3">
                    <input type="date" class="form-control form-control-sm" id="tglakhir" name="tglakhir">
                </div>
            </div>
        </div>
        <div class="text-center">
            <a onclick="this.href='cetakKeluarPertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value"
                target="blank" class="btn btn-primary col-md-12">Lihat Laporan
                Pertanggal
                <i class="bx bxs-printer"></i></a>
        </div>
        <h1></h1>
    </div>
@endsection

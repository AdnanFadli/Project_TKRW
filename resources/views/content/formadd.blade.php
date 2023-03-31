@extends('layouts.tampil')

@section('content')
    <h3>Form Tambah Data Santri</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('dtsantri') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('dtsantri') }}">
                @csrf
                <div class="row mb-3">
                    <label for="txtnis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" id="txtnis" name="txtnis">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="txtnama" name="txtnama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtjenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-select form-selet-sm" name="txtjenkel" id="txtjenkel">
                            <option value="" selected>-Pilih-</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="txttpt_lahir" name="txttpt_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txttgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="txttgl_lahir" name="txttgl_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtnmm_ortu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="txtnmm_ortu" name="txtnmm_ortu">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-success">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

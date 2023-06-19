@extends('layouts.tampil')

@section('content')
    <h3>Form Tambah Santri</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('santri.index') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('santri.store') }}">
                @csrf
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">FOTO</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control form-control-sm" id="foto" name="foto">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" id="nis" name="nis">
                        @error('nis')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select class="form-select form-selet-sm" id="jenkel" name="jenkel">
                            <option value="" selected>-Pilih-</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="tpt_lahir" name="tpt_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahun_masuk" class="col-sm-2 col-form-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm" id="tahun_masuk" name="tahun_masuk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nm_ortu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nm_ortu" name="nm_ortu">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah_tagihan" class="col-sm-2 col-form-label">Jumlah Tagihan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="jumlah_tagihan"
                            name="jumlah_tagihan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm-3 btn-success">
                            Simpan
                        </button>
                        <button type="reset" class="btn btn-sm-3 btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--table-->
@endsection

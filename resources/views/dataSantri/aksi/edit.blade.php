@extends('layouts.tampil')

@section('content')
    <h3>Edit Calon Santri</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('santri.store') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('santri.update', $santris->id) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">FOTO</label>
                    <div class="col-sm-5">
                        <input type="file" class="form-control form-control-sm" id="foto" name="foto"
                            value="{{ $santris->foto }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" id="nis" name="nis"
                            value="{{ $santris->nis }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                            value="{{ $santris->nama }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input class="form-control form-control-sm" id="jenkel" name="jenkel"
                            value="{{ $santris->jenkel }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="tpt_lahir" name="tpt_lahir"
                            value="{{ $santris->tpt_lahir }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir"
                            value="{{ $santris->tgl_lahir }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tahun_masuk" class="col-sm-2 col-form-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control form-control-sm" id="tahun_masuk" name="tahun_masuk"
                            value="{{ $santris->tahun_masuk }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nm_ortu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nm_ortu" name="nm_ortu"
                            value="{{ $santris->nm_ortu }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-sm btn-warning">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

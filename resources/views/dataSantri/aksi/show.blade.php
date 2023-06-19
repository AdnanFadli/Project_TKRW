@extends('layouts.tampil')

@section('content')
    <h3>Detail Calon Santri</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('santri.index') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label for="foto" class="col-sm-2 col-form-label">FOTO</label>
                    <div class="card body">
                        <img src="{{ asset('images/' . $santris->foto) }}" class="rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col mb-10">
                        <input type="text" class="form-control form-control-sm" id="nis" name="nis"
                            value="{{ $santris->nis }}" readonly>
                    </div>
                </div>
                <div class="col">
                    <label for="nama" class="col-sm-5 col-form-label">Nama Lengkap</label>
                    <div class="col mb-10">
                        <input type="text" class="form-control form-control-sm" id="nama" name="nama"
                            value="{{ $santris->nama }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="jenkel" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-12">
                        <input class="form-control form-control-sm" id="jenkel" name="jenkel"
                            value="{{ $santris->jenkel }}" readonly>
                    </div>
                </div>
                <div class="col">
                    <label for="tpt_lahir" class="col-sm-5 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control form-control-sm" id="tpt_lahir" name="tpt_lahir"
                            value="{{ $santris->tpt_lahir }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tgl_lahir" class="col-sm-5 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control form-control-sm" id="tgl_lahir" name="tgl_lahir"
                            value="{{ $santris->tgl_lahir }}" readonly>
                    </div>
                </div>
                <div class="col">
                    <label for="nm_ortu" class="col-sm-5 col-form-label">Nama Orang Tua</label>
                    <input type="text" class="form-control form-control-sm" id="nm_ortu" name="nm_ortu"
                        value="{{ $santris->nm_ortu }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tahun_masuk" class="col-sm-5 col-form-label">Tahun Masuk</label>
                    <input type="number" class="form-control form-control-sm" id="tahun_masuk" name="tahun_masuk"
                        value="{{ $santris->tahun_masuk }}" readonly>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="created_at" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Created At"
                        value="{{ $santris->created_at }}" readonly>
                </div>
                <div class="col">
                    <label for="" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
                        value="{{ $santris->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection

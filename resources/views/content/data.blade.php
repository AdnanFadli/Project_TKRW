@extends('layouts.tampil')
@section('content')
    <h3>Data Santri</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('content/add') }}'">
                <i class="fas fa-plus-circle"></i>Tambah Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Orang Tua</th>
                        <th>#</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.tampil')
@section('content')
    <h3>Data Kas Keluar</h3>
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah data</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('kasKeluar.store') }}">
                    @csrf
                    <div class="col-12">
                        <label for="nama_pengeluaran" class="form-label">Nama Pengeluaran</label>
                        <input type="text" class="form-control" id="nama_pengeluaran" name="nama_pengeluaran">
                    </div>
                    <div class="col-12">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <small class="text-muted"> (Rp.)</small>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                        @error('jumlah')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                        <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
                    </div>
                    <div class="col-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5></h5>
                <h5></h5>
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-container">
                        <table class="table table-borderless datatable dataTable-table" id="example">
                            <thead>
                                <tr>
                                    <th scope="col" data-sortable="" style="width: 10.8939%;">No</th>
                                    <th scope="col" data-sortable="" style="width: 24.0223%;">Nama
                                        Pengeluaran</th>
                                    <th scope="col" data-sortable="" style="width: 15.2235%;">Jumlah</th>
                                    <th scope="col" data-sortable="" style="width: 18.0223%;">Tanggal
                                        Keluar</th>
                                    <th scope="col" data-sortable="" style="width: 20.0838%;">Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($kasKeluar->count() > 0)
                                    @foreach ($kasKeluar as $keluar)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $keluar->nama_pengeluaran }}</td>
                                            <td>Rp. {{ $keluar->jumlah }}</td>
                                            <td>{{ $keluar->tanggal_keluar }}</td>
                                            <td>{{ $keluar->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="9">Data Not Found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


        </div>
    </div>
@endsection

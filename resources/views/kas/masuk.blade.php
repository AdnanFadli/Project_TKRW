@extends('layouts.tampil')
@section('content')
    <h3>Data Kas Masuk</h3>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah data</h5>

                <!-- Vertical Form -->
                <form class="row g-3" method="POST" action="{{ route('kasMasuk.store') }}">
                    @csrf
                    <div class="col-11">
                        <label for="nama_pemasukan" class="form-label">Nama Pemasukan</label>
                        <input type="text" class="form-control" id="nama_pemasukan" name="nama_pemasukan">
                    </div>
                    <div class="col-11">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <small class="text-muted"> (Rp.)</small>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                        @error('jumlah')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-11">
                        <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
                    </div>
                    <div class="col-11">
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
                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                    <div class="dataTable-container">
                        <table class="table table-borderless datatable dataTable-table" id="example">
                            <thead>
                                <tr>
                                    <th scope="col" data-sortable="" style="width: 10.8939%;">No</th>
                                    <th scope="col" data-sortable="" style="width: 24.0223%;">Nama
                                        Pemasukan</th>
                                    <th scope="col" data-sortable="" style="width: 15.2235%;">Jumlah</th>
                                    <th scope="col" data-sortable="" style="width: 18.0223%;">Tanggal
                                        Masuk</th>
                                    <th scope="col" data-sortable="" style="width: 20.0838%;">Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($kasMasuk->count() > 0)
                                    @foreach ($kasMasuk as $masuk)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $masuk->nama_pemasukan }}</td>
                                            <td>Rp. {{ $masuk->jumlah }}</td>
                                            <td>{{ $masuk->tanggal_masuk }}</td>
                                            <td>{{ $masuk->keterangan }}</td>
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

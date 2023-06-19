@extends('layouts.tampil')
@section('content')
    <h3>Pembayaran</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('spp.create') }}'">
                <i class="bi bi-person-plus-fill"></i> Tambah Data Tagihan
            </button>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session::get('success') }}
                </div>
            @endif
            <h5></h5>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-container">
                    <table class="table table-borderless datatable dataTable-table" id="example">
                        <thead>
                            <tr>
                                <th scope="col" data-sortable="" style="width: 3.8939%;">No</th>
                                <th scope="col" data-sortable="" style="width: 7.2235%;">NIS</th>
                                <th scope="col" data-sortable="" style="width: 16.0223%;">Nama</th>
                                <th scope="col" data-sortable="" style="width: 16.0838%;">Jenis Kelamin
                                </th>
                                <th scope="col" data-sortable="" style="width: 15.0838%;">Tempat Lahir</th>
                                <th scope="col" data-sortable="" style="width: 15.0838%;">Tahun Masuk</th>
                                <th scope="col" data-sortable="" style="width: 15.0838%;">Jumlah Tagihan</th>
                                <th scope="col" data-sortable="" style="width: 15.0838%;">Tujuan Transfer</th>
                                <th scope="col" data-sortable="" style="width: 15.0838%;">Bukti Pembayaran</th>
                                <th scope="col" data-sortable="" style="width: 25.0838%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if ($tagihan->count() > 0)
                                @foreach ($tagihan as $spp => $santri)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $santri->santri->nis }}</td>
                                        <td class="align-middle">{{ $santri->santris->nama }}</td>
                                        <td class="align-middle">{{ $santri->santris->jenkel }}</td>
                                        <td class="align-middle">{{ $santri->santris->tpt_lahir }}</td>
                                        <td class="align-middle">{{ $santri->santris->tahun_masuk }}</td>
                                        <td class="align-middle">{{ $santri->santris->jumlah_tagihan }}</td>
                                        <td class="align-middle">{{ $santri->bukti_pembayaran }}</td>
                                        <td class="align-middle">{{ $santri->bank_tujuan }}</td>
                                        <td class="align-middle"></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="9">Data Not Found</td>
                                </tr>
                            @endif --}}

                            @forelse ($tagihan as $santri)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $santri->nis }}</td>
                                    <td class="align-middle">{{ $santri->nama }}</td>
                                    <td class="align-middle">{{ $santri->jenkel }}</td>
                                    <td class="align-middle">{{ $santri->tpt_lahir }}</td>
                                    <td class="align-middle">{{ $santri->tahun_masuk }}</td>
                                    <td class="align-middle">{{ $santri->jumlah_tagihan }}</td>
                                    {{-- <td class="align-middle">{{ $santri->bukti_pembayaran }}</td> --}}
                                    <td class="align-middle">{{ $santri->bank_tujuan }}</td>
                                    <td><img src="{{ asset('images/' . $santri->bukti_pembayaran) }}" width="80px"
                                            alt="">
                                    </td>
                                    <td class="align-middle"></td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="9">Data Not Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

        </div>


    </div>
@endsection

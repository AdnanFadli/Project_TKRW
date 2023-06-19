@extends('layouts.tampil')
@section('content')
    <h3>Data Santri</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ route('santri.create') }}'">
                <i class="bi bi-person-plus-fill"></i> Tambah Data Santri
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
                                <th scope="col" data-sortable="" style="width: 10.0223%;">Foto</th>
                                <th scope="col" data-sortable="" style="width: 7.2235%;">NIS</th>
                                <th scope="col" data-sortable="" style="width: 16.0223%;">Nama</th>
                                <th scope="col" data-sortable="" style="width: 14.0838%;">Jenis Kelamin
                                </th>
                                <th scope="col" data-sortable="" style="width: 12.0838%;">Alamat</th>
                                <th scope="col" data-sortable="" style="width: 12.0838%;">Tahun Masuk</th>
                                <th scope="col" data-sortable="" style="width: 10.0838%;">Status</th>
                                <th scope="col" data-sortable="" style="width: 25.0838%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($santris->count() > 0)
                                @foreach ($santris as $santri)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('images/' . $santri->foto) }}" width="80px" alt="">
                                        </td>
                                        <td class="align-middle">{{ $santri->nis }}</td>
                                        <td class="align-middle">{{ $santri->nama }}</td>
                                        <td class="align-middle">{{ $santri->jenkel }}</td>
                                        <td class="align-middle">{{ $santri->tpt_lahir }}</td>
                                        <td class="align-middle">{{ $santri->tahun_masuk }}</td>
                                        <td class="align-middle">
                                            @if ($santri->status == 'Belum Lunas')
                                                <span class="badge bg-danger">{{ $santri->status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $santri->status }}</span>
                                            @endif
                                        </td>
                                        <td class="align-middle">
                                            <div>
                                                <a href="{{ route('santri.show', $santri->id) }}" type="button"
                                                    class="btn btn-secondary"><i class="bi bi-eye-fill"></i></a>
                                                <a href="{{ route('santri.edit', $santri->id) }}" type="button"
                                                    class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                                                <h6></h6>
                                                <form action="{{ route('santri.destroy', $santri->id) }}" method="POST"
                                                    type="button" class="" onsubmit="return confirm('Delete')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" m-0><i
                                                            class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </div>
                                        </td>
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
@endsection

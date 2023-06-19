@extends('layouts.tampil')

@section('content')
    <h3>Form Pembayaran SPP</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ route('spp.index') }}'">
                Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('spp.store') }}">
                @csrf
                <div class="row mb-3">
                    <label for="user_id" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                        <select class="form-select form-selet-sm" id="user_id" name="user_id">
                            <option value="" selected>-Pilih-</option>
                            @foreach ($sppSantri as $santri)
                                <option value="{{ $santri->id }}">{{ $santri->nis }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('user_id')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="bank_tujuan" class="col-sm-2 col-form-label">Bank Tujuan</label>
                    <div class="col-sm-4">
                        <select class="form-select form-selet-sm" id="bank_tujuan" name="bank_tujuan">
                            <option value="" selected>-Pilih-</option>
                            <option value="1">(BRI) 059434596056694 An. Adnan</option>
                            <option value="2">(BNI) 23456433634 An. Adnan</option>
                            <option value="3">(BCA) 3453464623235 An. Adnan</option>
                            <option value="4">(Mandiri) 2535346734 An. Adnan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="bukti_pembayaran" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control form-control-sm" id="bukti_pembayaran"
                            name="bukti_pembayaran">
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

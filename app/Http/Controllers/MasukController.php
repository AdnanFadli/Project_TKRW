<?php

namespace App\Http\Controllers;

use App\Models\KasMasuk;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasMasuk = KasMasuk::orderBy('created_at', 'DESC')->get();

        return view('kas.masuk', compact('kasMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'nama_pemasukan' => 'required',
        'jumlah'=>'required|numeric',
        'tanggal_masuk' => 'required',
        'keterangan'=>'required',
        ]);
        KasMasuk::create($request->all());

        return redirect()->route('kasMasuk.index')->with('success',  'Kas masuk berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function masukForm()
    {
        return view('cetak.cetakMasukForm');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function cetakMasuk($tglawal, $tglakhir)
    {
        $cetakPertanggal=KasMasuk::orderBy('created_at', 'DESC')->whereBetween('tanggal_masuk',[$tglawal, $tglakhir])->latest()->get();

        return view('cetak.cetakMasuk',compact('cetakPertanggal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
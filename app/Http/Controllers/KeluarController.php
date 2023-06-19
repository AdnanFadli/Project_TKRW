<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use Illuminate\Http\Request;

class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kasKeluar = KasKeluar::orderBy('created_at', 'DESC')->get();

        return view('kas.keluar', compact('kasKeluar'));
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
            'nama_pengeluaran' => 'required',
            'jumlah'=>'required|numeric',
            'tanggal_keluar' => 'required',
            'keterangan'=>'required',
            ]);
        KasKeluar::create($request->all());

        return redirect()->route('kasKeluar.index')->with('success',  'Kas keluar berhasil ditambahkan');
    }

    public function keluarForm()
    {
        return view('cetak.cetakKeluarForm');
    }

    public function cetakKeluar($tglawal, $tglakhir)
    {
        $cetakPertanggal=KasKeluar::orderBy('created_at', 'DESC')->whereBetween('tanggal_keluar',[$tglawal, $tglakhir])->get();

        return view('cetak.cetakKeluar',compact('cetakPertanggal'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
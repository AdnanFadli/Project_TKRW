<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $santris = Santri::orderBy('created_at', 'DESC')->get();

        return view('dataSantri.data', compact('santris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataSantri.formadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'unique:santris',
            ]);
        $santris = Santri::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $santris->foto=$request->file('foto')->getClientOriginalName();
            $santris->save();

        }
        return redirect()->route('santri.index')->with('success',  'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $santris = Santri::findOrFail($id);

        return view('dataSantri.aksi.show', compact('santris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $santris=Santri::findOrFail($id);

        return view('dataSantri.aksi.edit', compact('santris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $santris=Santri::findOrFail($id);

        $santris->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $santris->foto=$request->file('foto')->getClientOriginalName();
            $santris->save();
        }
        return redirect()->route('santri.index')->with('success',  'Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $santris = Santri::findOrFail($id);

        $santris->delete();

        return redirect()->route('santri.index')->with('success','Data berhasil di hapus');
    }
}
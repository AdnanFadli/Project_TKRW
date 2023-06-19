<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index(){
        $tagihan = Spp::join('santris', 'spps.user_id', '=', 'santris.id')->get();
        // $tagihan = Spp::all();

        // return $tagihan;

        return view('spp.spp', compact('tagihan'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id' => 'unique:spps',
            ]);
        $spps = Spp::create($request->all());
        if($request->hasFile('bukti_pembayaran')){
            $request->file('bukti_pembayaran')->move('images/', $request->file('bukti_pembayaran')->getClientOriginalName());
            $spps->bukti_pembayaran=$request->file('bukti_pembayaran')->getClientOriginalName();
            $spps->save();
        }
        return redirect()->route('spp.index')->with('success',  'Pembayaran berhasil ditambahkan');
    }

    public function create(){
        $sppSantri = Santri::all();

        return view('dataSantri.formAddSpp' ,compact('sppSantri'));
    }
}
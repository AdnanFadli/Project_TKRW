<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use App\Models\KasMasuk;
use App\Models\Santri;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $santriCount = Santri::count();
        $pemasukanCount = KasMasuk::sum('jumlah');
        $pengeluaranCount = KasKeluar::sum('jumlah');
        return view("layouts.main", compact('santriCount','pemasukanCount','pengeluaranCount'));
    }
}

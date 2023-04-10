<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;
use App\Models\Taruna;
use App\Models\Tingkat2;
use App\Models\Tingkat3;
use App\Models\Prestasi;
use App\Models\Prestasi2;
use App\Models\Prestasi3;
use DB;

class BerandaController extends Controller
{
    public function beranda()
    {
        //Catatan Pelanggaran 
        // $tingkat1 = Taruna::latest()->paginate(1);
        // $tingkat2 = Tingkat2::latest()->paginate(1);
        // $tingkat3 = Tingkat3::latest()->paginate(1);
        $tingkat1 = Taruna::count();
        $tingkat2 = Tingkat2::count();
        $tingkat3 = Tingkat3::count();
       
        $totalmelanggar = $tingkat1 + $tingkat2 + $tingkat3;
       

        //Catatan Prestasi
        // $prestasi1 = Prestasi::latest()->paginate(1);
        // $prestasi2 = Prestasi2::latest()->paginate(1);
        // $prestasi3 = Prestasi3::latest()->paginate(1);

        $prestasi1 = Prestasi::count();
        $prestasi2 = Prestasi2::count();
        $prestasi3 = Prestasi3::count();
        $totalprestasi = $prestasi1 + $prestasi2 + $prestasi3;

        return view('Beranda.beranda',compact('tingkat1','tingkat2','tingkat3','prestasi1','prestasi2','prestasi3','totalmelanggar','totalprestasi'));
    }

    public function eror()
    {
        return view('Beranda.eror');
    }

    // public function grafik()
    // {
    //     $grafik = Taruna::select(DB::raw("CAST(SUM(id) as int) as grafik"))
    //     ->GroupBy(DB::raw("Month(created_at)"))
    //     ->pluck('grafik');

    //     $bulan = Taruna::select(DB::raw("MONTHNAME(created_at) as bulan"))
    //     ->GroupBy(DB::raw("MONTHNAME(created_at)"))
    //     ->pluck('bulan');

    //     return view('Beranda.grafik',compact('grafik','bulan'));
    // }
}

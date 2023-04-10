<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakPertanggalController extends Controller
{
    public function cetakPertanggal()
    {
        return view('cetakPertanggalSimpel.cetak-pertanggal-simpel');
    }
    public function cetakPertanggalL()
    {
        return view('cetakPertanggalSimpel.cetak-pertanggal-prestasi');
    }


}

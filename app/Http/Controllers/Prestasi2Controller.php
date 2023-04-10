<?php

namespace App\Http\Controllers;
use App\Models\Prestasi2;
use App\Models\Tingkat;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Prestasi2Export;
use App\Http\Controllers\Controller;

class Prestasi2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $prestasi = Prestasi2::where('nit','=',$request->search)->paginate(5);
        }else{
            $prestasi = Prestasi2::latest()->paginate(5);
        }
        // $prestasi = Prestasi2::all();
        return view('prestasi-tingkat2.data-prestasi',compact('prestasi'));
    }

    public function cetakPrestasi()
    {
        $dtcetakprestasi = Prestasi2::all();
        return view('prestasi-tingkat2.cetak-prestasi',compact('dtcetakprestasi'));
    }

    public function prestasiexport(){
        return Excel::download(new Prestasi2Export,'siswa Berprestasi.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Tingkat::all();
        return view('prestasi-tingkat2.create-prestasi',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFILE = time().rand(100,999).".". $nm->getClientOriginalExtension();

        $dtUpload = new Prestasi2;
        $dtUpload->nit = $request->nit;
        $dtUpload->nama = $request->nama;
        $dtUpload->tingkat = $request->tingkat;
        $dtUpload->jurusan = $request->jurusan;
        $dtUpload->lomba = $request->lomba;
        $dtUpload->juara = $request->juara;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $nm->move(public_path().'/imgPrestasi2', $namaFILE);
        $dtUpload->save();
        return redirect('data-prestasi2')->with('success', 'Data Berhasil Disimpan');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $kat = Tingkat::all();
        $pres = Prestasi2::findorfail($id);
        return view('prestasi-tingkat2.edit-prestasi',compact('pres','kat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ubah = Prestasi2::findorfail($id);
        $awal = $ubah->gambar;

        $pres = [
            'nit' => $request['nit'],
            'nama' => $request['nama'],
            'tingkat' => $request['tingkat'],
            'jurusan' => $request['jurusan'],
            'lomba' => $request['lomba'],
            'juara' => $request['juara'],
            'tgl' => $request['tgl'],
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/imgPrestasi2', $awal);
        $ubah->update($pres);
        return redirect('data-prestasi2')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Prestasi2::findorfail($id);

        $file = public_path('/imgPrestasi2/').$hapus->gambar;
        //Cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file di folder img
            @unlink($file);
        }
        //Hapus data di DB
        $hapus->delete();
        // $pres = Prestasi::findorfail($id);
        // $pres->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function cetakForm(){
        return view('cetakPrestasi.cetak-pertanggal-form2');
    }

    public function cetakPrestasiPertanggal($tglawal, $tglakhir){
        // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir:".$tglakhir]);
        $cetakPertanggal = Prestasi2::whereBetween('tgl',[$tglawal,$tglakhir])->get();
        return view('cetakPrestasi.cetak-data-pertanggal2',compact('cetakPertanggal'));
    }
}

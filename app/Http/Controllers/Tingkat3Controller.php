<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkat3;
use App\Models\Tingkat;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Tingkat3Export;
use App\Http\Controllers\Controller;

class Tingkat3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $tingkat3 = Tingkat3::where('nit','=',$request->search)->paginate(5);
        }else{
            $tingkat3 = Tingkat3::latest()->paginate(5);
        }
        // $tingkat3 = Tingkat3::all();
        return view('tingkat3.data-melanggar',compact('tingkat3'));
    }

    public function tingkat3export(){
        return Excel::download(new Tingkat3Export,'Taruna Melanggar.xlsx');
    }

    public function cetakTaruna()
    {
        $dtcetaktaruna = Tingkat3::get();
        return view('tingkat3.cetak-taruna',compact('dtcetaktaruna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kat = Tingkat::all();
        return view('tingkat3.create-taruna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // {
    //     Tingkat3::create([
    //         'nit' => $request->nit,
    //         'nama' => $request->nama,
    //         'tingkat_id'=> $request->tingkat_id,
    //         'jurusan' => $request->jurusan,
    //         'alasan' =>$request->alasan,
    //         'tgl' => $request->tgl,
    //     ]);
        {
        $ee = $request->gambar;
        $namaFILE = time().rand(100,999).".". $ee->getClientOriginalExtension();

        $dtUpload = new Tingkat3;
        $dtUpload->nit = $request->nit;
        $dtUpload->nama = $request->nama;
        $dtUpload->tingkat = $request->tingkat;
        $dtUpload->jurusan = $request->jurusan;
        $dtUpload->alasan = $request->alasan;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $ee->move(public_path().'/imgTingkat3', $namaFILE);
        $dtUpload->save();
        return redirect('data-melanggar3')->with('success', 'Data Berhasil Dibuat!');
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
        $tar = Tingkat3::findorfail($id);
        return view('tingkat3.edit-taruna',compact('tar','kat'));
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
        // $tar = Tingkat3::findorfail($id);
        // $tar->update($request->all());

        
        $ubah = Tingkat3::findorfail($id);
        $awal = $ubah->gambar;

        $tar = [
            'nit' => $request['nit'],
            'nama' => $request['nama'],
            'tingkat' => $request['tingkat'],
            'jurusan' => $request['jurusan'],
            'alasan' => $request['alasan'],
            'tgl' => $request['tgl'],
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/imgTingkat3', $awal);
        $ubah->update($tar);
        return redirect('data-melanggar3')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $tar = Tingkat3::findorfail($id);
        // $tar->delete();

        $hapus = Tingkat3::findorfail($id);

        $file = public_path('/imgTingkat3/').$hapus->gambar;
        //Cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file di folder img
            @unlink($file);
        }
        //Hapus data di DB
        $hapus->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function cetakForm(){
        return view('cetakPertanggal.cetak-pertanggal-form3');
    }

    public function cetakTarunaPertanggalll($tglawal, $tglakhir){
        // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir:".$tglakhir]);
        // $cetakPertanggall = Tingkat2::with('tingkat')->whereBetween('tgl',[$tglawal,$tglakhir])->get();
        $cetakPertanggalll = Tingkat3::whereBetween('tgl',[$tglawal,$tglakhir])->get();
        return view('cetakPertanggal.cetak-taruna-pertanggal3',compact('cetakPertanggalll'));
    }
}

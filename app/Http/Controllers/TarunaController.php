<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taruna;
use App\Models\Tingkat;
use App\Models\Tingkat2;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TarunaExport;
use App\Http\Controllers\Controller;

class TarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $taruna = Taruna::where('nit','=',$request->search)->paginate(5);
        }else{
            $taruna = Taruna::latest()->paginate(5);
        }
        
        // return view('Halaman.data-pegawai',compact('pegawai'));
        // $taruna = Taruna::with('tingkat')->paginate(5);
        return view('tingkat1.data-melanggar',compact('taruna'));
    }

    public function tarunaexport(){
        return Excel::download(new TarunaExport,'Taruna Melanggar.xlsx');
    }

    public function cetakTaruna()
    {
        $dtcetaktaruna = Taruna::get();
        return view('tingkat1.cetak-taruna',compact('dtcetaktaruna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Tingkat::all();
        return view('tingkat1.create-taruna',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Taruna::create([
        //     'nit' => $request->nit,
        //     'nama' => $request->nama,
        //     'tingkat_id'=> $request->tingkat_id,
        //     'jurusan' => $request->jurusan,
        //     'alasan' =>$request->alasan,
        //     'tgl' => $request->tgl,
        // ]);
        $nm = $request->gambar;
        $namaFILE = time().rand(100,999).".". $nm->getClientOriginalExtension();

        $dtUpload = new Taruna;
        $dtUpload->nit = $request->nit;
        $dtUpload->nama = $request->nama;
        $dtUpload->tingkat = $request->tingkat;
        $dtUpload->jurusan = $request->jurusan;
        $dtUpload->alasan = $request->alasan;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $nm->move(public_path().'/imgTingkat1', $namaFILE);
        $dtUpload->save();

         return redirect('data-melanggar')->with('success', 'Data Berhasil Dibuat!');
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
        // $kat = Tingkat::all();
        $tar = Taruna::findorfail($id);
        return view('tingkat1.edit-taruna',compact('tar'));
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
        $ubah = Taruna::findorfail($id);
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
        $request->gambar->move(public_path().'/imgTingkat1', $awal);
        $ubah->update($tar);
        // $tar = Taruna::findorfail($id);
        // $tar->update($request->all());
        return redirect('data-melanggar')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Taruna::findorfail($id);

        $file = public_path('/imgTingkat1/').$hapus->gambar;
        //Cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file di folder img
            @unlink($file);
        }
        //Hapus data di DB
        $hapus->delete();
        // return back();
        // $tar = Taruna::findorfail($id);
        // $tar->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }

    public function cetakForm(){
        return view('cetakPertanggal.cetak-pertanggal-form');
    }

    public function cetakTarunaPertanggal($tglawal, $tglakhir){
        // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir:".$tglakhir]);
        // $cetakPertanggall = Tingkat2::with('tingkat')->whereBetween('tgl',[$tglawal,$tglakhir])->get();
        $cetakPertanggal = Taruna::whereBetween('tgl',[$tglawal,$tglakhir])->get();
        return view('cetakPertanggal.cetak-taruna-pertanggal',compact('cetakPertanggal'));
    }


}

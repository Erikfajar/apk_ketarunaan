<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tingkat2;
use App\Models\Tingkat;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Tingkat2Export;
use App\Http\Controllers\Controller;
class Tingkat2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        if($request->has('search')){
            $tingkat2 = Tingkat2::where('nit','=',$request->search)->paginate(5);
        }else{
            $tingkat2 = Tingkat2::latest()->paginate(5);
        }
        // $tingkat2 = Tingkat2::all();
        return view('tingkat2.data-melanggar',compact('tingkat2'));
    }

    public function tingkat2export(){
        return Excel::download(new Tingkat2Export,'Taruna Melanggar.xlsx');
    }

    public function cetakTaruna()
    {
        $dtcetaktaruna = Tingkat2::get();
        return view('tingkat2.cetak-taruna',compact('dtcetaktaruna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Tingkat::all();
        return view('tingkat2.create-taruna',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Tingkat2::create([
        //     'nit' => $request->nit,
        //     'nama' => $request->nama,
        //     'tingkat_id'=> $request->tingkat_id,
        //     'jurusan' => $request->jurusan,
        //     'alasan' =>$request->alasan,
        //     'tgl' => $request->tgl,
        // ]);
        $nn = $request->gambar;
        $namaFILE = time().rand(100,999).".". $nn->getClientOriginalExtension();

        $dtUpload = new Tingkat2;
        $dtUpload->nit = $request->nit;
        $dtUpload->nama = $request->nama;
        $dtUpload->tingkat = $request->tingkat;
        $dtUpload->jurusan = $request->jurusan;
        $dtUpload->alasan = $request->alasan;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $nn->move(public_path().'/imgTingkat2', $namaFILE);
        $dtUpload->save();
        return redirect('data-melanggar2')->with('success', 'Data Berhasil Dibuat!');
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
        $tar2 = Tingkat2::findorfail($id);
        return view('tingkat2.edit-taruna',compact('tar2'));
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
        $ubah = Tingkat2::findorfail($id);
        $awal = $ubah->gambar;

        $tar2 = [
            'nit' => $request['nit'],
            'nama' => $request['nama'],
            'tingkat' => $request['tingkat'],
            'jurusan' => $request['jurusan'],
            'alasan' => $request['alasan'],
            'tgl' => $request['tgl'],
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/imgTingkat2', $awal);
        $ubah->update($tar2);
        return redirect('data-melanggar2')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $tar = Tingkat2::findorfail($id);
        // $tar->delete();

        $hapus = Tingkat2::findorfail($id);

        $file = public_path('/imgTingkat2/').$hapus->gambar;
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
        return view('cetakPertanggal.cetak-pertanggal-form2');
    }

    public function cetakTarunaPertanggall($tglawal, $tglakhir){
        // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir:".$tglakhir]);
        // $cetakPertanggall = Tingkat2::with('tingkat')->whereBetween('tgl',[$tglawal,$tglakhir])->get();
        // $cetakPertanggall = Tingkat2::all()->whereBetween('tgl',[$tglawal,$tglakhir])->get();
        $cetakPertanggall = Tingkat2::whereBetween('tgl',[$tglawal,$tglakhir])->get();
        return view('cetakPertanggal.cetak-taruna-pertanggal2',compact('cetakPertanggall'));

    }

}

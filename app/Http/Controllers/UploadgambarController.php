<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\Prestasii;

class UploadgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gar = Pelanggaran::latest()->get();
        return view('Upload.gambar-pelanggar',compact('gar'));
    }

    public function indexx()
    {
        $sii = Prestasii::latest()->get();
        return view('Upload.gambar-prestasi',compact('sii'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Upload.create-gambar-pelanggar');
    }

    public function createe()
    {
        return view('Upload.create-gambar-prestasi');
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

        $dtUpload = new Pelanggaran;
        $dtUpload->nama = $request->nama;
        $dtUpload->detail = $request->detail;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $nm->move(public_path().'/imgPelanggar', $namaFILE);
        $dtUpload->save();

        return redirect('gambar-pelanggaran');
    }
    public function storee(Request $request)
    {
        $mm = $request->gambar;
        $namaFILE = time().rand(100,999).".". $mm->getClientOriginalExtension();

        $dtUpload = new Prestasii;
        $dtUpload->nama = $request->nama;
        $dtUpload->detail = $request->detail;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $mm->move(public_path().'/imgPrestasi', $namaFILE);
        $dtUpload->save();

        return redirect('gambar-prestasi');
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
        $dtpelanggar = Pelanggaran::findorfail($id);
        return view('Upload.edit-gambar-pelanggaran',compact('dtpelanggar'));
    }
    public function editt($id)
    {
        $dtprestasi = Prestasii::findorfail($id);
        return view('Upload.edit-gambar-prestasi',compact('dtprestasi'));
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
        $ubah = Pelanggaran::findorfail($id);
        $awal = $ubah->gambar;

        $dtpelanggar = [
            'nama' => $request['nama'],
            'detail' => $request['detail'],
            'tgl' => $request['tgl'],
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/imgPelanggar', $awal);
        $ubah->update($dtpelanggar);
        return redirect('gambar-pelanggaran');
    }

    public function updatee(Request $request, $id)
    {
        $ubah = Prestasii::findorfail($id);
        $awal = $ubah->gambar;

        $dtprestasi = [
            'nama' => $request['nama'],
            'detail' => $request['detail'],
            'tgl' => $request['tgl'],
            'gambar' => $awal,
        ];
        $request->gambar->move(public_path().'/imgPrestasi', $awal);
        $ubah->update($dtprestasi);
        return redirect('gambar-prestasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Pelanggaran::findorfail($id);

        $file = public_path('/imgPelanggar/').$hapus->gambar;
        //Cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file di folder img
            @unlink($file);
        }
        //Hapus data di DB
        $hapus->delete();
        return back();
    }
    public function destroyy($id)
    {
        $hapuss = Prestasii::findorfail($id);

        $filee = public_path('/imgPrestasi/').$hapuss->gambar;
        //Cek jika ada gambar
        if(file_exists($filee)){
            //maka hapus file di folder img
            @unlink($filee);
        }
        //Hapus data di DB
        $hapuss->delete();
        return back();
    }
}

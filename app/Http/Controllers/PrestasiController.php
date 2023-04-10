<?php

namespace App\Http\Controllers;
use App\Models\Prestasi;
use App\Models\Tingkat;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PrestasiExport;
use App\Http\Controllers\Controller;


// Tingkat X
class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $prestasi = Prestasi::where('nit','=',$request->search)->paginate(5);
        }else{
            $prestasi = Prestasi::latest()->paginate(5);
        }
        // $prestasi = Prestasi::all();
        return view('prestasi-tingkat1.data-prestasi',compact('prestasi'));
    }

    public function prestasiexport(){
        return Excel::download(new PrestasiExport,'siswa Berprestasi.xlsx');
    }

    public function cetakPrestasi()
    {
        $dtcetakprestasi = Prestasi::all();
        return view('prestasi-tingkat1.cetak-prestasi',compact('dtcetakprestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kat = Tingkat::all();
        return view('prestasi-tingkat1.create-prestasi',compact('kat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // {
    //     Prestasi::create([
    //         'nit' => $request->nit,
    //         'nama' => $request->nama,
    //         'jurusan' => $request->jurusan,
    //         'lomba' => $request->lomba,
    //         'juara' => $request->juara,
    //         'tgl' => $request->tgl,
    //     ]);
    {
    $nm = $request->gambar;
        $namaFILE = time().rand(100,999).".". $nm->getClientOriginalExtension();

        $dtUpload = new Prestasi;
        $dtUpload->nit = $request->nit;
        $dtUpload->nama = $request->nama;
        $dtUpload->tingkat = $request->tingkat;
        $dtUpload->jurusan = $request->jurusan;
        $dtUpload->lomba = $request->lomba;
        $dtUpload->juara = $request->juara;
        $dtUpload->tgl = $request->tgl;
        $dtUpload->gambar = $namaFILE;

        $nm->move(public_path().'/imgPrestasi1', $namaFILE);
        $dtUpload->save();
        return redirect('data-prestasi')->with('success', 'Data Berhasil Disimpan');;
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
        $pres = Prestasi::findorfail($id);
        return view('prestasi-tingkat1.edit-prestasi',compact('pres','kat'));
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

        $ubah = Prestasi::findorfail($id);
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
        $request->gambar->move(public_path().'/imgPrestasi1', $awal);
        $ubah->update($pres);
        // $pres = Prestasi::findorfail($id);
        // $pres->update($request->all());
        return redirect('data-prestasi')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $hapus = Prestasi::findorfail($id);

        $file = public_path('/imgPrestasi1/').$hapus->gambar;
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
        return view('cetakPrestasi.cetak-pertanggal-form');
    }

    public function cetakPrestasiPertanggal($tglawal, $tglakhir){
        // dd(["Tanggal Awal :".$tglawal, "Tanggal Akhir:".$tglakhir]);
        $cetakPertanggal = Prestasi::whereBetween('tgl',[$tglawal,$tglakhir])->get();
        return view('cetakPrestasi.cetal-data-pertanggal',compact('cetakPertanggal'));
    }

}

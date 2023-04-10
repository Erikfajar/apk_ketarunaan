<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catatan;
class CatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catatan = Catatan::latest()->paginate(5);
        return view('catatanKegiatan.catatanKegiatan',compact('catatan'));
    }

    
    public function cetakCatatan()
    {
        $dtcetakcatatan = Catatan::all();
        return view('catatanKegiatan.cetak-catatan',compact('dtcetakcatatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catatanKegiatan.create-catatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Catatan::create([
            'tgl' => $request->tgl,
            'jam' => $request->jam,
            'kegiatan' => $request->kegiatan,
            
        ]);
        return redirect('catatan')->with('success', 'Data Berhasil Dibuat');
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
        $cat = Catatan::findorfail($id);
        return view('catatanKegiatan.edit-catatan',compact('cat'));
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
        $cat = Catatan::findorfail($id);
        $cat->update($request->all());
        return redirect('catatan')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Catatan::findorfail($id);
        $cat->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}

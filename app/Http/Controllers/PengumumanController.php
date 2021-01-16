<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        
        return view('pengumuman.index', ['pengumuman' => $pengumuman]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'skimpkm' => 'required',
            'judulpkm' => 'required',
        ]);
    
    Pengumuman::create($request->all());
    return redirect('/pengumuman')->with('status', 'Data Tim yang Lolos Pra Evaluasi Internal ITK Berhasil Ditambahkan!');
        
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
    public function edit(Pengumuman $pengumuman)
    {
        return view('pengumuman.edit', compact('pengumuman'));
        
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'nama' => 'required',
            'skimpkm' => 'required',
            'judulpkm' => 'required',
        ]);
        
        
        Pengumuman::where('id', $pengumuman->id)
            ->update([
                'nama' => $request->nama,
                'skimpkm' => $request->skimpkm,
                'judulpkm' => $request->judulpkm
            ]);
        return redirect('/pengumuman')->with('status', 'Data Tim yang Lolos Pra Evaluasi Internal ITK Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);
        return redirect('/pengumuman')->with('status', 'Data Tim yang Lolos Pra Evaluasi Internal ITK Dihapus!');
    }
}

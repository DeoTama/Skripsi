<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       /** $daftar = DB::table('pendaftarans')->get(); */
        
        $daftar = Pendaftaran::all();
        
        return view('pendaftaran.index', ['pendaftaran' => $daftar]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $pendaftaran = new Pendaftaran;
      //  $pendaftaran->nama = $request->nama;
       // $pendaftaran->nim = $request->nim;
       // $pendaftaran->email = $request->email;
       // $pendaftaran->telpon = $request->telpon;    
       // $pendaftaran->jurusan = $request->jurusan;    
       // $pendaftaran->prodi = $request->prodi;    
       // $pendaftaran->angkatan = $request->angkatan;   
       // $pendaftaran->skimpkm = $request->skimpkm;
       // $pendaftaran->judulpkm = $request->judulpkm;
        
        //$pendaftaran->save();
        
        //Pendaftaran::create([
          //  'nama' => $request->nama,
         //   'nim' => $request->nim,
         //   'email' => $request->email,
         //   'telpon' => $request->telpon,
        //    'jurusan' => $request->jurusan,
        //    'prodi' => $request->prodi,
        //    'angkatan' => $request->angkatan,
        //    'skimpkm' => $request->skimpkm,
        //    'judulpkm' => $request->judulpkm
      //  ]);    
        
            $request->validate([
                'nama' => 'required',
                'nim' => 'required|size:8',
                'email' => 'required',
                'telpon' => 'required',
                'jurusan' => 'required',
                'prodi' => 'required',
                'angkatan' => 'required',
                'anggota' => 'required',
                'skimpkm' => 'required',
                'judulpkm' => 'required',
            ]);
        
        Pendaftaran::create($request->all());
        return redirect('/pendaftaran')->with('status', 'Data Pendaftar PKM Berhasil Ditambahkan!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.show', compact('pendaftaran'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'email' => 'required',
            'telpon' => 'required',
            'jurusan' => 'required',
            'prodi' => 'required',
            'angkatan' => 'required',
            'anggota' => 'required',
            'skimpkm' => 'required',
            'judulpkm' => 'required',
        ]);
        
        
        Pendaftaran::where('id', $pendaftaran->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'telpon' => $request->telpon,
                'jurusan' => $request->jurusan,
                'prodi' => $request->prodi,
                'angkatan' => $request->angkatan,
                'anggota' => $request->anggota,
                'skimpkm' => $request->skimpkm,
                'judulpkm' => $request->judulpkm
            ]);
        return redirect('/pendaftaran')->with('status', 'Data Pendaftar PKM Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        Pendaftaran::destroy($pendaftaran->id);
        return redirect('/pendaftaran')->with('status', 'Data Pendaftar PKM Berhasil Dihapus!');
    }
}

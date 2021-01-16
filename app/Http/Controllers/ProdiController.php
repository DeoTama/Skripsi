<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       /** $daftar = DB::table('pendaftarans')->get(); */
        
        $prodi = Prodi::all();
        
        return view('prodi.index', ['prodi' => $prodi]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodi.create');
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
                'nama_prodi' => 'required',
            ]);
        
        Prodi::create($request->all());
        return redirect('/prodi')->with('status', 'Data Prodi Berhasil Ditambahkan!');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // public function show()
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));
    }

    //public function editAdmin(Pendaftaran $pendaftaran)
    
    //{

       // $role = Role::where('')
       // return view('pendaftaran.edit', compact('pendaftaran'));
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodi $prodi)
    {
        
        $request->validate([
            'nama_prodi' => 'required',
        ]);
        
        
        Prodi::where('id', $prodi->id)
            ->update([
                'nama_prodi' => $request->nama_prodi,
            ]);
        return redirect('/prodi')->with('status', 'Data Prodi Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodi $prodi)
    {
        Prodi::destroy($prodi->id);
        return redirect('/prodi')->with('status', 'Data Prodi Berhasil Dihapus!');
    }
}
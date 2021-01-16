<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pkm;

class PkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       /** $daftar = DB::table('pendaftarans')->get(); */
        
        $pkm = Pkm::all();
        
        return view('pkm.index', ['pkm' => $pkm]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pkm.create');
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
                'jenis_pkm' => 'required',
            ]);
        
        Pkm::create($request->all());
        return redirect('/pkm')->with('status', 'Data PKM Berhasil Ditambahkan!');
            
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
    public function edit(Pkm $pkm)
    {
        return view('pkm.edit', compact('pkm'));
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
            'jenis_pkm' => 'required',
        ]);
        
        
        Pkm::where('id', $pkm->id)
            ->update([
                'jenis_pkm' => $request->jenis_pkm,
            ]);
        return redirect('/pkm')->with('status', 'Data Pkm Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkm $pkm)
    {
        Pkm::destroy($pkm->id);
        return redirect('/pkm')->with('status', 'Data Pkm Berhasil Dihapus!');
    }
}
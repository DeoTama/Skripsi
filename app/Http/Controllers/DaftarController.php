<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Pendaftaran;
use App\Role;
use App\Prodi;
use App\User;
use App\Pkm;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
        
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
        $prodi = Prodi::all();
        $pkm = Pkm::all();
        $mahasiswa = User::doesntHave('pendaftaranMahasiswa')->whereHas('roles', function ($query) {
            $query->where('name','user');
        })->get();
        return view('pendaftaran.create', ['prodi'=> $prodi, 'mahasiswa'=> $mahasiswa,'pkm'=>$pkm]);
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
                'proposal' => 'required',
                'mahasiswa' => 'required',
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

            $file = $request->file('proposal');
            $nama = rand().$file->getClientOriginalName();
            $path = 'public/proposal/';
            $file->storeAs($path,$nama);

        Pendaftaran::create([
                'proposal' => $nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'telpon' => $request->telpon,
                'jurusan' => $request->jurusan,
                'prodi' => $request->prodi,
                'angkatan' => $request->angkatan,
                'anggota' => $request->anggota,
                'skimpkm' => $request->skimpkm,
                'judulpkm' => $request->judulpkm,
                'status' => $request->status,
                'mahasiswa_id' => $request->mahasiswa,

        ]);
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
        $dosen = User::whereHas('roles', function ($query) {
            $query->where('name','dosen');
        })->get();
        $mahasiswa = User::doesntHave('pendaftaranMahasiswa')->whereHas('roles', function ($query) {
            $query->where('name','user');
        })->get();
        $prodi = Prodi::all();
        return view('pendaftaran.edit', ['pendaftaran'=> $pendaftaran, 'dosen'=>$dosen, 'mahasiswa'=>$mahasiswa, 'prodi'=>$prodi]);
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
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        
        $request->validate([
            'mahasiswa' => 'required',
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

                'nim' => $request->nim,
                'email' => $request->email,
                'telpon' => $request->telpon,
                'jurusan' => $request->jurusan,
                'prodi' => $request->prodi,
                'angkatan' => $request->angkatan,
                'anggota' => $request->anggota,
                'skimpkm' => $request->skimpkm,
                'user_id' => $request->dosen,
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

    public function download(Pendaftaran $pendaftaran)
    {
        
        return response()->download(storage_path('app/public/proposal/').$pendaftaran->proposal);

    } 
}

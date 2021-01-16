@extends('layouts.app')
      
@section('title', 'Form Pendaftaran')

@section('container')
@can('edit-users')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">List Pendaftar PKM</h1>
            
            <a href=" {{url('/pendaftaran/create')}}" class="btn btn-primary my-3">Tambah Data</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;" scope="col">Nama</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">NIM</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Jurusan</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Prodi</th>
                    <th scope="col">Anggota</th>
                    <th scope="col">SKIM PKM</th>
                    <th scope="col">Judul PKM </th>
                    <th scope="col">Dosen </th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftaran as $pdftr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;">@isset($pdftr->mahasiswa){{$pdftr->mahasiswa->name}} @endisset</td>
                        <td style="text-align:center;">{{$pdftr->nim}}</td>
                        <td style="text-align:center;">{{$pdftr->jurusan}}</td>
                        <td style="text-align:center;">{{$pdftr->prodi}}</td>
                        <td style="text-align:justify;">{{$pdftr->anggota}}</td>
                        <td style="text-align:center;">{{$pdftr->skimpkm}}</td>
                        <td style="text-align:justify;word-wrap: break-word;min-width: 100px;max-width: 420px;">{{$pdftr->judulpkm}}</td>
                        <td style="text-align:center;">
                        @if(isset($pdftr->user))
                            {{$pdftr->user->name}}
                            @else
                            Dosen belum di Assign
                        @endif
                         </td>
                        <td style="text-align:center;">{{$pdftr->status}}</td>
                        <td>
                            <a href="{{url('/pendaftaran/'.$pdftr->id)}}" class="btn btn-primary ">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endcan
@can('dosen-pendaftaran')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">List Pendaftar PKM</h1>
            
            <a href=" {{url('/pendaftaran/create')}}" class="btn btn-primary my-3">Tambah Data</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;" scope="col">Nama</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">NIM</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Jurusan</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Prodi</th>
                    <th scope="col">Anggota</th>
                    <th scope="col">SKIM PKM</th>
                    <th scope="col">Judul PKM </th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Auth::user()->pendaftaran as $pdftr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;">{{$pdftr->mahasiswa->name}}</td>
                        <td style="text-align:center;">{{$pdftr->nim}}</td>
                        <td style="text-align:center;">{{$pdftr->jurusan}}</td>
                        <td style="text-align:center;">{{$pdftr->prodi}}</td>
                        <td style="text-align:justify;">{{$pdftr->anggota}}</td>
                        <td style="text-align:center;">{{$pdftr->skimpkm}}</td>
                        <td style="text-align:justify;word-wrap: break-word;min-width: 100px;max-width: 420px;">{{$pdftr->judulpkm}}</td>
                       
                        <td style="text-align:center;">{{$pdftr->status}}</td>
                        <td>
                            <a href="{{url('/pendaftaran/'.$pdftr->id)}}" class="btn btn-primary ">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endcan
@can('mahasiswa-pendaftaran')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">List Pendaftar PKM</h1>
            
            <a href=" {{url('/pendaftaran/create')}}" class="btn btn-primary my-3">Tambah Data</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;" scope="col">Nama</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">NIM</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Jurusan</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Prodi</th>
                    <th scope="col">Anggota</th>
                    <th scope="col">SKIM PKM</th>
                    <th scope="col">Judul PKM </th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Auth::user()->pendaftaranMahasiswa as $pdftr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;">{{$pdftr->mahasiswa->name}}</td>
                        <td style="text-align:center;">{{$pdftr->nim}}</td>
                        <td style="text-align:center;">{{$pdftr->jurusan}}</td>
                        <td style="text-align:center;">{{$pdftr->prodi}}</td>
                        <td style="text-align:justify;">{{$pdftr->anggota}}</td>
                        <td style="text-align:center;">{{$pdftr->skimpkm}}</td>
                        <td style="text-align:justify;word-wrap: break-word;min-width: 100px;max-width: 420px;">{{$pdftr->judulpkm}}</td>
                       
                        <td style="text-align:center;">{{$pdftr->status}}</td>
                        <td>
                            <a href="{{url('/pendaftaran/'.$pdftr->id)}}" class="btn btn-primary ">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endcan
@endsection
      


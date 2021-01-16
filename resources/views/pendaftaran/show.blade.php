@extends('layouts.app')
      
@section('title', 'Detail List Pendaftar')

@section('container')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Detail List Pendaftar</h1>
            
            <a href="/pendaftaran/create" class="btn btn-primary my-3">Tambah Data</a>
            
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Nama</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">NIM</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Email</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">No.Telpon</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Jurusan</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Prodi</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Angkatan</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Anggota</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">SKIM PKM</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Judul PKM </th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Proposal </th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 100px;" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;">{{$pendaftaran->mahasiswa->name}}</td>
                        <td>{{$pendaftaran->nim}}</td>
                        <td>{{$pendaftaran->email}}</td>
                        <td>{{$pendaftaran->telpon}}</td>
                        <td>{{$pendaftaran->jurusan}}</td>
                        <td>{{$pendaftaran->prodi}}</td>
                        <td>{{$pendaftaran->angkatan}}</td>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 250px;">{{$pendaftaran->anggota}}</td>
                        <td>{{$pendaftaran->skimpkm}}</td>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 200px;">{{$pendaftaran->judulpkm}}</td>
                        <td><a href="{{url ('/pendaftaran/'.$pendaftaran->id.'/download')}}"> {{$pendaftaran->proposal}}</a> </td>
                        <td>
                            
                            <a href="{{ $pendaftaran->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ $pendaftaran->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
      
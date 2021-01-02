@extends('layout/main')
      
@section('title', 'Form Pendaftaran')

@section('container')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Pendaftaran PKM</h1>
            
            <a href="/pendaftaran/create" class="btn btn-primary my-3">Tambah Data</a>
            
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">No.Telpon</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">SKIM PKM</th>
                    <th scope="col">Judul PKM </th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftaran as $pdftr)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td>{{$pdftr->nama}}</td>
                        <td>{{$pdftr->nim}}</td>
                        <td>{{$pdftr->email}}</td>
                        <td>{{$pdftr->telpon}}</td>
                        <td>{{$pdftr->jurusan}}</td>
                        <td>{{$pdftr->prodi}}</td>
                        <td>{{$pdftr->angkatan}}</td>
                        <td>{{$pdftr->skimpkm}}</td>
                        <td>{{$pdftr->judulpkm}}</td>
                        <td>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
      

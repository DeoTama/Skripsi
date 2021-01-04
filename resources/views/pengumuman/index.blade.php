@extends('layouts.app')
@section('title', 'Form Pengumuman')

@section('container')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">List Tim Lolos Seleksi Internal ITK</h1>
            
            <a href=" {{url('/pengumuman/create')}}" class="btn btn-primary my-3">Tambah Data</a>
            
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
                    <th scope="col">SKIM PKM</th>
                    <th scope="col">Judul PKM </th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengumuman as $umum)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;">{{$umum->nama}}</td>
                        <td style="text-align:center;">{{$umum->skimpkm}}</td>
                        <td style="text-align:justify;word-wrap: break-word;min-width: 100px;max-width: 420px;">{{$umum->judulpkm}}</td>
                        <td>

                            <a href="{{ $umum->id }}/edit" class="btn btn-primary">Edit</a>
                            <form action="{{ $umum->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

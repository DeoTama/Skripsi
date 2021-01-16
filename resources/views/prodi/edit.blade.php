@extends('layouts.app')
      
@section('title', 'Form Ubah Data Pendaftar PKM')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Ubah Data Program Studi</h1>
                
            <form method= "POST" action="/prodi/{{ $prodi->id }}">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="nama_prodi" placeholder="Masukkan Nama Program Studi" name="nama_prodi" value="{{ $prodi->nama_prodi }}">
                        @error('nama_prodi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>      
        </div>
    </div>
</div>
@endsection
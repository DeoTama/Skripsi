@extends('layouts.app')
      
@section('title', 'Form Ubah Data Tim Lolos Seleksi Internal')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Ubah Data Tim Lolos Seleksi Internal</h1>
                
            <form method= "POST" action="/pengumuman/{{ $pengumuman->id }}">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $pengumuman->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="skimpkm">SKIM-PKM</label>
                        <input type="text" class="form-control @error('skimpkm') is-invalid @enderror " id="skimpkm" placeholder="Masukkan SKIM-PKM" name="skimpkm" value="{{ $pengumuman->skimpkm }}">
                        @error('skimpkm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="judulpkm">Judul PKM</label>
                        <input type="text" class="form-control @error('judulpkm') is-invalid @enderror " id="judulpkm" placeholder="Masukkan Judul PKM" name="judulpkm" value="{{ $pengumuman->judulpkm }}">
                        @error('judulpkm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    
            </form>      
        </div>
    </div>
</div>
@endsection
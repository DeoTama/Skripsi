@extends('layouts.app')
      
@section('title', 'Form Tim Lolos Seleksi Internal PKM')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Tim Lolos Seleksi Internal PKM</h1>
                
            <form method= "POST" action="/pengumuman/create">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama Ketua</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="skimpkm">SKIM-PKM</label>
                        <input type="text" class="form-control @error('skimpkm') is-invalid @enderror " id="skimpkm" placeholder="Masukkan SKIM-PKM" name="skimpkm" value="{{old('skimpkm')}}">
                        @error('skimpkm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="judulpkm">Judul PKM</label>
                        <input type="text" class="form-control @error('judulpkm') is-invalid @enderror " id="judulpkm" placeholder="Masukkan Judul PKM" name="judulpkm" value="{{old('judulpkm')}}">
                        @error('judulpkm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>   
            </form>      
        </div>
    </div>
</div>
@endsection
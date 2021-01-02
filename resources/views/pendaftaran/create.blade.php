@extends('layout/main')
      
@section('title', 'Form Pendaftaran PKM')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Pendaftaran PKM</h1>
                
            <form method= "POST" action="/pendaftaran/create">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan Nim" name="nim"
                        value="{{old('nim')}}">
                        @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="telpon">No.Telpon</label>
                        <input type="text" class="form-control @error('telpon') is-invalid @enderror " id="telpon" placeholder="Masukkan No.Telpon" name="telpon" value="{{old('telpon')}}">
                        @error('telpon')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group">      
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror " id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{old('jurusan')}}">
                        @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control @error('prodi') is-invalid @enderror " id="prodi" placeholder="Masukkan Prodi" name="prodi" value="{{old('prodi')}}">
                        @error('prodi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror " id="angkatan" placeholder="Masukkan Angkatan" name="angkatan" value="{{old('angkatan')}}">
                        @error('angkatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="anggota">Anggota</label>
                        <input type="text" class="form-control @error('anggota') is-invalid @enderror " id="anggota" placeholder="Masukkan Nama Anggota" name="anggota" value="{{old('anggota')}}">
                        @error('anggota')
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



      

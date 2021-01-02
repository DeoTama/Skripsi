@extends('layout/main')
      
@section('title', 'Form Ubah Data Pendaftar PKM')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Ubah Data Pendaftar PKM</h1>
                
            <form method= "POST" action="/pendaftaran/{{ $pendaftaran->id }}">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $pendaftaran->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan Nim" name="nim"
                        value="{{ $pendaftaran->nim }}">
                        @error('nim')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $pendaftaran->email }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telpon">No.Telpon</label>
                        <input type="text" class="form-control @error('telpon') is-invalid @enderror " id="telpon" placeholder="Masukkan No.Telpon" name="telpon" value="{{ $pendaftaran->telpon }}">
                        @error('telpon')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror " id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $pendaftaran->jurusan }}">
                        @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control @error('prodi') is-invalid @enderror " id="prodi" placeholder="Masukkan Prodi" name="prodi" value="{{ $pendaftaran->prodi }}">
                        @error('prodi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control @error('angkatan') is-invalid @enderror " id="angkatan" placeholder="Masukkan Angkatan" name="angkatan" value="{{ $pendaftaran->angkatan }}">
                        @error('angkatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="anggota">Anggota</label>
                        <input type="text" class="form-control @error('anggota') is-invalid @enderror " id="anggota" placeholder="Masukkan Nama Anggota" name="anggota" value="{{ $pendaftaran->anggota }}">
                        @error('anggota')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="skimpkm">SKIM-PKM</label>
                        <input type="text" class="form-control @error('skimpkm') is-invalid @enderror " id="skimpkm" placeholder="Masukkan SKIM-PKM" name="skimpkm" value="{{ $pendaftaran->skimpkm }}">
                        @error('skimpkm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="judulpkm">Judul PKM</label>
                        <input type="text" class="form-control @error('judulpkm') is-invalid @enderror " id="judulpkm" placeholder="Masukkan Judul PKM" name="judulpkm" value="{{ $pendaftaran->judulpkm }}">
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



      

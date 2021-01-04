@extends('layout/main')
      
@section('title', 'Form Pendaftaran PKM')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Pendaftaran PKM</h1>
                <form>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan Nim" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telpon">No.Telpon</label>
                        <input type="text" class="form-control" id="telpon" placeholder="Masukkan No.Telpon" name="telpon">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control" id="prodi" placeholder="Masukkan Prodi" name="prodi">
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" placeholder="Masukkan Angkatan" name="angkatan">
                    </div>
                    <div class="form-group">
                        <label for="skimpkm">SKIM-PKM</label>
                        <input type="text" class="form-control" id="skimpkm" placeholder="Masukkan SKIM-PKM" name="skimpkm">
                    </div>
                    <div class="form-group">
                        <label for="judulpkm">Judul PKM</label>
                        <input type="text" class="form-control" id="judulpkm" placeholder="Masukkan Judul PKM" name="judulpkm">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    
            </form>      
        </div>
    </div>
</div>
@endsection
      

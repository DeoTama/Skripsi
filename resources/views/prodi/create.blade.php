@extends('layouts.app')
      
@section('title', 'Data Prodi')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Data Prodi</h1>
            <form method= "POST" action="/prodi/create">
                @csrf
                <div class="form-group">
                        <label for="nama_prodi">Program Studi</label>
                        <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror " id="nama_prodi" placeholder="Masukkan Data" name="nama_prodi" value="{{old('nama_prodi')}}">
                        @error('nama_prodi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>   
            </form> 
        </div>
    </div>
</div>

@endsection  
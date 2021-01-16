@extends('layouts.app')
      
@section('title', 'Data PKM')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Form Data Prodi</h1>
            <form method= "POST" action="/pkm/create">
                @csrf
                <div class="form-group">
                        <label for="jenis_pkm">Jenis PKM</label>
                        <input type="text" class="form-control @error('jenis_pkm') is-invalid @enderror " id="jenis_pkm" placeholder="Masukkan Data" name="jenis_pkm" value="{{old('jenis_pkm')}}">
                        @error('jenis_pkm')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>   
            </form> 
        </div>
    </div>
</div>

@endsection  
@extends('layouts.app')
@section('title', 'Form Prodi')

@section('container')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">List PKM</h1>
            
            <a href=" {{url('/pkm/create')}}" class="btn btn-primary my-3">Tambah Data</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;" scope="col">Jenis PKM</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pkm as $pkm)
                    <tr>
                        <th scope="row">{{ $loop->iteration}}</th>
                        <td style="text-align:center;word-wrap: break-word;min-width: 100px;max-width: 120px;">{{$pkm->jenis_pkm}}</td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
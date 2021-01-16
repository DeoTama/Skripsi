
@extends('layouts.app')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Review</h1>


            <div class="form-group">
                        <label for="skimpkm">Jenis PKM</label>
                        <select class="form-control" name="skimpkm" required="">
                            <option value="">Pilih jenis PKM</optiom>
                            @foreach ($pkm as $pkm)
                            <option value="{{$pkm->jenis_pkm}}">{{$pkm->jenis_pkm}}</option>
                            @endforeach
                            </select>
                    </div>
                    <table class="table">
         <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Bobot</th>
                <th scope="col">Skor</th>
                <th scope="col">Nilai</th>
                <th scope="col">Keterangan</th>
            </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Gagasan (orisinalitas, unik dan manfaat masa depan)</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
         
                    
        </div>
     </div>
 </div>
@endsection  


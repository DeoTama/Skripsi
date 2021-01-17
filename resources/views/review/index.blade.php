
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
                            <option value="{{$pkm->jenis_pkm}}"
                            @if($pkm->review_id->contains($review->id)) selected @endif>
                            {{$pkm->jenis_pkm}}</option>
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
    @foreach ($review as $rvw)
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $rvw->kriteria }}</td>
      <td>{{ $rvw->bobot }}</td>
      <td>{{ $rvw->keterangan }}</td>
    </tr>
    @endforeach
  </tbody>
</table>


        </div>
     </div>
 </div>
@endsection


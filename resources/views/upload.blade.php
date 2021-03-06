@extends('layouts.app')
@section('title', 'Form Logbook Monev')

@section('container')
<div class="row">
		<div class="container">
 
			<h2 class="text-center my-5">Test Logbook Monev</h2>
			
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>Foto Kegiatan</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Logbook Kegiatan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
				
				<h4 class="my-5">List Kegiatan</h4>
 
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">Foto</th>
							<th>Kegiatan</th>
							<th width="1%">Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->keterangan}}</td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
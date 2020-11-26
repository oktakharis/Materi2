@extends('layouts.frontend.masteradmin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Game
				</div>
				<div class="card-body">
					<div class="form-group">
						<form action="{{url('admin/games', $games->id)}}" method="post">
						@csrf
						@method("PUT")
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$games->nama}}">
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="" class="control-label">Harga</label>
							<input type="text" class="form-control" name="harga" value="{{$games->harga}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="" class="control-label">Stock</label>
							<input type="text" class="form-control" name="stock" value="{{$games->stock}}">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label">deskripsi</label>
						<textarea name="deskripsi" class="form-control">{{$games->deskripsi}}</textarea>
					</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

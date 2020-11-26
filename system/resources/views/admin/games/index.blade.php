@extends('layouts.frontend.masteradmin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Filter
				</div>
				<div class="card-body">
					<form action="{{url('admin/games/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Stock</label>
							<input type="text" class="form-control" name="stock" value="{{$stock ?? ""}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Min</label>
									<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga Max</label>
									<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
								</div>
							</div>
						</div>
						<button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					Data Games
					<a href="{{url('admin/games/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stock</th>
						</thead>
						<tbody>
							@foreach($list_games as $games)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/games', $games->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/games', $games->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
									@include('layouts.util.delete', ['url' => url('games', $games->id)])
									</div>
								</td>
								<td>{{$games->nama}}</td>
								<td>{{$games->harga}}</td>
								<td>{{$games->stock}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
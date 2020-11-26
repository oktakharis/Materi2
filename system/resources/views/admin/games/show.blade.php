@extends('layouts.frontend.masteradmin')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data Game
				</div>
				<div class="card-body">
					<h3>{{$games->nama}}</h3>
					<hr>
					<p>
						Rp. {{number_format($games->harga)}}	|
						Stock : {{$games->stock}}	|
						Seller : {{$games->seller->username}}
					</p>
					
					<p>
						{{$games->deskripsi}}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

<?php

namespace App\Http\Controllers;
use App\Models\Games;
use App\Models\User;
class GameController extends Controller{

	function index(){
		$user = request()->user();
		$data['list_games'] = $user->games();
		return view('admin.games.index', $data);
	}
	function create(){
		return view('admin.games.create');
	}
	function store(){
		$games = new games;
		$games->id_user = request()->user()->id;
		$games->nama = request('nama');
		$games->harga = request('harga');
		$games->stock = request('stock');
		$games->deskripsi = request('deskripsi');
		$games->save();

		return redirect('admin/games')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(Games $games){
		$data['games'] = $games;
		return view('admin.games.show', $data);
	}
	function edit(Games $games){
		$data['games'] = $games;
		return view('admin.games.edit', $data);
	}
	function update(Games $games){
		$games->nama = request('nama');
		$games->harga = request('harga');
		$games->stock = request('stock');
		$games->deskripsi = request('deskripsi');
		$games->save();

		return redirect('admin/games')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Games $games){
		$games->delete();

		return redirect('admin/games')->with('danger', 'Data Berhasil Dihapus');
	}

	function filter(){
		$nama = request('nama');
		$stock = explode(",", request('stock'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		//$data['list_games'] = Games::where('nama','like', "%$nama%")->get();
		//$data['list_games'] = Games::whereIn('stock',$stock)->get();
		$data['list_games'] = Games::whereBetween('harga',[$harga_min, $harga_max])->get();
		//$data['list_games'] = Games::whereNot('stock','<>', "$stock")->get();
		//$data['list_games'] = Games::whereNotIn('stock',$stock)->get();
		//$data['list_games'] = Games::whereNotBetween('harga',[$harga_min, $harga_max])->get();
		$data['nama'] = $nama;
		$data['stock'] = request('stock');

		return view('admin.games.index', $data);
	}

}

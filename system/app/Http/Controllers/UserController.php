<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
class UserController extends Controller{

	function index(){
		$data['list_user'] = user::withCount('games')->get();
		return view('admin.user.index', $data);
	}
	function create(){
		return view('admin.user.create');
	}
	function store(){
		$user = new user;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		$userDetail = new userDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();

		return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(user $user){
		$data['user'] = $user;
		return view('admin.user.show', $data);
	}
	function edit(user $user){
		$data['user'] = $user;
		return view('admin.user.edit', $data);
	}
	function update(user $user){
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->save();

		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();

		return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(user $user){
		$user->delete();

		return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
	}

}
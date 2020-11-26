<?php

namespace App\Http\Controllers;
class HomeController extends Controller{


	function showBeranda(){
		return view('admin.adminindex');
	}
	function showGames(){
		return view('admin.games');
	}
	function showLogin(){
		return view('admin.sign-in');
	}
	function showRegistrasi(){
		return view('admin.sign-up');
	}
	function showUser(){
		return view('admin.userprofil');
	}

}
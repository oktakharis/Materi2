<?php

namespace App\Models;
use App\Models\User;

class Games extends Model{
	protected $table = 'games';

	function seller(){
		return $this->belongTo(User::class, 'id_user');
	}

}




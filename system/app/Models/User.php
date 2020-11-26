<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Games;
use App\Models\UserDetail;

class User extends Authenticatable
{
    protected $tabel = 'user';
    use HasFactory, Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_user');
    }

    function games(){
    	return $this->hasMany(Games::class, 'id_user');
    }
}

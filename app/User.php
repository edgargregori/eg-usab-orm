<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'first_name', 'last_name', 'email', 'password',
=======
        'name', 'email', 'password',
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD

	public function setPasswordAttribute($password){
	  $this->attributes['password']=\Illuminate\Support\Facades\Hash::make($password);
	}
=======
>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
}

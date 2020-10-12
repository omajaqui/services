<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel  extends model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $rememberTokenName = false;
    //public $incrementing = false;
    //public $timestamps = false; 
    protected $table = 'usuarios';
    protected $primaryKey = 'idUser';
    protected $fillable = ['idUser','nombre','user','pass'];

    
}

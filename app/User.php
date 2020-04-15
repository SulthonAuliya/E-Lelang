<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','isAdmin','isPetugas','alamat','telp','isOwner','id_outlet'
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function homeUser(){
    	return $this->hasMany('App\homeUser','user_id');
    }

    public function harga(){
        return $this->hasMany('App\harga', 'user_id');
    }

    public function lelang(){
        return $this->hasMany('App\lelang', 'user_id');
    }

}

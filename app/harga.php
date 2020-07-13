<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class harga extends Model
{
    protected $table = 't_harga';
    protected $primaryKey = 'id_harga';
    protected $fillable = [
        'id_barang','user_id', 'harga'
    ];
    
    // public function scopeHasil($query,$harga){
    //     $nama = 'harga';
    //     return $query->where($nama, $harga);
    // }

    public function user(){
    	return $this->belongsTo('App\User');
    }
 
    public function barang(){
    	return $this->belongsTo('App\homeUser');
    }

}

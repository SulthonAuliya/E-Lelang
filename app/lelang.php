<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lelang extends Model
{
    protected $table = 'lelang';
    protected $primaryKey = 'id_lelang';
    protected $fillable = [
        'id_barang','user_id', 'harga_akhir','tgl'
    ];


    public function user(){
    	return $this->belongsTo('App\User');
    }
 
    public function barang(){
    	return $this->belongsTo('App\homeUser','id_barang');
    }
}

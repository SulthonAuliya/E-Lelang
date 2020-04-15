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

    // public static function value($id_bar, $harga){
    //    // $max = DB::table('t_harga')
    //    //          ->select('user_id','id_barang','harga')
    //    //          ->where('id_barang',$id_bar)
    //    //          ->max('harga');

    //     $query = DB::table('t_harga')  
    //                 ->select('*')
    //                 ->where('user_id', '3');    
    //     return $query;
    // }


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

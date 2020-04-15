<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeUser extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'user_id','nama_barang', 'tgl', 'harga_awal','desc','status','image'
    ];

    public function scopeAccepted($query){
    	return $query->where('status', 'accepted')
                     ->orWhere('status', 'ongoing');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    } 

    public function harga()
    {
        return $this->hasMany('App\harga','id_barang');
    }

    // public function lelang(){
    //     return $this->hasOne('App\lelang','id_barang');
    // }

}
 
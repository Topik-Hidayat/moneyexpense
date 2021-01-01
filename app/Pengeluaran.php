<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = 'pengeluaran';
    protected $fillable = ['tanggal','tipe_id','jumlah'];
    public $timestamps = true;


    public function Tipe()
    {
        return $this->hasMany('App\Tipe', 'tipe_id', 'id');
    }
}

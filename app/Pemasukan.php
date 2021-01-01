<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    
    protected $table = 'pemasukan';
    protected $fillable = ['tanggal','tipe_id','jumlah'];
    public $timestamps = true;

    public function Tipe()
    {
        return $this->hasMany('App\Tipe', 'tipe_id', 'id');
    }
}

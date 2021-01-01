<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    protected $table = 'tipe';
    protected $fillable = ['nama', 'tipe'];
    protected $timestamp = true;


    public function Pengeluaran()
    {
        return $this->belongsTo('App\Pengeluaran');
    }

    public function Pemasukan()
    {
        return $this->belongsTo('App\Pemasukan');
    }
}

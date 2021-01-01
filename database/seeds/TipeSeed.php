<?php

use App\Tipe;
use Illuminate\Database\Seeder;

class TipeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Pemasukan
            ['nama' => 'Gaji', 'tipe' => 'Pemasukan'],
            ['nama' => 'Lain Lain','tipe' => 'Pemasukan'],
            // Pengeluaran
            ['nama' => 'Orang Tua', 'tipe' => 'Pengeluaran'],
            ['nama' => 'Roko & Kopi', 'tipe' => 'Pengeluaran'],
            ['nama' => 'Topup E-money', 'tipe' => 'Pengeluaran'],
            ['nama' => 'Lain Lain', 'tipe' => 'Pengeluaran']
        ];


        foreach($data as $item) {
            Tipe::create($item);
        }
    }
}

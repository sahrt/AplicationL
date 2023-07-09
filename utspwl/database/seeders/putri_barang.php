<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class putri_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('putri_barangs')->insert([
           [
            'Kode_Jenis' => '01',
            'nama_barang' => 'Kipas Angin Maspion',
            'detail_barang' => 'Maspion Stand Fan 16 inch – EX172S didesain dengan pilihan warna hitam. Warna yang elegan dan lengkap dengan tiga pilihan kecepatan serta 1 tombol on/off. Tingkat kecepatan angin dapat diatur dengan mudah. Cocok ditempatkan di indoor maupun outdoor.',
            'foto' => 'img1.jpg',
            'harga' => 300000,
            'stock' => 16
           ],

           [
            'Kode_Jenis' => '02',
            'nama_barang' => 'TV LED Sharp',
            'detail_barang' => 'Merupakan TV LED berukuran 24 Inch yang memberikan Anda kualitas gambar yang jernih dan tajam. Cocok untuk digunakan dirumah anda bersama keluarga dan kerabat.',
            'foto' => 'img2.jpg',
            'harga' => 1799000,
            'stock' => 10
           ],
        ]);
    }
}

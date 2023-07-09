<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class artikel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'kode_jenis_artikel' => 'aa', 
                'judul' =>'Timnas Indonesi Maju Ke Piala Dunia',
                'isi'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ],

            [

                'kode_jenis_artikel' => 'ab',
                'judul' => 'partai x menyogok rakyaknya agar terpilih',
                'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
            
            ],


            [

                'kode_jenis_artikel' => 'ac',
                'judul' => 'harga emas anjlok',
                'isi' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
            ],
            [

                'kode_jenis_artikel' => 'ad',
                'judul' => 'pengalangan dana untuk korban banjir',
                'isi' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam'
            ],
            
        ]);
    }
    
}

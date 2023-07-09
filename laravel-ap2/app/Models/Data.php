<?php

namespace App\Models;

#use Illuminate\Database\Eloquent\Factories\HasFactory;
#use Illuminate\Database\Eloquent\Model;

class Data 
{
    #use HasFactory;
    static $data_blog = [
           [
            'no' => 1,
            'namaWisata' => 'Penangungan',
            'harga' => 500000,
            'link' => 'wahyusaoer',
            'foto' => 'Penangungan.jpeg'
        ],
            [
            'no' => 2,
            'namaWisata' => 'Bromo',
            'harga' => 750000,
            'link' => 'wahyusaoer',
            'foto' => 'Bromo.jpeg'
        ],
           [
            'no' => 3,
            'namaWisata' => 'Pandawa',
            'harga' => 600000,
            'link' => 'wahyusaoer',
            'foto' => 'Pandawa.jpeg'
        ]





    ];

    public static function all(){
        return collect(self::$data_blog);
    }
}

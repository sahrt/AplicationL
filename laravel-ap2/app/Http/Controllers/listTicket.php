<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listTicket extends Controller
{
    public function getView (){
        return view('daftarTiket');
    }
    //method untuk memangil menyimpan data
    public function post(Request $post){
        echo "Nama Wisata : " . $post->wisata . "<br>";
        echo "Harga : " . $post->harga . "<br>";
        echo "Link Video : " . "<a>".$post->video."</a>" . "<br>";
        echo "Link Foto : " .$post->foto;
    }
}

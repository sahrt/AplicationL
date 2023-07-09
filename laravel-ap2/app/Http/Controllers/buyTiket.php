<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BuyTiket extends Controller
{
   public function getView(){
        return view('pesanTiket');
  }
    public function post(Request $post){
        echo "Nama : " . $post->nama . "<br>";
        echo "Nomor Id : " . $post->nomorId . "<br>";
        echo "Nomer Hp : " . $post->noHp . "<br>";
        echo "Tempat Wisata : " . $post->wisata . "<br>";
        echo "Tanggal Berangkat : " . $post->tanggal . "<br>";
        echo "Jumlah Orang Dewasa : " . $post->dewasa . "<br>";
        echo "Jumlah Anak - Anak : " . $post->anak . "<br>";
    }

}

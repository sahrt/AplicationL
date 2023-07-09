<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use App\Models\jenis_artikels;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class articelController extends Controller
{
    
    public function getView(){
       $users = jenis_artikels::join('artikel','artikel.kode_jenis_artikel','=','jenis_artikels.kode')
       ->get();
       return view('dashboard.index',['daftarArtikel' => $users]);
    }
    public function jenis($id=1) {
        $users = jenis_artikels::join('artikel','artikel.kode_jenis_artikel','=','jenis_artikels.kode')
        ->where('artikel.kode_jenis_artikel','=', $code)
        ->get();
       return view('dashboard.artikel',['daftarArtikel' => $users]);
   
    }
    public function list(){
        return view('dashboard.topik');
    }
}

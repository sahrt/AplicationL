<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\putri_barang;

class putriController extends Controller
{
    public function gethome (){
        $results = putri_barang::all();
        return view ('toko_putri.index', ["barang" => $results]);
    }
    public function getview ($id){
        $results = putri_barang::find($id);
        return view ('toko_putri.index', ["barang" => $results]);
    }
}
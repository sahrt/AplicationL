<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function MatakuliahView() {
        // $allDataUser=User::all();
        $data['allDataMK']=Matakuliah::all();
        return view('backend.matakuliah.view_user',$data);
    }

}

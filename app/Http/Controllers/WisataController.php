<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WisataModel;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function showWisataData() {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Pending')
            ->get();
        return view('DataWisata')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    
    }

    public function UpdateWisataData($id) {

        $wisata = WisataModel::find($id);

        return view('EditDataWisata')->with([
            'title' => 'Edit Data Wisata',
            'data' => $wisata
        ]);
        
    
    }

    
}




// public function showWisataData() {

//     $wisata = WisataModel::get();
//     return view('DataWisata')->with([
//         'title' => 'Data Pending Wisata',
//         'data' => $wisata
//     ]);

// }

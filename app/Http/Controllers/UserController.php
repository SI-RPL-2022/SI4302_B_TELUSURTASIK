<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function showUserData() {

        $user = DB::table('users')
            ->select('*')
            ->where('is_admin','=',1)
            ->get();
        return view('DataUser')->with([
    		'title' => 'Data User',
            'data' => $user
    	]);

    }

    public function showMitraData() {

        $user = DB::table('users')
            ->select('*')
            ->where('is_admin','=',0)
            ->get();
        return view('DataUser')->with([
    		'title' => 'Data User',
            'data' => $user
    	]);

    }

    public function UpdateUserData($id) {

        $user = userModel::find($id);

        return view('EditDataMitraUser')->with([
            'title' => 'Edit Data User',
            'data' => $user
        ]);
        
    
    }

    
    
}

//public function showMitraData() {

//    $mitra = UserModel::get();
//    return view('DataMitra')->with([
//        'title' => 'Data Mitra',
//        'data' => $mitra
//    ]);

//}

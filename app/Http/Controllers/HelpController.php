<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelpController extends Controller
{
    public function index(){

        $help = DB::table('helps')
            ->select('*')
            ->get();
        return view('customer.help.index',$help);
    }
}

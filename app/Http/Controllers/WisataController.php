<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Wisata;
use App\Models\WisataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');        
    }
    public function show(Request $request, Wisata $wisata)
    {
        $data['wisata'] = $wisata->load(['reviews']);

        return view('wisata.detail', $data);
    }

    public function UserLookWisata()
    {

        $wisata = DB::table('wisatas')
        ->select('*')
        ->where('status', '=', 'Accepted')
        ->get();
        return view('wisata.index')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);
    }

    public function UserLookDetailWisata($id)
    {

        $wisata = Wisata::find($id);
        $review = DB::table('reviews')
        ->join('users', 'reviews.id_user', '=', 'users.id')
        ->join('wisatas', 'reviews.id_wisata', '=', 'wisatas.id_wisata')
                ->select('reviews.*', 'users.id', 'users.name', 'wisatas.id_wisata')
        ->where('wisatas.id_wisata', $id)
        ->get();

        return view('wisata.detail')->with([
            'data' => $wisata,
            'review' => $review,
        ]);
    }

    public function AddReviewWisata(Request $request){

        DB::table('reviews')->insert([
            'id_user' => Auth::user()->id,
            'id_wisata' => $request->id_wisata,
            'show' => $request->show,
            'desc' => $request->desc,
            'created_at' => date("Y-m-d h:i:s")

        ]);

        return redirect()->route('wisata.show', $request->id_wisata);
    }

    public function showWisataDataPending() {

        $wisata = DB::table('wisatas')
        ->select('*')
        ->where('status','=','Pending')
        ->get();
        return view('DataWisataPending')->with([
            'title' => 'Data Wisata',
            'data' => $wisata
        ]);

    }

    public function showWisataData() {

        $wisata = DB::table('wisatas')
        ->select('*')
        ->where('status','=','Accepted')
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

    public function EditWisataData(Request $request)
    {

        DB::table('wisatas')->where('id_wisata',$request->id_wisata)->update([
            'title' => $request->title,
            'categorie' => $request->categorie,
            'location' => $request->location,
            'desc' => $request->desc,
            'status' => $request->status

        ]);

        return redirect('DataWisataPending');
    }

    public function DeleteWisataData($id) {

        DB::table('wisatas')->where('id_wisata',$id)->delete();

        return redirect('DataWisataPending');
    }


    // kategori

    public function showKategoriWisata(Request $request) {

        $wisata = DB::table('wisatas')
        ->select('*')
        ->where('status','=','Accepted')
        ->where('categorie','=',$request->searchCategory)
        ->get();

        return view('wisata.index')->with([
            'data' => $wisata
        ]);

    }

    // public function UserReview($id)
    // {

    //     $wisata = Wisata::find($id);

    //     return view('wisata.review')->with([
    //         'data' => $wisata
    //     ]);
    // }
    public function review(Request $request, Wisata $wisata)
    {

    }

}

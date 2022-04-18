<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\WisataModel;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function wisataAdmin()
    {
        $wisata = Wisata::all();
        $jumlah = Wisata::count();
        return view('wisata.index', compact('wisata', 'jumlah'));
    }

    public function create()
    {
        return view('wisata.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/images'), $pictureName);
        
        $wisata = Wisata::create([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'categorie' => $request['categorie'],
            'location' => $request['location'],
            'picture' => $pictureName,
        ]);
        return redirect('/admin/wisata');
    }
    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('wisata.edit', compact('wisata'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/images'), $pictureName);
        $wisata = Wisata::find($id);

        $wisata->title = $request->title;
        $wisata->desc = $request->desc;
        $wisata->categorie = $request->categorie;
        $wisata->location = $request->location;
        $wisata->picture = $pictureName;
        $wisata->save();
        return redirect('/admin/wisata');
    }
    
    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();
        return redirect('/admin/wisata');
    
    }    
        // septi
    // public function index(Request $request)
    // {
    //     $data['listWisata'] = Wisata::with(['reviews'])
    //         ->when($request->has('searchWisata') && $request->searchWisata != null, function ($query) use ($request) {
    //             $query->where('title', 'LIKE', '%' . $request->searchWisata . '%');
    //         })->when($request->has('searchCategory') && $request->searchCategory != null, function ($query) use ($request) {
    //             $query->where('categorie', $request->searchCategory);
    //         })->paginate(3);

    //     return view('wisata.index', $data);
    // }

    public function show(Request $request, Wisata $wisata)
    {
        $data['wisata'] = $wisata->load(['reviews']);
        return view('wisata.detail', $data);
    }

    public function UserLookWisata() {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Accepted')
            ->get();
        return view('wisata.index')->with([    
            'data' => $wisata
        ]);
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
    
    public function UserLookDetailWisata($id) {

        $wisata = Wisata::find($id);

        return view('wisata.detail')->with([
            'data' => $wisata
        ]);

    }        
    public function showWisataData() {

        $wisata = DB::table('wisatas')
            ->select('*')
            ->where('status','=','Accept')
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


}


// public function showWisataData() {

//     $wisata = WisataModel::get();
//     return view('DataWisata')->with([
//         'title' => 'Data Pending Wisata',
//         'data' => $wisata
//     ]);

// }

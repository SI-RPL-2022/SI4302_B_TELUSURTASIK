<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function reviewAdmin()
    {
        $review = Review::all();
        $jumlah = Review::count();
        return view('review.index', compact('review', 'jumlah'));
    }

    public function create()
    {
        return view('review.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/images'), $pictureName);
        
        $review = Review::create([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'categorie' => $request['categorie'],
            'location' => $request['location'],
            'picture' => $pictureName,
        ]);
        return redirect('/admin/review');
    }
    public function edit($id)
    {
        $review = Review::find($id);
        return view('review.edit', compact('review'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/images'), $pictureName);
        $review = Review::find($id);

        $review->title = $request->title;
        $review->desc = $request->desc;
        $review->categorie = $request->categorie;
        $review->location = $request->location;
        $review->picture = $pictureName;
        $review->save();
        return redirect('/admin/review');
    }
    public function destroy($id)
    {
        $review = review::find($id);
        $review->delete();
        return redirect('/admin/review');
    }
}

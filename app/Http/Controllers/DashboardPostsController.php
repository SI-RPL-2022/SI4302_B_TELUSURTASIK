<?php

namespace App\Http\Controllers;

use App\Models\TambahWisata;
use Illuminate\Http\Request;


class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mitra.dashboard.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mitra.TambahWisata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_wisata' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'jam' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ]);
        TambahWisata::create($data);
        return redirect()->route('Mitra/dashboard/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TambahWisata  $tambahWisata
     * @return \Illuminate\Http\Response
     */
    public function show(TambahWisata $tambahWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TambahWisata  $tambahWisata
     * @return \Illuminate\Http\Response
     */
    public function edit(TambahWisata $tambahWisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TambahWisata  $tambahWisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TambahWisata $tambahWisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TambahWisata  $tambahWisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(TambahWisata $tambahWisata)
    {
        //
    }
}

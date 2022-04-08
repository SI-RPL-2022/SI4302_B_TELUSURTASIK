<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        // Method untuk menampilkan form create post
    }
    public function store(Request $request)
    {
        // Method untuk melakukan insert / input data ke dalam database
    }
    public function show($id)
    {
        // Method untuk menampilkan single post / detail dari sebuah post
    }
    public function edit($id)
    {
        // Method untuk menampilkan halaman edit post
    }
    public function update(Request $request, $id)
    {
        // Method untuk melakukan update data post ke database
    }

    public function destroy($id)
    {
        // Method untuk menghapus data post
    }
}

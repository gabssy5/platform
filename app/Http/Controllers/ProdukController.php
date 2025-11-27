<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = "Aqua 1lt";
        return view('produk.index', compact('produk'));
    }

    public function show()
    {
        $produk = ["Aqua 1Lt", "Beer", "Ayam Geprek", "Buku Motivasi", "React"];
        return view('produk.show', compact('produk'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function dataPelanggan()
    {
        return ['Ina','Ani','Ita','Indra'];
    }

    public function index()
    {
        $pelanggan = $this->dataPelanggan();
        return view('pelanggan.index', compact('pelanggan'));
    }
}

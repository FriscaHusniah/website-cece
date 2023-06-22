<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang');
    }

}

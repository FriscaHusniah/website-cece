<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class InputController extends Controller
{
 public function index()
    {
        return view('input');
    }
}

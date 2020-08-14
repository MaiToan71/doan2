<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HethongController extends Controller
{
    public function index()
    {
        return view('back_end.contents.hethong.he_thong');
    }
    
}

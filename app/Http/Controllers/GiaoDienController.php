<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoDienController extends Controller
{
    public function index()
    {
        return view('front_end.contents.index');
    } 
}

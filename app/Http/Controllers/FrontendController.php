<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
      
        return view('front_end.contents.trangchu.hienxe');
    }
    
}

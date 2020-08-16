<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FrontendXeController extends Controller
{
    public function index()
    {
        $list_data = DB::table('xes')->where('TrangThai',true)->get();
        return view('front_end.contents.xe.index',compact('list_data'));
    }
    
}

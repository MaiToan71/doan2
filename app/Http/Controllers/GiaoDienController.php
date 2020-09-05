<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GiaoDienController extends Controller
{
    public function index()
    {
        $ds_xe = DB::table('xes')->where('TrangThai',true)->paginate(4);
        $ds_hang_xe = DB::table('hang_xes')->get();
        return view('front_end.contents.index',compact('ds_xe','ds_hang_xe'));
    } 
}

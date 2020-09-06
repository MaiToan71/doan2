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
        $list_loai_xe= DB::table('loai_xes')->get();
        $list_hang_xe = DB::table('hang_xes')->get();
        return view('front_end.contents.index',compact('ds_xe','list_loai_xe','list_hang_xe','ds_hang_xe'));
    } 
    public function TimKiemXe(Request $request)
    {
        $list_loai_xe= DB::table('loai_xes')->get();
        $ds_hang_xe = DB::table('hang_xes')->get();
     //   dd($request->hangxe);
        $ds_xe= DB::table('xes')->where('loaixe_id','like', "%$request->loaixe%")->where('hangxe_id','like', "%$request->hangxe%")->where('TenXe','like', "%$request->tenxe%")->get();
        return view('front_end.contents.timkiem.index',compact('ds_xe','ds_hang_xe','list_loai_xe','list_hang_xe'));
    }
}

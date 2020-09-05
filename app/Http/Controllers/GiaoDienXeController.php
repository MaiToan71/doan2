<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiaoDienXeController extends Controller
{
    public function Xes()
    {
    
        $ds_xe = DB::table('xes')->where('TrangThai',true)->paginate(4);
        $ds_hang_xe = DB::table('hang_xes')->get();
        return view('front_end.contents.danhsachxe.index',compact('ds_xe','ds_hang_xe'));
    }
    public function ThongTinChiTiet($xe_id)
    {
        $loai_xe = DB::table('loai_xes')->where('TrangThai',true)->paginate(1);
        $ds_hang_xe = DB::table('hang_xes')->get();
        $info = DB::table('xes')->where('xe_id', $xe_id)->get();
        $hopdong = DB::table('hop_dongs')->where('TrangThai', true)->get();
        return view('front_end.contents.danhsachxe.thongTinChiTietXe',compact('info','loai_xe','ds_hang_xe','hopdong'));
    }
    
}
?>
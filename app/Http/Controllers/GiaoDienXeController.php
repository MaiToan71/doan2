<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiaoDienXeController extends Controller
{
    public function Xes()
    {
        // $ds_xe = DB::select(DB::raw(
        //     "
        //     SELECT 
        //     xes.TenXe, hang_xes.TenHangXe,loai_xes.SoCho, xes.HinhAnh , xes.xe_id, xes.GiaThue
        //     FROM xes
        //     JOIN hang_xes ON xes.hangxe_id = hang_xes.hangxe_id 
        //     JOIN loai_xes ON xes.loaixe_id = loai_xes.loaixe_id 
        //     "
        // ));
        $ds_xe = DB::table('xes')->where('TrangThai',true)->paginate(1);
        $ds_hang_xe = DB::table('hang_xes')->get();
        return view('front_end.contents.danhsachxe.index',compact('ds_xe','ds_hang_xe'));
    }
}
?>
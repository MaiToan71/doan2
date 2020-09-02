<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\hop_dong;


class GiaoDienFormDatXeController extends Controller
{
    public function FormDatXe(){
        return view('front_end.contents.formdatxe.index');
    }
    public function ThucHienDatXe(Request $request )
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $datXe = hop_dong::create([
            'khachhang_id'=>$request->khachhang_id,
            'ThoiGianDatTruoc'=>date('Y-m-d h:i',strtotime($request->ThoiGianDatTruoc)),
            'CapNhatNgay'=> date("Y-m-d h:i:s"),
            'ThoiGianNhanXe'=> date('Y-m-d h:i',strtotime($request->ThoiGianNhanXe)),
            'ThoiGianTraXe'=> date('Y-m-d h:i',strtotime($request->ThoiGianTraXe))
        ]);
       // dd($request->ThoiGianTraXe);
        //dd($datXe);
        DB::commit();
        return redirect()->route('Giaodien.FormDatXe');
    }
}

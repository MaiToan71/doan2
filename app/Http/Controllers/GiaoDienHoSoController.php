<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\khach_hang;
use Illuminate\Support\Facades\DB;

class GiaoDienHoSoController extends Controller
{
    public function ThongTinCaNhan()
    {
        return view('front_end.contents.thongtinkhachhang.index');
    }
    public function ThongTinCaNhanCuaBan(request $request)
    {
        $khachhang_id = $request->khachhang_id;
        $thongtin = khach_hang::where('khachhang_id', $khachhang_id)-> get();
        
    }
}

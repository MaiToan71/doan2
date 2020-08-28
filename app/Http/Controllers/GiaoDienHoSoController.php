<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoDienHoSoController extends Controller
{
    public function ThongTinCaNhan()
    {
        return view('front_end.contents.thongtinkhachhang.index');
    }
}

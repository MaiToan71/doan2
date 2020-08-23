<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoDienTimKiemController extends Controller
{
    public function TimKiem()
    {
        return view('front_end.contents.timkiem.index');
    }
    public function DanhSachXe()
    {
        return view('front_end.contents.danhsachxe.index');
    }
}

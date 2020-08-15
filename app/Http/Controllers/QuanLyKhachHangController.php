<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanLyKhachHangController extends Controller
{
    public function index()
    {
        return view('back_end.contents.quanlykhachhang.danhsachkhachhang.index');
    }
}

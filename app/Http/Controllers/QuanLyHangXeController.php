<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanLyHangXeController extends Controller
{
    public function index(){
        return view('back_end.contents.quanlythongtinxe.quanlyhangxe.index');
    }
}

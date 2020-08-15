<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DanhSachHopDongController extends Controller
{
    public function index()
    {
        $danhsach = DB::table('hop_dongs')->where('TrangThai','true')->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.index', compact('hopdong'));
    }
}

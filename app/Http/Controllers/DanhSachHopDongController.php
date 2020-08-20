<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DanhSachHopDongController extends Controller
{
    public function index()
    {
        $danhsach_hd = DB::table('hop_dongs')->where('TrangThai',true)->where('Duyet',1)->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.index', compact('danhsach_hd'));
    }

    public function thongtinsua()
    {
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.thongtinsua');
    }

    public function DuyetLanMot(Request $request, $hopdong_id)
    {
        try{
            DB::beginTransaction();
            $duyet1 = DB::table('hop_dongs')->where('hopdong_id', $hopdong_id)->update(['Duyet' => 2]);
            DB::commit();
            return redirect()->route('QuanLyHopDong.hienthilanmot');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    public function hienthilanmot()
    {
        $duyetlanmot = DB::table('hop_dongs')->where('TrangThai',true)->where('Duyet',2)->orWhere('Duyet',3)->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.duyet_lan_mot', compact('duyetlanmot'));
    }
    public function hopdongxog()
    {
        $xog = DB::table('hop_dongs')->where('TrangThai',true)->where('Duyet',4)->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.hop_dong_done', compact('xog'));
    }
    public function vipham(Request $request, $hopdong_id)
    {
        {
            try{
                DB::beginTransaction();
                $vipham = DB::table('hop_dongs')->where('hopdong_id', $hopdong_id)->update(['Duyet' => 3]);
                DB::commit();
                return redirect()->route('QuanLyHopDong.hienthilanmot');
            }catch(Expception $e)
            {
                DB::rollBack();
            }
        }
    }
    public function ketthuc(Request $request, $hopdong_id)
    {
        {
            try{
                DB::beginTransaction();
                $ketthuc = DB::table('hop_dongs')->where('hopdong_id', $hopdong_id)->update(['Duyet' => 4]);
                DB::commit();
                return redirect()->route('QuanLyHopDong.hopdongxog');
            }catch(Expception $e)
            {
                DB::rollBack();
            }
        }
    }

    public function formvipham( $hopdong_id)
    {
        {
            try{
                DB::beginTransaction();
                $HopDongViPham = DB::table('hop_dongs')->where('hopdong_id', $hopdong_id)->get();
        
                return view('back_end.contents.quanlyhopdong.danhsachhopdong.Form_them_vipham', compact('HopDongViPham'));
            }catch(Expception $e)
            {
                DB::rollBack();
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\khach_hang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GiaoDienDangKyController extends Controller
{
    public function DangKy(){
        return view('front_end.dangky.dangky');
    }
    public function ThucHienDangKy(Request $request){
        try{         
            DB::beginTransaction();
            $dangky=khach_hang::create([
                    'Ten' => $request->Ten,
                    'SoDienThoai' => $request->SoDienThoai,
                    'NgaySinh' => $request->NgaySinh,                   
                    'DiaChi' => $request->DiaChi,
                    'Email' => $request->Email,
                    'MatKhau' =>md5($request->MatKhau),
                ]);
                
            DB::commit();
            return redirect()->route('DangNhap');
        }catch(Exception $e)
        {
                DB::rollBack();
        }
    }
    public function DangNhap(){
        return view('front_end.dangky.dangnhap');
    }
    public function ThucHienDangNhap(Request $request){
        $Email = $request->Email;
        $MatKhau = md5($request->MatKhau);
        
        $request->session()->put('Email',$request->input());      
        $result = DB::table('khach_hangs')->where('Email',$Email)->where('TrangThai',true)->get()->toArray();
        if($result != null){
        foreach($result as $value)
        {}
       
        $request->session()->put('khachhang_id',$value->khachhang_id); 
        if($value->MatKhau== $MatKhau){          
            return redirect()->route('index');
        }else{
            dd('false');
        }
    }else{
        dd('false');
    }
    }
    public function logout(){
        session()->forget('Email');
        session()->forget('khachhang_id');
        return redirect()->route('index');
    }
}

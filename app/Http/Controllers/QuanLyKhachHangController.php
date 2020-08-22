<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanLyKhachHangController extends Controller
{
    public function index()
    {
        $list_cust = DB::table('khach_hangs')->where('TrangThai',true)->where('TrangThai',1)->get();
        return view('back_end.contents.quanlykhachhang.danhsachkhachhang.index',compact('list_cust'));
    }
    public function sua($khachhang_id)
    {
        $list_cust = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->get();
        return view('back_end.contents.quanlykhachhang.danhsachkhachhang.sua',compact('list_cust'));
    } 
    public function ThucHienSua(Request $request, $khachhang_id){
        try{
            DB::beginTransaction();
            if(!$request->hasFile('GiayPhepLaiXe') && !$request->hasFile('CMND')&& !$request->hasFile('HoKhau'))
            {
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    ]);
            }else if($request->hasFile('GiayPhepLaiXe') && !$request->hasFile('CMND')&& !$request->hasFile('HoKhau'))
            {
                $GiayPhepLaiXe = $request->GiayPhepLaiXe;   
                $GiayPhepLaiXe->move('imgs', $GiayPhepLaiXe->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'GiayPhepLaiXe'=>$GiayPhepLaiXe->getClientOriginalName()
                    ]);
            }else if($request->hasFile('GiayPhepLaiXe') && $request->hasFile('CMND')&& !$request->hasFile('HoKhau'))
            {
                $GiayPhepLaiXe = $request->GiayPhepLaiXe;   
                $GiayPhepLaiXe->move('imgs', $GiayPhepLaiXe->getClientOriginalName());
                $CMND = $request->CMND;   
                $CMND->move('imgs', $CMND->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'GiayPhepLaiXe'=>$GiayPhepLaiXe->getClientOriginalName(),
                    'CMND'=>$CMND->getClientOriginalName()
                    ]);
            }else if($request->hasFile('GiayPhepLaiXe') && !$request->hasFile('CMND')&& $request->hasFile('HoKhau'))
            {
                $CMND = $request->CMND;   
                $CMND->move('imgs', $CMND->getClientOriginalName());
                $HoKhau = $request->HoKhau;   
                $HoKhau->move('imgs', $HoKhau->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'GiayPhepLaiXe'=>$GiayPhepLaiXe->getClientOriginalName(),
                    'HoKhau'=>$HoKhau->getClientOriginalName()
                    ]);
            }else if(!$request->hasFile('GiayPhepLaiXe') && $request->hasFile('CMND')&& $request->hasFile('HoKhau'))
            {
                $CMND = $request->CMND;   
                $CMND->move('imgs', $CMND->getClientOriginalName());
                $HoKhau = $request->HoKhau;   
                $HoKhau->move('imgs', $HoKhau->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'CMND'=>$CMND->getClientOriginalName(),
                    'HoKhau'=>$HoKhau->getClientOriginalName()
                    ]);
            }else if(!$request->hasFile('GiayPhepLaiXe') && $request->hasFile('CMND')&& !$request->hasFile('HoKhau'))
            {
                $CMND = $request->CMND;   
                $CMND->move('imgs', $CMND->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'CMND'=>$CMND->getClientOriginalName()                    ]);
            }else if(!$request->hasFile('GiayPhepLaiXe') && !$request->hasFile('CMND')&& $request->hasFile('HoKhau'))
            {
                $HoKhau = $request->HoKhau;   
                $HoKhau->move('imgs', $HoKhau->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'HoKhau'=>$HoKhau->getClientOriginalName()
                    ]);
            }else{
                $GiayPhepLaiXe = $request->GiayPhepLaiXe;   
                $GiayPhepLaiXe->move('imgs', $GiayPhepLaiXe->getClientOriginalName());
                $CMND = $request->CMND;   
                $CMND->move('imgs', $CMND->getClientOriginalName());
                $HoKhau = $request->HoKhau;   
                $HoKhau->move('imgs', $HoKhau->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>$request->MatKhau,
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                    'GiayPhepLaiXe'=>$GiayPhepLaiXe->getClientOriginalName(),
                    'CMND'=>$CMND->getClientOriginalName(),
                    'HoKhau'=>$HoKhau->getClientOriginalName()
                    ]);
            }
            
            DB::commit();
            return redirect()->route('QuanLyKhachHang.index');
        }catch(Exception $e){
            DB::rollBack();
        }
    }
    public function chitiet($khachhang_id)
    {
        $list_cust = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->get();
        return view('back_end.contents.quanlykhachhang.danhsachkhachhang.chitiet',compact('list_cust'));
    }
    public function xoa(Request $request, $khachhang_id)
    {
        try{
            DB::beginTransaction();
            $xoa = DB::table('khach_hangs')->where('khachhang_id', $khachhang_id)->update(['TrangThai' => false]);
            DB::commit();
            return redirect()->route('QuanLyKhachHang.index');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    public function TimKiem(Request $request)
    {
      ///  $list_cust = DB::table('khach_hangs')->where('TrangThai',true)->get();   

        $timkiem= DB::table('khach_hangs')->where('Ten','like', "%$request->Ten%")->where('SoDienThoai','like', "%$request->SoDienThoai%")->where('Email','like', "%$request->Email%")->where('TrangThai',true)->get();
         
        return view('back_end.contents.quanlykhachhang.danhsachkhachhang.timkiem',compact('timkiem'));
        //compact('timkiem1','timkiem2','timkiem3','timkiem4','timkiem5','timkiem6','timkiem7','timkiem8','list_hang_xe','list_loai_xe')) ;                             
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\khach_hang;
use Illuminate\Support\Facades\DB;
use Session;

class GiaoDienHoSoController extends Controller
{
    public function ThongTinCaNhan()
    {
        $khachhang_id = session()->get('khachhang_id');
        $thongtin = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->get();
        
        return view('front_end.contents.thongtinkhachhang.index',compact('thongtin'));
    }
    public function ThongTinCaNhanCuaBan(Request $request){
        try{
            $khachhang_id = session()->get('khachhang_id');
            DB::beginTransaction();
            
            if(!$request->hasFile('GiayPhepLaiXe') && !$request->hasFile('CMND')&& !$request->hasFile('HoKhau'))
            {
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>md5($request->MatKhau),
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
                    'MatKhau'=>md5($request->MatKhau),
                    'DiaChi'=>$request->DiaChi,    
                    'SoDienThoai'=>$request->SoDienThoai,    
                    'NgaySinh'=>$request->NgaySinh,    
                    'GioiTinh'=>$request->GioiTinh,
                   
                    'GiayPhepLaiXe'=>$GiayPhepLaiXe->getClientOriginalName(),
                    'CMND'=>$CMND->getClientOriginalName()
                    ]);
            }else if($request->hasFile('GiayPhepLaiXe') && !$request->hasFile('CMND')&& $request->hasFile('HoKhau'))
            {
                $GiayPhepLaiXe = $request->GiayPhepLaiXe;   
                $GiayPhepLaiXe->move('imgs', $GiayPhepLaiXe->getClientOriginalName());
                $HoKhau = $request->HoKhau;   
                $HoKhau->move('imgs', $HoKhau->getClientOriginalName());
                $thuchiensua = DB::table('khach_hangs')->where('khachhang_id',$khachhang_id)->update([
                    'Ten'=>$request->Ten,
                    'Email'=>$request->Email,    
                    'MatKhau'=>md5($request->MatKhau),
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
            return redirect()->route('Giaodien.ThongTinCaNhan');
        }catch(Exception $e){
            DB::rollBack();
        }
    }
    public function LichSu(){
        $khachhang_id = session()->get('khachhang_id');
        $thongtin = DB::table('hop_dongs')->where('khachhang_id',$khachhang_id)->get();
        return view('front_end.contents.thongtinkhachhang.lichsu', compact('thongtin'));
    }
}

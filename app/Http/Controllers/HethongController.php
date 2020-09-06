<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
class HethongController extends Controller
{
    private $admin;
    public function __construct(admin $admin)
    {
        $this->admin=$admin;
    }
    public function index()
    {
        $list_dat1a = DB::table('admins')->where('TrangThai',true)->orderBy('admin_id','DESC')->paginate(5);
        
        return view('back_end.contents.hethong.he_thong', compact('list_dat1a'));
    }
    public function themmoi()
    {
        return view('back_end.contents.hethong.themmoi');
    }
    public function Them(Request $request)
    {      
        try{         
            DB::beginTransaction();
            $admin = $this->admin->create([
                    'email' => $request->email,
                    'MatKhau' =>md5($request->matkhau),
                    'HoTen' => $request->hoten,
                    'SoDienThoai' => $request->sodienthoai,
                    'NgaySinh' => $request->ngaysinh,
                    'GioiTinh' => $request->gioitinh,
                    'DiaChi' => $request->diachi,
                    'Quyen' => $request->quyen,                 
                ]);
            DB::commit();
            return redirect()->route('Hethong.index');
        }catch(Exception $e)
        {
                DB::rollBack();
        }
    }
    public function thongtinsua($admin_id)
    {
        $listdata = DB::table('admins')->where('admin_id',$admin_id)->get();
        return view('back_end.contents.hethong.sua', compact('listdata'));
    }
        
    public function sua(Request $request, $admin_id)
    {
        try{
            DB::beginTransaction();
            $sua_admin = DB::table('admins')->where('admin_id',$admin_id)->update([
                    'email' => $request->email,
                    'MatKhau' =>md5($request->matkhau),
                    'HoTen' => $request->hoten,
                    'SoDienThoai' => $request->sodienthoai,
                    'NgaySinh' => $request->ngaysinh,
                    'GioiTinh' => $request->gioitinh,
                    'DiaChi' => $request->diachi,
                    'Quyen' => $request->quyen,                 
                
                ]);
                DB::commit();
                return redirect()->route('Hethong.index');
        }catch(Exception $e){
            DB::rollBack();
        }
    }
    public function Xoa(Request $request, $admin_id)
    {
        try{
            DB::beginTransaction();
            $xoa = DB::table('admins')->where('admin_id', $admin_id)->update(['TrangThai' => false]);
            DB::commit();
            return redirect()->route('Hethong.index');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    public function TimKiem(Request $request)
    {
        $data_timkiem= DB::table('admins')->where('HoTen','like', "%$request->hoten%")->where('TrangThai',true)->get();
        return view('back_end.contents.hethong.timkiem', compact('data_timkiem'));
    }
    public function ChinhSua()
    {
        $list_data = DB::table('admins')->get();
        return view('back_end.contents.hethong.chinhsua',compact('list_data'));
    }
    
    public function ThucHienChinhSua(Request $request)
    {
        try{
            DB::beginTransaction();
            $sua_admin = DB::table('admins')->where('admin_id',$request->admin_id)->update([
                    'email' => $request->email,
                    'MatKhau' =>md5($request->matkhau),
                    'HoTen' => $request->hoten,
                    'SoDienThoai' => $request->sodienthoai,
                    'NgaySinh' => $request->ngaysinh,
                    'GioiTinh' => $request->gioitinh,
                    'DiaChi' => $request->diachi,                                                 
                ]);
                DB::commit();
                return redirect()->route('Hethong.ChinhSua');
        }catch(Exception $e){
            DB::rollBack();
        }
    }
}

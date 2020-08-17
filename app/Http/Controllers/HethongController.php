<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;
class HethongController extends Controller
{
    private $admin;
    public function __construct(admin $admin)
    {
        $this->admin=$admin;
    }
    public function index()
    {
        $list_dat1a = DB::table('admins')->where('TrangThai',true)->paginate(1);
        
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
                    'MatKhau' =>Hash::make($request->matkhau),
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
        
    
    
}

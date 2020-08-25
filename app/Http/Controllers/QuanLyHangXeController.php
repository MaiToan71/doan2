<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\hang_xe;


class QuanLyHangXeController extends Controller
{
    private $hang_xe;
    public function __construct(hang_xe $hang_xe)
    {
        $this->hang_xe=$hang_xe;
    }
    public function index(){
        try{
            DB::beginTransaction();
            $list_data1 = DB::table('hang_xes')-> where ('TrangThai', true)->orderBy('hangxe_id','DESC')->paginate(5);
            return view('back_end.contents.quanlythongtinxe.quanlyhangxe.index', compact('list_data1'));
        }catch(Exception $e){
            DB::rollBack();
        }

    }

    public function Them(Request $request)
    {
        try{         
            DB::beginTransaction();
            $hang_xe = $this->hang_xe->create([
                'TenHangXe' => $request->TenHang,
                'QuocGia' => $request->QuocGia
            ]);
            DB::commit();
            return redirect()->route('QuanLyHangXe.index');
        }catch(Exception $e)
        {
            DB::rollBack();
        }
    }
    public function Thongtinsua(Request $request, $hangxe_id){
        try{
            DB::beginTransaction();
            $list_data = DB::table('hang_xes')-> where ('hangxe_id', $hangxe_id)-> get();
            return view('back_end.contents.quanlythongtinxe.quanlyhangxe.sua',compact('list_data'));
        }catch(Exception $e){
            DB::rollBack();
        }

    }
    public function Sua(Request $request, $hangxe_id){
        try{
            DB::beginTransaction();
            $thuchien_sua = DB::table('hang_xes')->where('hangxe_id',$hangxe_id)->update([
                'TenHangXe'=>$request->TenHang,
                'QuocGia'=>$request->QuocGia,                  
                
                ]);
                DB::commit();
            return redirect()->route('QuanLyHangXe.index');
        }catch(Exception $e){
            DB::rollBack();
        }

    }
   
    public function Xoa(Request $request, $hangxe_id)
    {
        try{
            DB::beginTransaction();
            $xoa = DB::table('hang_xes')->where('hangxe_id', $hangxe_id)->update(['TrangThai' => false]);
            DB::commit();
            return redirect()->route('QuanLyHangXe.index');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    

}

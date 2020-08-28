<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\xe;
use App\hang_xe;
use Illuminate\Http\Request;

class QuanLyXeController extends Controller
{
    private $xe;
    private $hang_xe;
    public function __construct(xe $xe, hang_xe $hang_xe)
    {
        $this->xe=$xe;
        $this->hang_xe=$hang_xe;
    }
    public function index(Request $request){
        try{
            DB::beginTransaction();                                             
            $list_data = DB::table('xes')->where('TrangThai',true)->orderBy('xe_id','DESC')->paginate(5);
            $list_hang_xe = DB::table('hang_xes')->where('TrangThai',true)->get();
            $list_loai_xe = DB::table('loai_xes')->where('TrangThai',true)->get();
            return view('back_end.contents.quanlythongtinxe.quanlyxe.index', compact('list_data','list_hang_xe','list_loai_xe'));
        }
        catch(Exception $e)
        {
            DB:rollback();
        }    
    }
    public function ThemMoi()
    {       
        $list_hang_xe = DB::table('hang_xes')->where('TrangThai',true)->get();
        $list_loai_xe = DB::table('loai_xes')->where('TrangThai',true)->get();
        return view('back_end.contents.quanlythongtinxe.quanlyxe.themmoi', compact('list_hang_xe','list_loai_xe'));
    }
    
    public function ThucHienThem(Request $request)
    {
        try{
            DB::beginTransaction();
            if($request->hasFile('hinhanh') && $request->hasFile('giaytoxe'))
            {
                $file_hinhanh = $request->file('hinhanh');
                $file_hinhanh->move('imgs', $file_hinhanh->getClientOriginalName());
                $file_giaytoxe = $request->file('giaytoxe');
                $file_giaytoxe->move('imgs', $file_giaytoxe->getClientOriginalName()); 
            $them_xe = $this->xe->create([
                'hangxe_id'=>$request->hangxe,
                'loaixe_id'=>$request->loaixe,
                'HinhAnh'=>$file_hinhanh->getClientOriginalName(),
                'TenXe'=>$request->tenxe,
                'NamSanXuat'=>$request->namsanxuat,
                'NhienLieu'=>$request->nhienlieu,
                'DungTich'=>$request->dungtich,
                'GiayToXe'=>$file_giaytoxe->getClientOriginalName(),
                
                'MoTa'=>$request->mota,
                'GiaThue'=>$request->giathue,
                'UuDai'=>$request->uudai,

            ]);

            }
            $list_data = DB::table('xes')->where('TrangThai',true)->get();
            $list_hang_xe = DB::table('hang_xes')->where('TrangThai',true)->get();
            $list_loai_xe = DB::table('loai_xes')->where('TrangThai',true)->get();
            DB::commit();
            return redirect()->route('QuanLyXe.index');
            //return view('back_end.contents.quanlythongtinxe.quanlyxe.index',compact('list_data','list_hang_xe','list_loai_xe'));
        }
        catch(Exception $e)
        {
            DB:rollback();
        }
    }
    public function Xoa(Request $request, $xe_id)
    {
        try{
            DB::beginTransaction();
            $xoa = DB::table('xes')->where('xe_id', $xe_id)->update(['TrangThai' => false]);
            DB::commit();
            return redirect()->route('QuanLyXe.index');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    public function Sua(Request $request, $xe_id)
    {
        try{         
            DB::beginTransaction(); 
            $thongtin = DB::table('xes')->where('xe_id',$xe_id)->get(); 
            $list_hang_xe = DB::table('hang_xes')->where('TrangThai',true)->get();
            $list_loai_xe = DB::table('loai_xes')->where('TrangThai',true)->get();       
            return view('back_end.contents.quanlythongtinxe.quanlyxe.sua',compact('thongtin','list_hang_xe','list_loai_xe'));
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    public function ThucHienSua(Request $request, $xe_id)
    {
        try
        {
            DB::beginTransaction();
            if(!$request->hasFile('hinhanh') && !$request->hasFile('giaytoxe'))
            {
                $thuchien_sua = DB::table('xes')->where('xe_id',$xe_id)->update([
                    'hangxe_id'=>$request->hangxe,
                    'loaixe_id'=>$request->loaixe,                   
                    'TenXe'=>$request->tenxe,
                    'NamSanXuat'=>$request->namsanxuat,
                    'NhienLieu'=>$request->nhienlieu,
                    'DungTich'=>$request->dungtich,                   
                   
                    'MoTa'=>$request->mota,
                    'GiaThue'=>$request->giathue,
                    'UuDai'=>$request->uudai,
                    'TrangThaiXe'=>$request->TrangThaiXe
                    ]);
            }else if ($request->hasFile('hinhanh')){                
                $file_hinhanh1 = $request->hinhanh;     
                //dd($file_hinhanh1);         
                $file_hinhanh1->move('imgs', $file_hinhanh1->getClientOriginalName());               
                //$file_giaytoxe1 = $request->file('giaytoxe');
                //$file_giaytoxe1->move('imgs', $file_giaytoxe1->getClientOriginalName());                 
                $thuchien_sua = DB::table('xes')->where('xe_id',$xe_id)->update([
                    'hangxe_id'=>$request->hangxe,
                    'loaixe_id'=>$request->loaixe,
                    'HinhAnh'=>$file_hinhanh1->getClientOriginalName(),
                    'TenXe'=>$request->tenxe,
                    'NamSanXuat'=>$request->namsanxuat,
                    'NhienLieu'=>$request->nhienlieu,
                    'DungTich'=>$request->dungtich,
                  //  'GiayToXe'=>$file_giaytoxe1->getClientOriginalName(),
                   
                    'MoTa'=>$request->mota,
                    'GiaThue'=>$request->giathue,
                    'UuDai'=>$request->uudai,
                    'TrangThaiXe'=>$request->TrangThaiXe
                    ]);
            }else{
                //$file_hinhanh1 = $request->hinhanh;     
                //dd($file_hinhanh1);         
              //  $file_hinhanh1->move('imgs', $file_hinhanh1->getClientOriginalName());               
                $file_giaytoxe1 = $request->file('giaytoxe');
                $file_giaytoxe1->move('imgs', $file_giaytoxe1->getClientOriginalName());                 
                $thuchien_sua = DB::table('xes')->where('xe_id',$xe_id)->update([
                    'hangxe_id'=>$request->hangxe,
                    'loaixe_id'=>$request->loaixe,
                  //  'HinhAnh'=>$file_hinhanh1->getClientOriginalName(),
                    'TenXe'=>$request->tenxe,
                    'NamSanXuat'=>$request->namsanxuat,
                    'NhienLieu'=>$request->nhienlieu,
                    'DungTich'=>$request->dungtich,
                    'GiayToXe'=>$file_giaytoxe1->getClientOriginalName(),
                  
                    'MoTa'=>$request->mota,
                    'GiaThue'=>$request->giathue,
                    'UuDai'=>$request->uudai,
                    'TrangThaiXe'=>$request->TrangThaiXe
                    ]);
            }
            DB::commit();
            return redirect()->route('QuanLyXe.index');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    public function TimKiem(Request $request)
    {
        $list_hang_xe = DB::table('hang_xes')->where('TrangThai',true)->get();
        $list_loai_xe = DB::table('loai_xes')->where('TrangThai',true)->get(); 
       

        $timkiem= DB::table('xes')->where('loaixe_id','like', "%$request->loaixe%")->where('hangxe_id','like', "%$request->hangxe%")->where('TenXe','like', "%$request->tenxe%")->where('TrangThai',true)->get();
         
       
        return view('back_end.contents.quanlythongtinxe.quanlyxe.timkiem',compact('timkiem','list_hang_xe','list_loai_xe'));
        //compact('timkiem1','timkiem2','timkiem3','timkiem4','timkiem5','timkiem6','timkiem7','timkiem8','list_hang_xe','list_loai_xe')) ;                             
    }
}

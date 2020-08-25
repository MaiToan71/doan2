<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\xe;
use App\hop_dong;
use App\chi_tiet_hop_dong;
class DanhSachHopDongController extends Controller
{
    private $xe;
    private $chiTiet;
    private $hopDong;
    public function __construct(chi_tiet_hop_dong $chiTiet, hop_dong $hopDong,Xe $xe)
    {
        $this->xe=$xe;
        $this->chiTiet=$chiTiet;
        $this->hopDong=$hopDong;
    }
    public function index()
    {
        $danhsach_hd = DB::table('hop_dongs')->where('TrangThai',true)->orderBy('hopdong_id','DESC')->where('Duyet',1)->get();
        $Tens = DB::table('khach_hangs')->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.index', compact('danhsach_hd','Tens'));
    }
    public function ChiTiet($hopdong_id)
    {
        $danhsach_hd = DB::select(DB::raw(
            "
            SELECT hop_dongs.hopdong_id,hop_dongs.TenHopDong, hop_dongs.FileHopDong, hop_dongs.LoiViPham, hop_dongs.TienTheChap,hop_dongs.ThoiGianNhanXe, hop_dongs.ThoiGianTraXe, hop_dongs.TienQuaHan, hop_dongs.Duyet, khach_hangs.Ten, khach_hangs.DiaChi, chi_tiet_hop_dongs.SoLuong ,xes.TenXe,xes.xe_id, loai_xes.SoCho ,hang_xes.TenHangXe
            FROM hop_dongs 
            JOIN khach_hangs ON khach_hangs.khachhang_id=hop_dongs.khachhang_id 
            JOIN chi_tiet_hop_dongs ON hop_dongs.hopdong_id = chi_tiet_hop_dongs.hopdong_id 
            JOIN xes ON chi_tiet_hop_dongs.xe_id = xes.xe_id 
            JOIN loai_xes ON loai_xes.loaixe_id = xes.loaixe_id 
            JOIN hang_xes ON hang_xes.hangxe_id = xes.hangxe_id 
            WHERE hop_dongs.hopdong_id=$hopdong_id
            "
        ));
        //dd($danhsach_hd);
       
  //  $ = DB::table('hop_dongs')->where('hopdong_id',$hopdong_id)->get();
        $Tens = DB::table('khach_hangs')->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.chi_tiet', compact('danhsach_hd','Tens'));
    }

    public function thongtinsua($hopdong_id)
    {
        $data = DB::table('hop_dongs')->where('hopdong_id',$hopdong_id)->get();
        $names = DB::table('khach_hangs')->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.thongtinsua',compact('hopdong_id','data','names'));
    }
    public function thuchiensua(Request $request,$hopdong_id)
    {
        DB::beginTransaction();
        if(!$request->hasFile('filehopdong') )
        {
            $thuchien_sua = DB::table('hop_dongs')->where('hopdong_id',$hopdong_id)->update([               
                'TenHopDong'=>$request->tenhopdong,                         
                'TienTheChap'=>$request->tienthechap,
                'ThoiGianNhanXe'=>$request->batdau,
                'ThoiGianTraXe'=>$request->ketthuc,
                
                ]);
        }       
        else{
            $file_hopdong = $request->filehopdong;     
            //dd($file_hinhanh1);         
            $file_hopdong->move('imgs', $file_hopdong->getClientOriginalName());               
                             
            $thuchien_sua = DB::table('hop_dongs')->where('hopdong_id',$hopdong_id)->update([
                
                'TenHopDong'=>$request->tenhopdong,           
                'FileHopDong'=>$file_hopdong->getClientOriginalName(),
                'TienTheChap'=>$request->tienthechap,
                'ThoiGianNhanXe'=>$request->batdau,
                'ThoiGianTraXe'=>$request->ketthuc,
                
                ]);
        }
         DB::commit();
        return redirect()->route('QuanLyHopDong.index');
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
        $Tens = DB::table('khach_hangs')->get();
        $duyetlanmot = DB::table('hop_dongs')->orderBy('hopdong_id','DESC')->where('TrangThai',true)->where('Duyet',2)->orWhere('Duyet',3)->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.duyet_lan_mot', compact('duyetlanmot','Tens'));
    }
    public function hopdongxog()
    {
        $Tens = DB::table('khach_hangs')->get();
        $xog = DB::table('hop_dongs')->orderBy('hopdong_id','DESC')->where('TrangThai',true)->where('Duyet',4)->get();
        return view('back_end.contents.quanlyhopdong.hopdongdaduyet.hop_dong_done', compact('xog','Tens'));
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
        
            try{
                DB::beginTransaction();
                $HopDongViPham = DB::table('hop_dongs')->where('hopdong_id', $hopdong_id)->get();
               // $tienTheChap = DB::table('hop_dongs')->where('hopdong_id', $hopdong_id)->get();
               
                return view('back_end.contents.quanlyhopdong.hopdongchoduyet.Form_them_vipham', compact('HopDongViPham'));
            }catch(Expception $e)
            {
                DB::rollBack();
            }
        
    }
    public function ghiLaiViPham(Request $request, $hopdong_id)
    {
       
        $ghiLaiViPham = DB::table('hop_dongs')->where('hopdong_id',$hopdong_id)->update([               
            'TienQuaHan'=>$request->quahan,                         
            'LoiViPham'=>$request->MoTaLoi,
            ]);
        DB::commit();
        return redirect()->route('QuanLyHopDong.hienthilanmot');
        
    }
 
    public function TimKiem(Request $request)
    {
        
        $Tens = DB::table('khach_hangs')->get();
        $timkiem= DB::table('hop_dongs')->where('hopdong_id','like', "%$request->mahopdong%")->where('TrangThai',true)->get();
       //  dd('timkiem');
       
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.tim_kiem',compact('timkiem','Tens'));
        //compact('timkiem1','timkiem2','timkiem3','timkiem4','timkiem5','timkiem6','timkiem7','timkiem8','list_hang_xe','list_loai_xe')) ;                             
    }
    public function ThemHopDong()
    {
        $dsKhachHang = DB::table('khach_hangs')->where('TrangThai',true)->get();
        $dsXe = DB::table('xes')->where('TrangThai',true)->get();
        $dsLoaiXe = DB::table('loai_xes')->where('TrangThai',true)->get();
        $dsHangXe = DB::table('hang_xes')->where('TrangThai',true)->get();
        return view('back_end.contents.quanlyhopdong.danhsachhopdong.themmoi',compact('dsKhachHang','dsXe','dsLoaiXe','dsHangXe'));
    }
    public function ThucHienThem(Request $request)
    {
       // dd($request->batDauDat);
       // dd($request->tenhopdong);
        try{         
            DB::beginTransaction();
            $hopDong = $this->hopDong->create([
                'TenHopDong' => $request->tenhopdong,
                'khachhang_id' => $request->maKhachHang,
                'TienTheChap' => $request->TienTheChap,
                'ThoiGianNhanXe' => $request->batDauDat,
                'ThoiGianTraXe' => $request->ketThuc
            ]);
               
           
            $chiTiet = chi_tiet_hop_dong::create([
                'hopdong_id' => $hopDong['id'],
                'xe_id' => $request->maXe,
                'SoLuong' => $request->SoLuong
            ]);
         
            DB::commit();
            
            return redirect()->route('QuanLyHopDong.index');
        }catch(Exception $e)
        {
            DB::rollBack();
        }
    }
     
}

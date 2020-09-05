<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\hop_dong;


class GiaoDienFormDatXeController extends Controller
{
    public function FormDatXe($xe_id){
       // dd($xe_id);
        $khachhang_id = session()->get('khachhang_id');
        $rows = DB::table('hop_dongs')->where('xe_id',$xe_id)->get();
        $count =count($rows);
        if($count > 0){
            $max = DB::table('hop_dongs')->where('xe_id',$xe_id)->max('ThoiGianTraXe');        
            $format = date('d-m-Y  h:i',strtotime($max));
            return view('front_end.contents.formdatxe.index', compact ('format','count'));
        }else{
            return view('front_end.contents.formdatxe.index',compact ('count'));
        }
       
    }
    public function ThucHienDatXe(Request $request ,$xe_id)
    {      
       
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $khachhang_id = session()->get('khachhang_id');
        $rows = DB::table('hop_dongs')->where('xe_id',$xe_id)->get();
        $giathue = DB::table('xes')->where('xe_id',$xe_id)->get();
        foreach($giathue as $elm){
        }
        $giathue =$elm->GiaThue - $elm->GiaThue*$elm->UuDai/100;
        $nhanxe = new Carbon( date('Y-m-d h:i:00',strtotime($request->ThoiGianNhanXe)));
            $traxe = new Carbon( date('Y-m-d h:i',strtotime($request->ThoiGianTraXe)));
        $count =count($rows);
        if($count > 0){      
           
            $thoiGianLonNhat =new Carbon(date('Y-m-d h:i:00',strtotime(DB::table('hop_dongs')->where('xe_id',$xe_id)->max('ThoiGianTraXe'))));
            //dd();
            if($nhanxe > $thoiGianLonNhat && $thoiGianLonNhat->diffInSeconds($nhanxe) - 86400*5 <0){
                $datXe = hop_dong::create([
                    'khachhang_id'=>$request->khachhang_id,
                    'xe_id'=>$xe_id,
                    'ThoiGianDatTruoc'=>date('Y-m-d h:i',strtotime($request->ThoiGianDatTruoc)),
                    'CapNhatNgay'=> date("Y-m-d h:i:s"),
                    'ThoiGianNhanXe'=> date('Y-m-d h:i',strtotime($request->ThoiGianNhanXe)),
                    'ThoiGianTraXe'=> date('Y-m-d h:i',strtotime($request->ThoiGianTraXe)),
                    'TongTien'=>round($nhanxe->diffInSeconds($traxe)* $giathue /86400 , 0)
                ]);
                $request->session()->flash('success');
                DB::commit();
                return redirect()->route('Giaodien.FormDatXe',[$xe_id]);
               
    
            }else{
                $request->session()->flash('fail');
                return redirect()->route('Giaodien.FormDatXe',[$xe_id]);
            }
        }else{

            $datXe = hop_dong::create([
                'khachhang_id'=>$request->khachhang_id,
                'xe_id'=>$xe_id,
                'ThoiGianDatTruoc'=>date('Y-m-d h:i',strtotime($request->ThoiGianDatTruoc)),
                'CapNhatNgay'=> date("Y-m-d h:i:s"),
                'ThoiGianNhanXe'=> date('Y-m-d h:i',strtotime($request->ThoiGianNhanXe)),
                'ThoiGianTraXe'=> date('Y-m-d h:i',strtotime($request->ThoiGianTraXe)),
                'TongTien'=>round($nhanxe->diffInSeconds($traxe)* $giathue /86400 , 0)
            ]);
            $request->session()->flash('success');
            DB::commit();
            return redirect()->route('Giaodien.FormDatXe',[$xe_id]);
        }
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\loai_xe;
use Illuminate\Http\Request;

class QuanlyloaixeController extends Controller
{
    
    private $loai_xe;
    public function __construct(loai_xe $loai_xe)
    {
        $this->loai_xe=$loai_xe;
    }
    public function index()
    { 
        try{
            DB::beginTransaction();
            $list_data = DB::table('loai_xes')->where('TrangThai',true)->get();
            return view('back_end.contents.quanlythongtinxe.quanlyloaixe.index', compact('list_data'));
        }catch(Exception $e)
        {
            DB::rollBack();
        }
        
    }
  
    public function Them(Request $request)
    {
        try{         
            DB::beginTransaction();
            $loai_xe = $this->loai_xe->create([
                'SoCho' => $request->SoCho
            ]);
            DB::commit();
            return redirect()->route('QuanLyLoaiXe.index');
        }catch(Exception $e)
        {
            DB::rollBack();
        }
    }
    public function Xoa(Request $request, $loaixe_id)
    {
        try{
            DB::beginTransaction();
            $xoa = DB::table('loai_xes')->where('loaixe_id', $loaixe_id)->update(['TrangThai' => false]);
            DB::commit();
            return redirect()->route('QuanLyLoaiXe.index');
        }catch(Expception $e)
        {
            DB::rollBack();
        }
    }
    
}

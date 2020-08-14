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
    public function index(){
        try{
            DB::beginTransaction();
            $list_data = DB::table('xes')->where('TrangThai',true)->get();
            $list_hang_xe = DB::table('hang_xes')->where('TrangThai',true)->get();
            $list_loai_xe = DB::table('loai_xes')->where('TrangThai',true)->get();
            return view('back_end.contents.quanlythongtinxe.quanlyxe.index', compact('list_data','list_hang_xe','list_loai_xe'));
        }catch(Exception $e)
        {
            DB:rollback();
        }    
    }
    public function ThemMoi()
    {       
        return view('back_end.contents.quanlythongtinxe.quanlyxe.themmoi');

    }
  
}

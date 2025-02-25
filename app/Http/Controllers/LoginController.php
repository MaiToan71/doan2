<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

use App\admin;

class LoginController extends Controller
{
    public function Login(){
        return view('back_end.login.login');
    }
    public function PostLogin(Request $request){
        $email= $request->email;
        $matkhau =md5($request->matkhau);
        $request->session()->put('email',$request->input());      
        $result = DB::table('admins')->where('email',$email)->get()->toArray();
        foreach($result as $value)
        {}
      
        $request->session()->put('quyen',$value->Quyen);
        $request->session()->put('admin_id',$value->admin_id); 
        if($value->MatKhau== $matkhau){
           if($value->TrangThai == true){
            return redirect()->route('QuanLyHopDong.index');
           }else{
            return redirect()->route('Login');
           }
        }else{
            return redirect()->route('Login');
        }
    }
    public function dangxuat(){
        session()->forget('email');
        session()->forget('admin_id');
        return redirect()->route('Login');
    }
    
}

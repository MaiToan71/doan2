<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\admin;

class LoginController extends Controller
{
    public function Login(){
        return view('back_end.login.login');
    }
   
    
}

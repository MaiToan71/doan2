<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiaoDienFormDatXeController extends Controller
{
    public function FormDatXe(){
        return view('front_end.contents.formdatxe.index');
    }
}

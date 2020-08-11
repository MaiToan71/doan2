<?php

namespace App\Http\Controllers;

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
        $list_data = $this->loai_xe->all();
        return view('back_end.contents.quanlythongtinxe.quanlyloaixe.index', compact('list_data'));
    }
}

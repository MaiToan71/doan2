<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrangChuController extends Controller
{
    public function TrangChu()
    {
        
        return view('back_end/contents/index');
    }
    public function data()
    {
        $result = DB::select(DB::raw(
            "
            SELECT 
                hx.TenHangXe,
                COUNT(x.hangxe_id) total
            FROM
                hang_xes hx
            INNER JOIN xes x
            ON
                hx.hangxe_id = x.hangxe_id
            GROUP BY
                hx.TenHangXe
            HAVING COUNT(x.hangxe_id) > 0;
            "
        ));
        return response()->json($result);
    }
}

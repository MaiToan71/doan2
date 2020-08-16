<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hop_dong extends Model
{
    public $timestamps = false;
    protected $fillable = ['khachhang_id', 'TenHopDong','FileHopDong','LoiViPham','HinhAnhLoi','TienTheChap','ThoiGianTheChap','ThoiGianTraXe','TienQuaHan','Duyet','TrangThai'];
}

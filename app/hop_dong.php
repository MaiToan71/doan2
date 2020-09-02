<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hop_dong extends Model
{
    public $timestamps = false;
    protected $fillable = ['khachhang_id', 'loivipham_id','TenHopDong','HinhAnhHopDong','CapNhatNgay','ThoiGianDatTruoc','TienTheChap','ThoiGianNhanXe','ThoiGianTraXe','TienQuaHan','NgayTraThucTe','Duyet','TongTien','TrangThai'];
}

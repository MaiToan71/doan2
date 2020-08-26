<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khach_hang extends Model
{
    public $timestamps = false;
    protected $fillable = ['khachhang_id', 'Ten','Email','MatKhau','SoDienThoai','DiaChi','NgaySinh','GioiTinh','GiayPhepLaiXe','CMND','HoKhau','NgayHen','ThoiGianHen','TrangThai'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public $timestamps = false;
    protected $fillable = ['email', 'MatKhau','HoTen','SoDienThoai','NgaySinh','GioiTinh','DiaChi','Quyen','TrangThai'];
}

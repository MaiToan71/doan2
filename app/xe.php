<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xe extends Model
{
    public $timestamps = false;
    protected $fillable = ['hangxe_id', 'loaixe_id','HinhAnh','TenXe','NamSanXuat','NhienLieu','DungTich','GiayToXe','GioiHanNgay','MoTa','GiaThue','UuDai','TrangThai','TrangThaiXe'];
}

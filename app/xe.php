<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xe extends Model
{
    public $timestamps = false;
    protected $fillable = ['hangxe_id','hopdong_id', 'loaixe_id','HinhAnh','TenXe','NamSanXuat','NhienLieu','DungTich','MoTa','GiaThue','UuDai','TrangThai',];
}

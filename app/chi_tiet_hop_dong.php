<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chi_tiet_hop_dong extends Model
{
    public $timestamps = false;
    protected $fillable = ['hopdong_id', 'xe_id','SoLuong','TrangThai'];
}

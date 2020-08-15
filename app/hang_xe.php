<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hang_xe extends Model
{
    public $timestamps = false;
    protected $fillable = ['TenHangXe', 'QuocGia','TrangThai'];
}

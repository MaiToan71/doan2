<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loi_vi_pham extends Model
{
    public $timestamps = false;
    protected $fillable = ['TheoNgay','TheoGio'];
}

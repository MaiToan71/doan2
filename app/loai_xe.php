<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loai_xe extends Model
{
    public $timestamps = false;
    protected $fillable = ['SoCho', 'TrangThai'];
}

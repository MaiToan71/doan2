<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->increments('khachhang_id');
            $table->string('Email',20);
            $table->string('MatKhau',20);
            $table->string('DiaChi');
            $table->string('SoDienThoai',15);
            $table->date('NgaySinh');
            $table->boolean('GioiTinh');
            $table->string('GiayPhepLaiXe',4000);
            $table->string('CMND',4000);
            $table->string('HoKhau',4000);
           // $table->boolean('DaXoa')->default(false);
            $table->boolean('TrangThai')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hangs');
    }
}

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
            $table->string('Ten',20)->nullable();
            $table->string('Email',20)->nullable();
            $table->string('MatKhau',400)->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('SoDienThoai',15)->nullable();
            $table->date('NgaySinh')->nullable();
            $table->boolean('GioiTinh')->nullable();
            $table->string('GiayPhepLaiXe',100)->nullable();
            $table->string('CMND',100)->nullable();
            $table->string('HoKhau',100)->nullable();
            $table->date('NgayHen')->nullable();
            $table->time('ThoiGianHen')->nullable();
            $table->boolean("TrangThaiHen")->default(0);
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

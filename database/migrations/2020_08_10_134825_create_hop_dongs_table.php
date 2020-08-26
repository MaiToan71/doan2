<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dongs', function (Blueprint $table) {
            $table->increments('hopdong_id');
            $table->unsignedInteger('khachhang_id');
            $table->string('TenHopDong',50)->nullable();
            $table->string('FileHopDong',1000)->nullable();
            $table->string('LoiViPham',100)->nullable();
            $table->string('HinhAnhLoi',1000)->nullable();
            $table->string('TienTheChap',20)->nullable();
            $table->date('ThoiGianNhanXe')->nullable();
            $table->time('GioNhanXe')->nullable();
            $table->date('ThoiGianTraXe')->nullable();
            $table->time('GioTraXe')->nullable();
            $table->string('TienQuaHan',20)->nullable();
            $table->integer('Duyet')->default(1);
            $table->boolean('TrangThai')->default(true);
            $table->foreign('khachhang_id')->references('khachhang_id')->on('khach_hangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hop_dongs');
    }
}

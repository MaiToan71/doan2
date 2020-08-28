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
            $table->string('HinhAnhHopDong',500)->nullable();          
            $table->float('TienTheChap')->nullable();
            $table->datetime('ThoiGianNhanXe')->nullable();         
            $table->datetime('ThoiGianTraXe')->nullable();           
            $table->float('TienQuaHan')->nullable();
            $table->datetime('NgayTraThucTe')->nullable();               
            $table->integer('Duyet')->default(1);         
            $table->float('TongTien')->nullable();
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

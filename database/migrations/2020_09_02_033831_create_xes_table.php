<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xes', function (Blueprint $table) {
           
   $table->increments('xe_id');
   $table->unsignedInteger('hangxe_id')->nullable(); 
   $table->unsignedInteger('hopdong_id')->nullable();
   $table->unsignedInteger('loaixe_id')->nullable(); 
   $table->string('HinhAnh',500);
   $table->string('TenXe',50);
   $table->integer('NamSanXuat');
   $table->string('NhienLieu',20);
   $table->integer('DungTich');        
   $table->string('MoTa',1000);
   $table->string('GiaThue',20);
   $table->string('UuDai',20)->nullable();
   $table->boolean('TrangThai')->default(true);
   $table->foreign('hangxe_id')->references('hangxe_id')->on('hang_xes');
   $table->foreign('hopdong_id')->references('hopdong_id')->on('hop_dongs');
   $table->foreign('loaixe_id')->references('loaixe_id')->on('loai_xes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xes');
    }
}

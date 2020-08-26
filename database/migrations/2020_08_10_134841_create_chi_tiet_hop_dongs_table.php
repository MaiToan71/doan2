<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHopDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_hop_dongs', function (Blueprint $table) {
            $table->integer('hopdong_id')->unsigned();
            $table->integer('xe_id')->unsigned();
            $table->integer('SoLuong');
            $table->primary(['hopdong_id','xe_id']);
            $table->foreign('xe_id')->references('xe_id')->on('xes');
            $table->foreign('hopdong_id')->references('hopdong_id')->on('hop_dongs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hop_dongs');
    }
}

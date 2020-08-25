<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatXesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_xes', function (Blueprint $table) {
            $table->integer('xe_id')->unsigned();
            $table->integer('khachhang_id')->unsigned();
            $table->primary(['khachhang_id','xe_id']);
            $table->foreign('xe_id')->references('xe_id')->on('xes');
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
        Schema::dropIfExists('dat_xes');
    }
}

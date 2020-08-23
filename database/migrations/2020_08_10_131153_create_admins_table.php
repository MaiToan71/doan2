<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
           $table->increments('admin_id');
           $table->string('email',50);
           $table->string('MatKhau',500);
           $table->string('HoTen',20);
           $table->string('SoDienThoai',15);
           $table->date('NgaySinh');
           $table->boolean('GioiTinh');
           $table->string('DiaChi');
           $table->integer('Quyen');
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
        Schema::dropIfExists('admins');
    }
}

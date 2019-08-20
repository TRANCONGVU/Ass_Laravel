<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhanNhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhamNhan', function (Blueprint $table) {
            $table->bigIncrements('pn_id');
            $table->unsignedBigInteger('pg_id');
            $table->string('ten');
            $table->string('ngay_sinh');
            $table->string('gioitinh');
            $table->unsignedBigInteger('so_cmt');
            $table->string('toi_danh');
            $table->string('ngay_vao');
            $table->string('thoi_gian');
            $table->string('trang_thai');
            $table->string('ghi_chu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PhamNhan');
    }
}

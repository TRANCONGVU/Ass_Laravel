<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhamnhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phamnhan', function (Blueprint $table) {
            $table->bigIncrements("id_pn");
            $table->unsignedbigInteger("id_pg");
//            $table->unsignedInteger("ID_GT");
            $table->string("ho_va_ten");
            $table->date("ngay_sinh");
            $table->string("gioi_tinh");
            $table->integer("so_cmt");
            $table->string("toi_danh");
            $table->date("ngay_vao_trai");
            $table->string("thoi_gian_linh_an");
            $table->string("trang_thai");
            $table->string("ghi_chu");
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
        Schema::dropIfExists('phamnhan');
    }
}

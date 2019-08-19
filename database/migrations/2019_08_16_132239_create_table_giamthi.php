<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGiamthi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giamthi', function (Blueprint $table) {
            $table->bigIncrements("id_gt");
            $table->string("ho_va_ten");
            $table->string("gioi_tinh");
            $table->date("ngay_sinh");
            $table->unsignedInteger("so_cmt");
            $table->string("chuc_vu");
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
        Schema::dropIfExists('giamthi');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGiamThi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GiamThi', function (Blueprint $table) {
            $table->bigIncrements('gt_id');
            $table->string('ten');
            $table->string('gioi_tinh');
            $table->unsignedBigInteger('so_cmt');
            $table->string('chuc_vu');
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
        Schema::dropIfExists('GiamThi');
    }
}

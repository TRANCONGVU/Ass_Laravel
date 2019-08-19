<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhonggiam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonggiam', function (Blueprint $table) {
            $table->bigIncrements("id_pg");
            $table->unsignedBigInteger("id_gt");
            $table->string("ten_pg");
            $table->unsignedInteger("soluong_phamnhan");
            $table->unsignedInteger("cho_trong");
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
        Schema::dropIfExists('phonggiam');
    }
}

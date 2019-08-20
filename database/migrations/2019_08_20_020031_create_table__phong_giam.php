<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhongGiam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PhongGiam', function (Blueprint $table) {
            $table->bigIncrements('pg_id');
            $table->unsignedBigInteger('gt_id');
            $table->string('ten_pg');
            $table->integer('so_pn');
            $table->integer('cho_trong');
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
        Schema::dropIfExists('PhongGiam');
    }
}

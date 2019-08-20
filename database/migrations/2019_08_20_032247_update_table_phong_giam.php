<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTablePhongGiam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('PhongGiam', function (Blueprint $table) {
            $table->foreign('gt_id')->references('gt_id')->on('GiamThi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('PhongGiam', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePhamnhan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phamnhan', function (Blueprint $table) {
            $table->foreign('id_pg')->references('id_pg')->on('phonggiam');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phamnhan', function (Blueprint $table) {
            $table->dropForeign(["id_pg"]);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPositionColumnsInTbArTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_ar', function (Blueprint $table) {
            $table->float('positionX')->change();
            $table->float('positionY')->change();
            $table->float('positionZ')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_ar', function (Blueprint $table) {
            $table->double('positionX')->change();
            $table->double('positionY')->change();
            $table->double('positionZ')->change();
        });
    }
}

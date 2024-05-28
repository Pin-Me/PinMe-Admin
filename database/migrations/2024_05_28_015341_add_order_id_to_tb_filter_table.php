<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderIdToTbFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_filter', function (Blueprint $table) {
            $table->unsignedBigInteger('orderId')->after('id');
            $table->foreign('orderId')->references('id')->on('tb_order')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_filter', function (Blueprint $table) {
            $table->dropForeign(['orderId']);
            $table->dropColumn('orderId');
        });
    }
}

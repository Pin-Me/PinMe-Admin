<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbArTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filterId');
            $table->string('ar')->nullable();
            $table->double('positionX')->nullable();
            $table->double('positionY')->nullable();
            $table->double('positionZ')->nullable();
            $table->timestamps();

            $table->foreign('filterId')->references('id')->on('tb_filter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ar');
    }
}

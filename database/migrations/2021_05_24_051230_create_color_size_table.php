<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Color_id');
            $table->unsignedBigInteger('Size_id');
            $table->integer('quantity');
            
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('Size_id')->references('id')->on('sizes')->onDelete('cascade');
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
        Schema::dropIfExists('color_size');
    }
}

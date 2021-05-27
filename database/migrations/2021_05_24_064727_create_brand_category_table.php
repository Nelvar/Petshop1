<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Brand_id');
            $table->unsignedBigInteger('Category_id');
            
            $table->foreign('Brand_id')->references('id')->on('Brands')->onDelete('cascade');
            $table->foreign('Category_id')->references('id')->on('Categories')->onDelete('cascade');
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
        Schema::dropIfExists('brand_category_');
    }
}

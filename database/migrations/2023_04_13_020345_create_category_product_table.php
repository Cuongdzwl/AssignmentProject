<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('cat_ID');
            $table->unsignedBigInteger('product_ID');
            $table->timestamps();
            ///foregin key
            $table->foreign('cat_ID')->references('id')->on('categories');
            $table->foreign('product_ID')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
};

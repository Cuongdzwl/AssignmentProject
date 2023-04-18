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
        Schema::create('cart_product', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cart_ID');
            $table->unsignedBigInteger('product_ID');
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamps();
            ///foreign key
            $table->foreign('cart_ID')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('product_ID')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_product');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // creating table for products
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('productName',255);
            $table->string('productCategory',255);
            $table->string('productDetails',255);
            $table->string('productSeller',255);
            $table->bigInteger('productPrice');
            $table->bigInteger('productQuantity');
            $table->string('imgPath',255)->nullable();
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
        //
    }
}

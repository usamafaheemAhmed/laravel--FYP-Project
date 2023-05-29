<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cart', function (Blueprint $table) {
            $table->id();
            $table->string('UserName',255);
            $table->string('seller',255);
            $table->string('Buyer',255);
            $table->string('productId',255);
            // $table->string('productPrice',255);
            $table->bigInteger('productPrice');
            $table->bigInteger('productQuantity');
            // $table->string('imgPath',255)->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('firstName',255);
            $table->string('middleName',255);
            $table->string('lastName',255);
            $table->string('email',255);
            $table->string('job',255);
            $table->bigInteger('mobile');
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
        Schema::dropIfExists('_customer');
    }
}

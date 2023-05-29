<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SignUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmerSignUp', function (Blueprint $table) {
            $table->id();
            $table->string('userName',255);
            $table->string('email',255);
            $table->string('CNIC',255);
            $table->bigInteger('phoneNumber');
            $table->string('userPassword',255);
            $table->string('profilePic',255)->nullable();
            $table->Integer('age')->nullable();
            $table->string('City',255)->nullable();
            $table->string('Address',255)->nullable();
            $table->string('fieldArea',255)->nullable();
            $table->string('userType',255)->nullable();
            $table->timestamps();
        });
        //
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

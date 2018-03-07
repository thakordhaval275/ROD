<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeProfileModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_profile_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('aboutself')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('gender')->nullable();
            $table->date('bdate')->nullable();
            $table->string('contectno')->nullable();
            $table->string('emailid');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('hometown')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('postgraduate')->nullable();
            $table->string('graduate')->nullable();
            $table->string('classxii')->nullable();
            $table->string('classx')->nullable();
            $table->string('otherque')->nullable();
            $table->string('industry')->nullable();
            $table->string('preferredlocation')->nullable();
            $table->string('expirienceyear')->nullable();
            $table->string('expiriencemonth')->nullable();
            $table->string('keyskill')->nullable();
            $table->increments('password');
            $table->increments('securityque');
            $table->increments('securityans');
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
        Schema::dropIfExists('employee_profile_models');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProfileModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profile_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo')->nullable();
            $table->string('aboutcompany')->nullable();
            $table->string('companyname')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('emailid');
            $table->string('website')->nullable();
            $table->string('companytype')->nullable();
            $table->string('foundyear')->nullable();
            $table->string('noofemployee')->nullable();
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
        Schema::dropIfExists('company_profile_models');
    }
}

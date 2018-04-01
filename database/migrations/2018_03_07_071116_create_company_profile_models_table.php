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
            $table->string('aboutcompany',1000)->nullable();
            $table->string('companyname')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('emailid')->unique();
            $table->string('website')->nullable();
            $table->string('companytype')->nullable();
            $table->string('foundyear')->nullable();
            $table->string('noofemployee')->nullable();
            $table->string('usertype')->nullable();
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

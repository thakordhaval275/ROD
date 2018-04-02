<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruiterProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiter_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profilephoto')->nullable();
            $table->string('aboutself',1000)->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('gender')->nullable();
            $table->string('emailid')->unique();
            $table->string('contactno')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('otheremailid')->nullable();
            $table->string('gstregister')->nullable();
            $table->string('rcompanyname')->nullable();
            $table->string('rcompanytype')->nullable();
            $table->string('rindustrytype')->nullable();
            $table->string('companyaddress')->nullable();
            $table->string('rname')->nullable();
            $table->string('rdesignation')->nullable();
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
        Schema::dropIfExists('recruiter_profiles');
    }
}

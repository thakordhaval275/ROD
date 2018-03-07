<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruiterPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruiter_personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profilephoto')->nullable();
            $table->string('aboutself')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('gender')->nullable();
            $table->string('emailid');
            $table->string('password')->nullable();
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
        Schema::dropIfExists('recruiter_personal_details');
    }
}

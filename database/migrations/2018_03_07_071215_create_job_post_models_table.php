<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_post_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname')->nullable();
            $table->string('logo')->nullable();
            $table->string('jobtype')->nullable();
            $table->string('department')->nullable();
            $table->string('term')->nullable();
            $table->string('termperiod')->nullable();
            $table->string('experience')->nullable();
            $table->string('payment')->nullable();
            $table->string('noofpositions')->nullable();
            $table->string('jobdescription',1000)->nullable();
            $table->string('useremail')->nullable();
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
        Schema::dropIfExists('job_post_models');
    }
}

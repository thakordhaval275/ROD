<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname')->nullable();
            $table->string('companyemail')->nullable();
            $table->string('emailid')->nullable();
            $table->string('noofemployee')->nullable();
            $table->string('employeequalification')->nullable();
            $table->string('keyskill')->nullable();
            $table->string('otherdetail',1000)->nullable();
            $table->string('status')->default('1')->comment('1: Pending, 2: Accepted');
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
        Schema::dropIfExists('proposals');
    }
}

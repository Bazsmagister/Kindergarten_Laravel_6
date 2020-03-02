<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->timestamps();
            //$table->increments('id');
            $table->unsignedInteger('student_id');
            $table->string('street_name', 250)->nullable();
            $table->string('street_number',250)->nullable();
            $table->integer('zip',false,true)->nullable();
            $table->string('city', 250)->nullable();
            $table->unsignedInteger('siblings_num')->nullable();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}

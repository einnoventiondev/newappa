<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetition2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition2s', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->default(2);
            $table->string('letter')->nullable();
            $table->string('publishedWorks')->nullable();
            $table->string('candidateImage')->nullable();
            $table->string('passportimages')->nullable();
            $table->string('release')->nullable();
            $table->string('place')->nullable();
            $table->string('title')->nullable();
            $table->string('relation')->nullable();
            $table->string('about')->nullable();
            $table->string('idNumber')->nullable();
            $table->string('inputNationality')->nullable();
            $table->string('inputName')->nullable();
            $table->string('inputEmail')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('state')->nullable();
            $table->string('orgniztionName')->nullable();
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
        Schema::dropIfExists('competition2s');
    }
}

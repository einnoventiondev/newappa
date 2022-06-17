<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetition4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition4s', function (Blueprint $table) {
            $table->id();
            $table->string('orgniztionName')->nullable();
            // $table->integer('type')->default(2);
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

            $table->string('release1')->nullable();
            $table->string('place1')->nullable();
            $table->string('title1')->nullable();
            $table->string('publishedWorks1')->nullable();


            $table->string('release2')->nullable();
            $table->string('place2')->nullable();
            $table->string('title2')->nullable();
            $table->string('publishedWorks2')->nullable();

            $table->string('release3')->nullable();
            $table->string('place3')->nullable();
            $table->string('title3')->nullable();
            $table->string('publishedWorks3')->nullable();

            $table->string('release4')->nullable();
            $table->string('place4')->nullable();
            $table->string('title4')->nullable();
            $table->string('publishedWorks4')->nullable();


            $table->string('release5')->nullable();
            $table->string('place5')->nullable();
            $table->string('title5')->nullable();
            $table->string('publishedWorks5')->nullable();


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
        Schema::dropIfExists('competition4s');
    }
}

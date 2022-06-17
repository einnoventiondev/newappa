<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->integer('type')->default(2);
            $table->string('form')->nullable(); 
            $table->string('orgniztionName')->nullable();
            $table->string('state')->nullable();
            $table->string('fieldname')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('inputEmail')->nullable();
            $table->string('inputName')->nullable();
            $table->string('inputNationality')->nullable();
            $table->string('age')->nullable();
            $table->string('idNumber')->nullable();
            $table->string('uniNumber')->nullable();
            $table->string('uniEmail')->nullable();
            $table->string('phoneNumber2')->nullable();
            $table->string('about')->nullable();
            $table->string('passportimages')->nullable();
            $table->string('candidateImage')->nullable();
            $table->string('relation')->nullable();
            $table->string('publishedWorks')->nullable();
            $table->string('letter')->nullable();
            $table->enum('check',[0,1]);
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
        Schema::dropIfExists('universities');
    }
}

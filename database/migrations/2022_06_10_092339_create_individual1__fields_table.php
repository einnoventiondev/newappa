<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividual1FieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual1__fields', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individual1__id');
            $table->foreign('individual1__id')->references('id')->on('individual1s')->onDelete('cascade');
            $table->string('title');
            $table->string('place');
            $table->string('release');
            $table->string('publishedWorks');
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
        Schema::dropIfExists('individual1__fields');
    }
}

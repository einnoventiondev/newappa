<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporate1FieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate1_fields', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('corporate1_id');
            $table->foreign('corporate1_id')->references('id')->on('corporate1s')->onDelete('cascade');
            $table->string('authentic_program');
            $table->string('authentic_history');
            $table->string('authentic_place');
            $table->string('authentic_history1');
            $table->string('authentic_target');
            $table->string('authentic_cv1');
            $table->string('authentic_cv2');
            $table->string('authentic_cv3');
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
        Schema::dropIfExists('corporate1_fields');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividual1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual1s', function (Blueprint $table) {
            $table->id();
            $table->string('authentic_name')->nullable();
            $table->string('authentic_type')->nullable();
            $table->string('authentic_date')->nullable();
            $table->string('authentic_project')->nullable();
            $table->string('authentic_company')->nullable();
            $table->string('authentic_age')->nullable();
            $table->string('authentic_options')->nullable();
            $table->string('authentic_contact')->nullable();
            $table->string('authentic_contact1')->nullable();
            $table->string('authentic_email')->nullable();
            $table->string('authentic_condition')->nullable();
            $table->string('authentic_choose')->nullable();
            $table->string('authentic_country')->nullable();
            $table->string('authentic_city')->nullable();
            $table->string('authentic_idea')->nullable();
            $table->string('authentic_program')->nullable();
            $table->string('authentic_history')->nullable();
            $table->text('authentic_place')->nullable();
            $table->string('authentic_history1')->nullable();
            $table->string('authentic_target')->nullable();
            $table->string('authentic_link')->nullable();
            $table->string('authentic_cv')->nullable();
            $table->string('authentic_cv1')->nullable();
            $table->string('authentic_cv2')->nullable();
            $table->string('authentic_cv3')->nullable();
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
        Schema::dropIfExists('individual1s');
    }
}

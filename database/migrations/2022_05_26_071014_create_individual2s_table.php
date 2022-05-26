<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividual2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual2s', function (Blueprint $table) {
            $table->id();
            $table->string('behalf_candidate_name')->nullable();
            $table->string('behalf_options')->nullable();
            $table->string('behalf_name')->nullable();
            $table->string('behalf_type')->nullable();
            $table->string('behalf_date')->nullable();
            $table->string('behalf_country')->nullable();
            $table->text('behalf_city')->nullable();
            $table->Text('behalf_about')->nullable();
            $table->string('behalf_site')->nullable();
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
        Schema::dropIfExists('individual2s');
    }
}

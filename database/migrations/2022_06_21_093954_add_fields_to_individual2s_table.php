<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToIndividual2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('individual2s', function (Blueprint $table) {
            $table->string('behalf_age')->nullable();
            $table->string('behalf_condition')->nullable();
            $table->string('behalf_choose')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('individual2s', function (Blueprint $table) {
            //
        });
    }
}

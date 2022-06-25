<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToIndividual1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('individual1s', function (Blueprint $table) {
            $table->string('authentic_age')->nullable();
            $table->string('authentic_condition')->nullable();
            $table->string('authentic_choose')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('individual1s', function (Blueprint $table) {
            //
        });
    }
}

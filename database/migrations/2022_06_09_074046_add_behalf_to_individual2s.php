<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBehalfToIndividual2s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('individual2s', function (Blueprint $table) {
            //
            $table->string('behalf_number')->nullable()->after('behalf_site');
            $table->string('behalf_email')->nullable()->after('behalf_number');
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
            $table->dropColumn('behalf_number');
            $table->dropColumn('behalf_email');
        });
    }
}

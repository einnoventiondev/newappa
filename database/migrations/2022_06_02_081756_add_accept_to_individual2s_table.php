<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAcceptToIndividual2sTable extends Migration
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
            $table->integer('accept')->nullable()->after('behalf_site');
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
            $table->dropColumn('accept');
        });
    }
}

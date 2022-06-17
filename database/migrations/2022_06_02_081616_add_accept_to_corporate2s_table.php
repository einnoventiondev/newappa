<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAcceptToCorporate2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporate2s', function (Blueprint $table) {
            //
            $table->integer('accept')->nullable()->after('behalf_about');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corporate2s', function (Blueprint $table) {
            //
            $table->dropColumn('accept');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporate2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate2s', function (Blueprint $table) {
            $table->id();
            $table->string('behalf_candidate_name')->nullable();
            $table->string('behalf_options')->nullable();
            $table->string('behalf_name')->nullable();
            $table->string('behalf_type')->nullable();
            $table->string('behalf_date')->nullable();
            $table->string('behalf_company_name')->nullable();
            $table->string('behalf_options1')->nullable();
            $table->string('behalf_project')->nullable();
            $table->string('behalf_number')->nullable();
            $table->string('behalf_email')->nullable();
            $table->string('behalf_country')->nullable();
            $table->text('behalf_city')->nullable();
            $table->Text('behalf_about')->nullable();

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
        Schema::dropIfExists('corporate2s');
    }
}

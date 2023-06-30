<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWantedpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wantedposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wp_type',20);
            $table->string('wp_budget',20);
            $table->string('wp_description',20);
            $table->string('wp_posted_by',20);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wantedposts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('websites', function (Blueprint $table) {
             $table->increments('id');
             $table->string('title');
             $table->string('subtitle');
             $table->string('content');
             $table->string('route');
             $table->string('background');
             $table->string('backdrop');
             $table->string('photo');
             $table->string('logo');
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}

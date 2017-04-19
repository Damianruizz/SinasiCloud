<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('rfc');
            $table->string('street');
            $table->string('delegation');            
            $table->string('colony');
            $table->string('cp');
            $table->string('num_int');
            $table->string('num_ext');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('email');
            $table->string('web_page');
            $table->string('tax_regime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

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
            $table->string('rfc')->nullable();
            $table->string('cp')->nullable();
            $table->string('state')->nullable();
            $table->string('delegation')->nullable();            
            $table->string('colony')->nullable();
            $table->string('street')->nullable();                                                
            $table->string('num_int')->nullable();
            $table->string('num_ext')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('web_page')->nullable();
            $table->string('tax_regime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('client');
    }
}


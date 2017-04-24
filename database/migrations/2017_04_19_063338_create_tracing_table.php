<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tracing', function (Blueprint $table) {

            $table->increments('id');
            $table->string('comment')->nullable();
            $table->string('id_client');
            $table->string('id_user');
            $table->string('visibility_type')->nullable();
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
        Schema::drop('tracing');
    }
}

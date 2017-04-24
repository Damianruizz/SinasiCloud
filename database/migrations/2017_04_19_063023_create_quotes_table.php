<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('client_id');
            $table->string('subt_bef_discoint')->nullable();
            $table->string('discoint')->nullable();
            $table->string('subtotal');
            $table->string('iva')->nullable();
            $table->string('iva_detained')->nullable();
            $table->string('total');                      
            $table->string('id_user');        
            $table->string('status');
            $table->string('observations')->nullable();    
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
        Schema::drop('quotes');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('unit_m');
            $table->string('service_article');
            $table->string('unit_price');

            $table->string('iva');
            $table->string('tax_code_iva');
            $table->string('isr_detained');
            $table->string('tax_code_isr');
            $table->string('iva_detained');
            $table->string('tax_code_iva_d');          
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

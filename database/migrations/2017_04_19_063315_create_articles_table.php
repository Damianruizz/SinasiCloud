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
            $table->string('unit_m')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('measure_a')->nullable();
            $table->string('measure_b')->nullable();
            $table->string('measure_c')->nullable();
            $table->string('measure_d')->nullable();
            $table->string('service_article');
            $table->string('unit_price')->nullable();
            $table->string('type_material')->nullable();
            $table->string('cost')->nullable();

            $table->string('iva')->nullable();
            $table->string('tax_code_iva')->nullable();                     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}

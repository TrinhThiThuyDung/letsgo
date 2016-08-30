<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table){
            $table->increments('id');
            $table->integer("user_id");
            $table->integer("kind_id");
            $table->string('name');
            $table->string('size'); 
            $table->string('resize_1');
            $table->string('resize_2');
            $table->string('url');
            $table->string('describe');
            $table->string('location');
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
        Schema::drop('images');
    }
}

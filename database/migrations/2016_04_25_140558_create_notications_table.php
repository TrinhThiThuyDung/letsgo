<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notications',  function (Blueprint $table){
            $table->increments('id');
           
            $table->integer('user_id_from');
            $table->integer('user_id_to');
            $table->integer('kind_id_noti');

            $table->enum('choices', ['like', 'comment', 'flow']);
           
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
        Schema::drop('notications');
    }
}

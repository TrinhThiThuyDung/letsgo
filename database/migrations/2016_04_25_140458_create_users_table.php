<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',  function (Blueprint $table){
            $table->increments('id');
            $table->string('last_name', 100);
            $table->string('first_name', 100);
            $table->string('email', 100 );
            $table->string('password', 60 );
            $table->integer('phone');
            $table->enum('choices', ['female', 'male', 'undefined']);
            $table->string('address', 100);
            $table->date('birthday');
            $table->string('avatar');
            $table->string('position');
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
        Schema::drop('users');
    }
}

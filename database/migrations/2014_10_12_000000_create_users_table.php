<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //integer unsigned increment
            $table->string('name'); //varchar 
            $table->string('email')->unique(); //varchar unico
            $table->timestamp('email_verified_at')->nullable(); //verificar email puede ser null
            $table->string('password'); //varchar
            $table->rememberToken(); //varchar(100) guarda token al iniciar sesion 
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

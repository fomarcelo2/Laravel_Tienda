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
            $table->id(); //campo autoincrementable, entero, llave primaria
            $table->string('name'); //varchar
            $table->string('email')->unique();//campo unico
            $table->timestamp('email_verified_at')->nullable();//campo de tiempo
            $table->string('password');//varchar
            $table->rememberToken();//codigo recuperacion de contraseña
            $table->timestamps();// campos de auditoria, created_at, update_at
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

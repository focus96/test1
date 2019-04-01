<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->comment('Имя');
            $table->string('surname', 100)->comment('Фамилия');
            $table->string('patronymic', 100)->comment('Отчество');
            $table->integer('facult_id')->index()->unsigned()->comment('Факультет');
            $table->integer('group_id')->index()->unsigned()->comment('Группа');
            $table->string('email')->unique();
            $table->string('login', 100)->comment('Логин');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

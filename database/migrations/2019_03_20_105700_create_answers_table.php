<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            /*таблица содержит в себе варианты ответов на вопросы и стоимость каждого ответа*/
            $table->increments('answer_id');
            $table->integer('question_id')->index()->unsigned()->comment('ИД вопроса');
            $table->string('answer_text', 150)->comment('Текст ответа');
            $table->integer('bal')->unsigned()->comment('Баллов за ответ');
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
        Schema::dropIfExists('answers');
    }
}

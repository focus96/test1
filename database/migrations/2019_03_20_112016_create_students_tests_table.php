<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_tests', function (Blueprint $table) {
            /*В эту таблицу сохраняются результаты прохождения тестов*/
            $table->increments('stud_test_id');
            $table->integer('user_id')->unsigned()->index()->comment('ИД пользователя');
            $table->integer('test_id')->unsigned()->index()->comment('ИД теста');
            $table->integer('question_id')->unsigned()->index()->comment('ИД вопроса');
            $table->integer('answer_id')->unsigned()->index()->comment('ИД ответа');
            $table->integer('result_id')->unsigned()->index()->comment('ИД результата');
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
        Schema::dropIfExists('students_tests');
    }
}

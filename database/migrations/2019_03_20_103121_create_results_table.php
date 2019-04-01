<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            /*таблица содержит в себе результирующий текст и баллы, нужные для отображения каждого*/
            $table->increments('result_id');
            $table->integer('test_id')->unsigned()->index()->comment('ИД теста');
            $table->integer('max_bal')->unsigned()->comment('Максимальный бал');
            $table->text('result_text')->comment('Результирующий текст');
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
        Schema::dropIfExists('results');
    }
}

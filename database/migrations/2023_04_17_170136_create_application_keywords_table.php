<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_keywords', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Название
            $table->unsignedBigInteger('application_id'); //ID заявки
            $table->timestamps();

            //Создаем индексацию
            $table->index('application_id', 'application_keywords_application_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('application_id', 'application_keywords_application_fk')->on('applications')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_keywords');
    }
}

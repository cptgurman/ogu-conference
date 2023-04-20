<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferenceKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_keywords', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Название
            $table->unsignedBigInteger('conference_id'); //ID заявки
            $table->timestamps();

            //Создаем индексацию
            $table->index('conference_id', 'conference_keywords_conference_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('conference_id', 'conference_keywords_conference_fk')->on('conferences')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_keywords');
    }
}

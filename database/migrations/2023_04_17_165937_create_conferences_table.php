<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Название
            $table->string('short_name'); //Короткое название
            $table->text('description'); //Описание
            $table->unsignedBigInteger('event_type_id'); //ID тип проведения конференции (очный, заочный ...)
            $table->unsignedBigInteger('faculty_id'); //ID факультета
            $table->unsignedBigInteger('corpus_id'); //ID корпуса
            $table->date('conf_date_start'); //Дата начала конференции
            $table->date('conf_date_end'); //Дата окончания конференции
            $table->date('reg_date_start'); //Дата начала регистрации
            $table->date('reg_date_end'); //Дата окончания регистрации
            $table->timestamps();

            //Создаем индексацию
            $table->index('event_type_id', 'conference_event_type_idx');
            $table->index('faculty_id', 'conference_faculty_idx');
            $table->index('corpus_id', 'conference_corpus_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('event_type_id', 'conference_event_type_fk')->on('event_types')->references('id');
            $table->foreign('faculty_id', 'conference_faculty_fk')->on('faculties')->references('id');
            $table->foreign('corpus_id', 'conference_corpus_fk')->on('corpuses')->references('id');

            $table->softDeletes(); //Чтобы полностью не удалять
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}

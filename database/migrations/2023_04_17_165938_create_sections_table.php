<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Cекции конференции
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Название
            $table->text('description'); //Описание секции конференции
            $table->unsignedBigInteger('conference_id'); //ID конференции
            $table->timestamps();

            //Создаем наименование
            $table->index('conference_id', 'section_conference_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('conference_id', 'section_conference_fk')->on('conferences')->references('id');

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
        Schema::dropIfExists('sections');
    }
}

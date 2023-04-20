<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_competences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //ID заявки
            $table->unsignedBigInteger('competetion_id'); //ID заявки
            $table->timestamps();

            //Создаем индексацию
            $table->index('competetion_id', 'user_competences_competetion_idx');
            $table->index('user_id', 'user_competences_user_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('competetion_id', 'user_competences_competetion_fk')->on('competences')->references('id');
            $table->foreign('user_id', 'user_competences_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('user_competences');
    }
}

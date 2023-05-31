<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_application', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //ID заявки
            $table->unsignedBigInteger('application_id'); //ID заявки
            $table->timestamps();

            //Создаем индексацию
            $table->index('application_id', 'expert_application_application_idx');
            $table->index('user_id', 'expert_application_user_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('application_id', 'expert_application_application_fk')->on('applications')->references('id');
            $table->foreign('user_id', 'expert_application_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('expert_application');
    }
}

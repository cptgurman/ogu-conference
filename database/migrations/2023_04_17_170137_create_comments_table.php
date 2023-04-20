<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->unsignedBigInteger('application_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            //Создаем индексацию
            $table->index('application_id', 'comment_application_idx');
            $table->index('user_id', 'comment_user_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('application_id', 'comment_application_fk')->on('applications')->references('id');
            $table->foreign('user_id', 'comment_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('comments');
    }
}

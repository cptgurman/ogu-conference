<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //ID заявки
            $table->unsignedBigInteger('role_id'); //ID заявки
            $table->timestamps();

            //Создаем индексацию
            $table->index('role_id', 'user_roles_role_idx');
            $table->index('user_id', 'user_roles_user_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('role_id', 'user_roles_role_fk')->on('roles')->references('id');
            $table->foreign('user_id', 'user_roles_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('user_roles');
    }
}

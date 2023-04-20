<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorpusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Корпусы
        Schema::create('corpuses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Название
            $table->text('address'); //Адрес
            $table->timestamps();

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
        Schema::dropIfExists('corpuses');
    }
}

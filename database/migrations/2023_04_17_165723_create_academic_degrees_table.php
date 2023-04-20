<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Академическая степень
        Schema::create('academic_degrees', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Название
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
        Schema::dropIfExists('academic_degrees');
    }
}

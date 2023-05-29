<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->text('keywords');
            $table->text('annotation');
            $table->unsignedBigInteger('user_id'); //ID конференции
            $table->unsignedBigInteger('conference_id'); //ID конференции
            $table->unsignedBigInteger('participation_form_id'); //ID конференции
            $table->unsignedBigInteger('conference_section_id'); //ID конференции
            $table->boolean('hotel')->nullable();
            $table->boolean('invitation')->nullable();

            //Создаем индексацию
            $table->index('conference_id', 'application_conference_idx');
            $table->index('participation_form_id', 'application_participation_form_idx');
            $table->index('conference_section_id', 'application_conference_section_idx');

            //Столбец в нашей траблицы -> Другая таблица -> Столбец на котороый ссылается
            $table->foreign('conference_id', 'application_conference_fk')->on('conferences')->references('id');
            $table->foreign('participation_form_id', 'application_participation_form_fk')->on('event_types')->references('id');
            $table->foreign('conference_section_id', 'application_conference_section_idx')->on('sections')->references('id');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}

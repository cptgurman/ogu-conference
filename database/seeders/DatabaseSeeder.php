<?php

namespace Database\Seeders;

use App\Models\AcademicDegree;
use App\Models\AcademicTitle;
use App\Models\Competence;
use App\Models\Education;
use App\Models\EventType;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Добавляем степени образования
        $educations = Config::get('constants.education');
        foreach ($educations as $education) {
            Education::create(['name' => $education]);
        }

        // Добавляем ученое звание
        $academic_titles = Config::get('constants.academic_title');
        foreach ($academic_titles as $academic_title) {
            AcademicTitle::create(['name' => $academic_title]);
        }

        // Добавляем ученую степень
        $academic_degrees = Config::get('constants.academic_degrees');
        foreach ($academic_degrees as $academic_degree) {
            AcademicDegree::create(['name' => $academic_degree]);
        }

        // Добавляем роли
        $roles = Config::get('constants.roles');
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        // Добавляем тип проведения мероприятия
        $event_types = Config::get('constants.event_types');
        foreach ($event_types as $event_type) {
            EventType::create(['name' => $event_type]);
        }

        // Добавляем компетенции
        $competences = Config::get('constants.competences');
        foreach ($competences as $competence) {
            Competence::create(['name' => $competence]);
        }
    }
}

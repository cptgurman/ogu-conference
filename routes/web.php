<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//роутинг для страницы админки, префикс для того чтобы в url был admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    // Главная в админке
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.index');
    });

    //Роуты для управления полльзователями
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    //Роуты для управления факультетами
    Route::group(['namespace' => 'Faculty', 'prefix' => 'faculty'], function () {
        Route::get('/', 'IndexController')->name('admin.faculty.index');
        Route::get('/create', 'CreateController')->name('admin.faculty.create');
        Route::post('/', 'StoreController')->name('admin.faculty.store');
        Route::get('/{faculty}', 'ShowController')->name('admin.faculty.show');
        Route::get('/{faculty}/edit', 'EditController')->name('admin.faculty.edit');
        Route::patch('/{faculty}', 'UpdateController')->name('admin.faculty.update');
        Route::delete('/{faculty}', 'DeleteController')->name('admin.faculty.delete');
    });

    //Роуты для управления корпусами
    Route::group(['namespace' => 'Corpus', 'prefix' => 'corpus'], function () {
        Route::get('/', 'IndexController')->name('admin.corpus.index');
        Route::get('/create', 'CreateController')->name('admin.corpus.create');
        Route::post('/', 'StoreController')->name('admin.corpus.store');
        Route::get('/{corpus}', 'ShowController')->name('admin.corpus.show');
        Route::get('/{corpus}/edit', 'EditController')->name('admin.corpus.edit');
        Route::patch('/{corpus}', 'UpdateController')->name('admin.corpus.update');
        Route::delete('/{corpus}', 'DeleteController')->name('admin.corpus.delete');
    });

    //Роуты для управления формами участия
    Route::group(['namespace' => 'EventType', 'prefix' => 'event_type'], function () {
        Route::get('/', 'IndexController')->name('admin.event_type.index');
        Route::get('/create', 'CreateController')->name('admin.event_type.create');
        Route::post('/', 'StoreController')->name('admin.event_type.store');
        Route::get('/{event_type}', 'ShowController')->name('admin.event_type.show');
        Route::get('/{event_type}/edit', 'EditController')->name('admin.event_type.edit');
        Route::patch('/{event_type}', 'UpdateController')->name('admin.event_type.update');
        Route::delete('/{event_type}', 'DeleteController')->name('admin.event_type.delete');
    });

    //Роуты для управления списком образования
    Route::group(['namespace' => 'Education', 'prefix' => 'education'], function () {
        Route::get('/', 'IndexController')->name('admin.education.index');
        Route::get('/create', 'CreateController')->name('admin.education.create');
        Route::post('/', 'StoreController')->name('admin.education.store');
        Route::get('/{education}', 'ShowController')->name('admin.education.show');
        Route::get('/{education}/edit', 'EditController')->name('admin.education.edit');
        Route::patch('/{education}', 'UpdateController')->name('admin.education.update');
        Route::delete('/{education}', 'DeleteController')->name('admin.education.delete');
    });

    //Роуты для управления учеными степенями
    Route::group(['namespace' => 'AcademicDegree', 'prefix' => 'academic_degree'], function () {
        Route::get('/', 'IndexController')->name('admin.academic_degree.index');
        Route::get('/create', 'CreateController')->name('admin.academic_degree.create');
        Route::post('/', 'StoreController')->name('admin.academic_degree.store');
        Route::get('/{academic_degree}', 'ShowController')->name('admin.academic_degree.show');
        Route::get('/{academic_degree}/edit', 'EditController')->name('admin.academic_degree.edit');
        Route::patch('/{academic_degree}', 'UpdateController')->name('admin.academic_degree.update');
        Route::delete('/{academic_degree}', 'DeleteController')->name('admin.academic_degree.delete');
    });

    //Роуты для управления учеными степенями
    Route::group(['namespace' => 'AcademicTitle', 'prefix' => 'academic_title'], function () {
        Route::get('/', 'IndexController')->name('admin.academic_title.index');
        Route::get('/create', 'CreateController')->name('admin.academic_title.create');
        Route::post('/', 'StoreController')->name('admin.academic_title.store');
        Route::get('/{academic_title}', 'ShowController')->name('admin.academic_title.show');
        Route::get('/{academic_title}/edit', 'EditController')->name('admin.academic_title.edit');
        Route::patch('/{academic_title}', 'UpdateController')->name('admin.academic_title.update');
        Route::delete('/{academic_title}', 'DeleteController')->name('admin.academic_title.delete');
    });

    //Роуты для управления ролями
    Route::group(['namespace' => 'Role', 'prefix' => 'role'], function () {
        Route::get('/', 'IndexController')->name('admin.role.index');
        Route::get('/create', 'CreateController')->name('admin.role.create');
        Route::post('/', 'StoreController')->name('admin.role.store');
        Route::get('/{role}', 'ShowController')->name('admin.role.show');
        Route::get('/{role}/edit', 'EditController')->name('admin.role.edit');
        Route::patch('/{role}', 'UpdateController')->name('admin.role.update');
        Route::delete('/{role}', 'DeleteController')->name('admin.role.delete');
    });

    //Роуты для управления конференциями
    Route::group(['namespace' => 'Conference', 'prefix' => 'conference'], function () {
        Route::get('/', 'IndexController')->name('admin.conference.index');
        Route::get('/create', 'CreateController')->name('admin.conference.create');
        Route::post('/', 'StoreController')->name('admin.conference.store');
        Route::get('/{conference}', 'ShowController')->name('admin.conference.show');
        Route::get('/{conference}/edit', 'EditController')->name('admin.conference.edit');
        Route::patch('/{conference}', 'UpdateController')->name('admin.conference.update');
        Route::delete('/{conference}', 'DeleteController')->name('admin.conference.delete');
    });

    //Роуты для управления заявками
    Route::group(['namespace' => 'Application', 'prefix' => 'application'], function () {
        Route::get('/', 'IndexController')->name('admin.application.index');
        Route::get('/create', 'CreateController')->name('admin.application.create');
        Route::post('/', 'StoreController')->name('admin.application.store');
        Route::get('/{application}', 'ShowController')->name('admin.application.show');
        Route::get('/{application}/edit', 'EditController')->name('admin.application.edit');
        Route::patch('/{application}', 'UpdateController')->name('admin.application.update');
        Route::delete('/{application}', 'DeleteController')->name('admin.application.delete');
    });

    //Роуты для экспертов
    Route::group(['namespace' => 'Expert', 'prefix' => 'expert'], function () {
        Route::get('/', 'IndexController')->name('admin.expert.index');
        Route::get('/{expert}', 'ShowController')->name('admin.expert.show');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

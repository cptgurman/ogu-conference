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
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

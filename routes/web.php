<?php

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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menu', 'Typing\MenuController@getmenu')->name('indexmenu');
Route::get('/kesulitan/pemrograman', 'Typing\MenuController@getpemrograman')->name('pemrograman');
Route::get('/kesulitan/pemrograman/php', 'Typing\MenuController@getphp')->name('php');
Route::get('/kesulitan/pemrograman/js', 'Typing\MenuController@getjs')->name('js');
Route::get('/customindex', 'Typing\MenuController@getcustom')->name('indexcustom');
// Route::get('/custom/play', 'Typing\MenuController@getcustom')->name('indexcustom');

Route::group(['prefix'=> 'home'], function () {
    Route::get('/mudah/play', 'Typing\PlayingController@playmudah')->name('playmudah');
    Route::get('/normal/play', 'Typing\PlayingController@playnormal')->name('playnormal');
    Route::get('/susah/play', 'Typing\PlayingController@playsusah')->name('playsusah');
    Route::get('/menuplay', 'Typing\MenuController@getplay')->name('indexplay');
    Route::group(['prefix'=> 'menuplay'], function () {
        Route::get('/playcustom', 'Typing\MenuController@getplaycustom')->name('indexplaycustom');
        Route::get('/kesulitan', 'Typing\MenuController@getkesulitan')->name('tingkatkesulitan');
        Route::post('/gantibahasa/{id}', 'Typing\PlayingController@ubahbahasa')->name('ubahbahasa');
    });
    Route::resource('/custom', 'Typing\CustomController');
    Route::resource('/user', 'User\UserController');
    Route::resource('/role', 'Admin\RoleController');
    Route::resource('/character', 'Admin\TypeController');
    Route::resource('/bahasa', 'Admin\BahasaController');
    Route::resource('/pemrograman', 'Admin\PemrogramanController');
    Route::resource('/statistik', 'Typing\StatistikController');
});

// beta
Route::get('/beta', 'Typing\MenuController@getbeta')->name('indexbeta');
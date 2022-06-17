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
Route::get('/menuplay', 'Typing\MenuController@getplay')->name('indexplay');
Route::get('/kesulitan', 'Typing\MenuController@getkesulitan')->name('tingkatkesulitan');
Route::get('/kesulitan/pemrograman', 'Typing\MenuController@getpemrograman')->name('pemrograman');
Route::get('/kesulitan/pemrograman/php', 'Typing\MenuController@getphp')->name('php');
Route::get('/kesulitan/pemrograman/js', 'Typing\MenuController@getjs')->name('js');
Route::get('/custom', 'Typing\MenuController@getcustom')->name('indexcustom');
Route::get('/mudah/play', 'Typing\PlayingController@playmudah')->name('playamudah');
// Route::get('/custom/play', 'Typing\MenuController@getcustom')->name('indexcustom');
Route::resource('/menucustom', 'Typing\CustomController');

Route::group(['prefix'=> 'home'], function () {
    Route::resource('/user', 'User\UserController');
});

// beta
Route::get('/beta', 'Typing\MenuController@getbeta')->name('indexbeta');
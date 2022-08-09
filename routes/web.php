<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Statistik;
// use App\Mail\MailVerify;

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
    $statistik = Statistik::count();
    $user = User::count();
    return view('welcome', compact('user', 'statistik'));
})->name('welcome');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from Ngeteks',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('donlot60@gmail.com')->send(new \App\Mail\MailVerify($details));
   
    dd("Email is Sent.");
});

// Auth::routes();

// Route::get('/menu', 'Typing\MenuController@getmenu')->name('indexmenu');
// Route::get('/kesulitan/pemrograman', 'Typing\MenuController@getpemrograman')->name('pemrograman');
// Route::get('/kesulitan/pemrograman/php', 'Typing\MenuController@getphp')->name('php');
// Route::get('/kesulitan/pemrograman/js', 'Typing\MenuController@getjs')->name('js');
// Route::get('/customindex', 'Typing\MenuController@getcustom')->name('indexcustom');
// Route::get('/custom/play', 'Typing\MenuController@getcustom')->name('indexcustom');


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=> 'home'], function () {
    Route::get('/mudah/play', 'Typing\PlayingController@playmudah')->name('playmudah');
});
Route::group(['prefix'=> 'home', 'middleware' => 'auth', 'middleware' => 'verified'], function () {
    // Route::group(['middleware' => 'verified'], function () {
        Route::get('/normal/play', 'Typing\PlayingController@playnormal')->name('playnormal');
        Route::get('/susah/play', 'Typing\PlayingController@playsusah')->name('playsusah');
        Route::get('/menuplay', 'Typing\MenuController@getplay')->name('indexplay');
        Route::get('/pemrograman/{nama}/play', 'Typing\MenuController@pemrograman')->name('playpemrograman');
        Route::group(['prefix'=> 'menuplay'], function () {
            Route::get('/playcustom', 'Typing\MenuController@getplaycustom')->name('indexplaycustom');
            Route::get('/kesulitan', 'Typing\MenuController@getkesulitan')->name('tingkatkesulitan');
            Route::post('/gantibahasa/{id}', 'Typing\PlayingController@ubahbahasa')->name('ubahbahasa');
        });
        Route::resource('/custom', 'Typing\CustomController');
        Route::resource('/level', 'Admin\LevelController');
        Route::resource('/user', 'User\UserController');
        Route::resource('/role', 'Admin\RoleController');
        Route::resource('/character', 'Admin\TypeController');
        Route::resource('/bahasa', 'Admin\BahasaController');
        Route::resource('/pemrograman', 'Admin\PemrogramanController');
        Route::resource('/statistik', 'Typing\StatistikController');
        Route::resource('/notifikasi', 'Admin\NotifikasiController');
    // });
});

// beta
Route::get('/beta', 'Typing\MenuController@getbeta')->name('indexbeta');
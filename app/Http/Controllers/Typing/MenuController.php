<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //beta
    public function getbeta(){
        return view('beta.index');
    }

    //
    public function getmenu(){
        $kata = 'apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini';
        $jumlahkata = strlen($kata);
        return view('layouts.menu', compact('kata', 'jumlahkata'));
    }
    public function getkesulitan(){
        return view('user.menu.kesulitan');
    }
    public function getplay(){
        return view('user.menu.select');
    }
    public function getcustom(){
        return view('user.custom.index');
    }
    public function getpemrograman(){
        return view('user.pemrograman.index');
    }
    public function getphp(){

        $kata = 'apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini';
        $jumlahkata = strlen($kata);
        return view('user.pemrograman.php', compact('kata', 'jumlahkata'));
    }
    public function getjs(){
        return view('user.pemrograman.js');
    }
}
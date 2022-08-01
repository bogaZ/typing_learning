<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use App\Bahasa;
use App\Statistik;
use Auth;

class MenuController extends Controller
{
    //beta
    public function getbeta(){
        $test = karakter::all();
        return view('beta.index', compact('test'));
    }

    // menuplay. play bot or play custom
    public function getplay(){
        return view('user.menu.select');
    }
    // menu play bot easy normal hard pemrograman
    public function getkesulitan(){
        return view('user.menu.kesulitan');
    }
    // menu play custom
    public function getplaycustom(){
        $id = Auth::user()->id;
        // $karakter = karakter::find($id);
        $dataall = karakter::all()->where('user_id', $id);
        return view('user.playwithcustom.index', compact('dataall'));
    }
    public function getmenu(){
        $kata = 'apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini apakah saya akan makan hari ini';
        $jumlahkata = strlen($kata);
        return view('layouts.menu', compact('kata', 'jumlahkata'));
    }
    public function getcustom(){
        $uid = Auth::user()->id;
        $alldata = karakter::where(['user_id' => $uid]);
        
        return view('user.custom.index', compact('alldata'));
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
        $uid = Auth::user();
        $allbahasa = Bahasa::where('id', '!=', 1)->get();
        $bahasaindonesia = 2;
        $bahasainggris = 3;
        $statistik = Statistik::all();
        $kata = karakter::where(['type_id' => 5])->get();
        // $getkata = karakter::where(['type_id' => 5])->get();
        // $kata = htmlentities($getkata);
        return view('user.pemrograman.javascript', compact('kata', 'statistik', 'uid', 'bahasaindonesia', 'bahasainggris', 'allbahasa'));
    }

}

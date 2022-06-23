<?php

namespace App\Http\Controllers\Typing;

use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;

class PlayingController extends Controller
{
    //easy mode
    public function playmudah(){
        // $katas = karakter::where('type_id', 2)->inRandomOrder()->limit(1)->get();
        // foreach($katas as $data){
        //     $kata = $data->karakter;
        // }
        // $jumlahkata = strlen($kata);
        $kata = karakter::where('type_id', 2)->get();
        return view('user.play.easy', compact('kata'));
    }
    //normal mode
    public function playnormal(){
        // $katas = karakter::where('type_id', 2)->inRandomOrder()->limit(1)->get();
        // foreach($katas as $data){
        //     $kata = $data->karakter;
        // }
        $kata = karakter::where('type_id', 2)->get();
        // $jumlahkata = strlen($kata);
        return view('user.play.normal', compact('kata'));
    }
    //susah mode
    public function playsusah(){
        $katas = karakter::where('type_id', 4)->inRandomOrder()->limit(1)->get();
        foreach($katas as $data){
            $kata = $data->karakter;
        }
        $jumlahkata = strlen($kata);
        return view('user.play.hard', compact('kata', 'jumlahkata'));
    }
    //custom mode
    public function playcustom(){
        return view('user.playwithcustom.index');
    }
}

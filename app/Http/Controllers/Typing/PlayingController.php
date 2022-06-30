<?php

namespace App\Http\Controllers\Typing;

use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use App\User;
use App\Bahasa_user;
use Auth;

class PlayingController extends Controller
{
    //easy mode
    public function playmudah(){
        // $katas = karakter::where('type_id', 2)->inRandomOrder()->limit(1)->get();
        // foreach($katas as $data){
        //     $kata = $data->karakter;
        // }
        // $jumlahkata = strlen($kata);
        $uid = Auth::user();
        $bahasaindonesia = 2;
        $bahasainggris = 3;
        // $bahasa = Bahasa_user::where('user_id', $uid)->get();
        $kata = karakter::where(['type_id' => 2, 'bahasa_id' => $uid->bahasa_id])->get();
        return view('user.play.easy', compact('kata', 'uid', 'bahasaindonesia', 'bahasainggris'));
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
    public function ubahbahasa(Request $request, $id){
        // $uid = Auth::user()->id;
        $bahasa = User::find($id);
        $bahasa->bahasa_id = $request->bahasa;
        $bahasa->save();
        return back();
    }
}

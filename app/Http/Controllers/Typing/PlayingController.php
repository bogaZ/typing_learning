<?php

namespace App\Http\Controllers\Typing;

use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use App\User;
use App\Bahasa;
use App\Level;
use App\Bahasa_user;
use App\Statistik;
use Auth;

class PlayingController extends Controller
{
    //easy mode
    public function playmudah(){
        // if (Auth::user()->email_verified_at == null) {
        //     return redirect()->route('verification.notice');
        // }
        if(Auth::guest()){
            // return view('home');
        }elseif (Auth::user()->email_verified_at == null) {
            return redirect()->route('verification.notice');
        }
        $uid = Auth::user();
        $allbahasa = Bahasa::where('id', '!=', 1)->get();
        $bahasaindonesia = 2;
        $bahasainggris = 3;
        $statistik = Statistik::where(['user_id' => Auth::user()->id, 'kesulitan' => 'mudah'])->max('speed_typing');
        if(Auth::guest()){
            $kata = karakter::where(['type_id' => 2])->get();
            return view('user.play.easy', compact('kata', 'uid', 'bahasaindonesia', 'bahasainggris', 'allbahasa'));
        }
        $username = $uid->name;

        if($statistik == null | $statistik == 0){
            $alllevel = 1;
        }else{
            $alllevel = Level::where('score', '<=', $statistik)->max('level');
        }
        
        $kata = karakter::where(['type_id' => 2, 'bahasa_id' => $uid->bahasa_id])->get();
        return view('user.play.easy', compact('kata', 'alllevel', 'statistik', 'username', 'uid', 'bahasaindonesia', 'bahasainggris', 'allbahasa'));
    }
    //normal mode
    public function playnormal(){
        $uid = Auth::user();
        $allbahasa = Bahasa::where('id', '!=', 1)->get();
        $bahasaindonesia = 2;
        $bahasainggris = 3;
        // $statistik = Statistik::all();
        $statistik = Statistik::where(['user_id' => Auth::user()->id, 'kesulitan' => 'normal'])->max('speed_typing');
        $back = Statistik::where(['user_id' => Auth::user()->id, 'kesulitan' => 'mudah'])->max('speed_typing');
        if($back == null){
            // return json_encode($back);
            return redirect()->route('home');
        }else{
            $returnBack = Level::where('score', '<=', $back)->max('level');
            if($returnBack < 3){
                return redirect()->route('home');
            }
        }
        if($statistik == null | $statistik == 0){
            $alllevel = 1;
        }else{
            $alllevel = Level::where('score', '<=', $statistik)->max('level');
        }

        $kata = karakter::where(['type_id' => 3, 'bahasa_id' => $uid->bahasa_id])->get();
        return view('user.play.normal', compact('kata', 'alllevel', 'statistik', 'uid', 'bahasaindonesia', 'bahasainggris', 'allbahasa'));
    }
    //susah mode
    public function playsusah(){
        $uid = Auth::user();
        $allbahasa = Bahasa::where('id', '!=', 1)->get();
        $bahasaindonesia = 2;
        $bahasainggris = 3;
        // $bahasa = Bahasa_user::where('user_id', $uid)->get();
        // $statistik = Statistik::all();
        $statistik = Statistik::where(['user_id' => Auth::user()->id, 'kesulitan' => 'susah'])->max('speed_typing');
        $back = Statistik::where(['user_id' => Auth::user()->id, 'kesulitan' => 'normal'])->max('speed_typing');
        
        // return json_encode($back);
        // if($statistik == null | $statistik == 0){
        //     $alllevel = 1;
        //     $returnBack = Level::where('score', '<=', $back)->max('level');
        //     if($returnBack < 3){
        //         return redirect()->route('home');
        //     }
        // }else{
        //     $alllevel = Level::where('score', '<=', $statistik)->max('level');
        // }

        if($back == null){
            // return json_encode($back);
            return redirect()->route('home');
        }else{
            $returnBack = Level::where('score', '<=', $back)->max('level');
            if($returnBack < 3){
                return redirect()->route('home');
            }
        }
        if($statistik == null | $statistik == 0){
            $alllevel = 1;
        }else{
            $alllevel = Level::where('score', '<=', $statistik)->max('level');
        }

        $kata = karakter::where(['type_id' => 4, 'bahasa_id' => $uid->bahasa_id])->get();
        return view('user.play.hard', compact('kata', 'alllevel', 'statistik', 'uid', 'bahasaindonesia', 'bahasainggris', 'allbahasa'));
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

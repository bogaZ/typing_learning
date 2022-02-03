<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayingController extends Controller
{
    //
    public function playmudah(){
        return view('user.play.easy');
    }
    public function playnormal(){
        return view('user.play.normal');
    }
    public function playsusah(){
        return view('user.play.hard');
    }
    public function playcustom(){
        return view('user.playwithcustom.index');
    }
}

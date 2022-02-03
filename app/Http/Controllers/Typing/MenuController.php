<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function getmenu(){
        return view('layouts.menu');
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
}

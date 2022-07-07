<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Statistik;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:admin',['only'=>['index']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $username = Auth::user()->name;
        $jumlahuser = User::all()->count();
        $jumlahmengetik = Statistik::all()->count();
        return view('home', compact('username', 'jumlahuser', 'jumlahmengetik'));
    }
}

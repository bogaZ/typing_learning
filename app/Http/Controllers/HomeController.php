<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Statistik;
use App\karakter;
use DB;
use Carbon\Carbon;

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
        $karakter = karakter::all();
        // $tesjumlah = Statistik::GroupBy(DB::raw("Day(created_at)"))->count();
        $tesjumlah = Statistik::whereYear('created_at', date('Y'))->get();

        $tahunsekarang = date('Y');
        $users = Statistik::select('id', 'created_at')->whereYear('created_at', $tahunsekarang)
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('m');
        });

        $usermcount = [];
        $userArreasy = [];

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        for ($i = 0; $i <= 11; $i++) {
            if (!empty($usermcount[$i])) {
                $userArreasy[$i]["jumlah"] = $usermcount[$i];
            } else {
                $userArreasy[$i]["jumlah"] = 0;
            }
        }
        return view('home', compact('username', 'jumlahuser', 'jumlahmengetik', 'karakter', 'month', 'users', 'userArreasy'));
    }
}

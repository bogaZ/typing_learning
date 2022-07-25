<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Statistik;
use App\karakter;
use App\type;
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
        $user = Auth::user();
        $username = $user->name;
        $uid = $user->id;
        $statistik = Statistik::where('user_id', $uid)->max('speed_typing');

        $jumlahuser = User::all()->count();
        $jumlahmengetik = Statistik::all()->count();
        $karakter = karakter::all();
        $type = type::all();
        // $tesjumlah = Statistik::GroupBy(DB::raw("Day(created_at)"))->count();
        $tesjumlah = Statistik::whereYear('created_at', date('Y'))->get();

        $tahunsekarang = date('Y');
        $users = Statistik::select('id', 'created_at')->whereYear('created_at', $tahunsekarang)
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('m');
        });

        // $stats = Statistik::where('karakter_id', 8);

        $highScoremudah = Statistik::where('kesulitan', 'mudah')->whereDate('created_at', date('Y-m-d'));
        $highScorenormal = Statistik::where('kesulitan', 'normal')->whereDate('created_at', date('Y-m-d'));
        $highScoresusah = Statistik::where('kesulitan', 'susah')->whereDate('created_at', date('Y-m-d'));
        
        $scoreStats = array();
        foreach ($type as $key => $value){
            // $scoreStats[(int)$key] = $value->id;
            $scoreStats[(int)$key]["id"] = $value->id;
            $scoreStats[(int)$key]["nama"] = $value->name;
            if($value->id == 2){
                if($highScoremudah->max('speed_typing') == null){
                    $scoreStats[(int)$key]["high_score"] = 0;
                }else{
                    $scoreStats[(int)$key]["high_score"] = $highScoremudah->max('speed_typing');
                }
                $scoreStats[(int)$key]["jumlah_dimainkan"] = $highScoremudah->count();
            }elseif($value->id == 3){
                if($highScorenormal->max('speed_typing') == null){
                    $scoreStats[(int)$key]["high_score"] = 0;
                }else{
                    $scoreStats[(int)$key]["high_score"] = $highScorenormal->max('speed_typing');
                }
                $scoreStats[(int)$key]["jumlah_dimainkan"] = $highScorenormal->count();
            }elseif($value->id == 4){
                if($highScoresusah->max('speed_typing') == null){
                    $scoreStats[(int)$key]["high_score"] = 0;
                }else{
                    $scoreStats[(int)$key]["high_score"] = $highScoresusah->max('speed_typing');
                }
                $scoreStats[(int)$key]["jumlah_dimainkan"] = $highScoresusah->count();
            }else{
                $scoreStats[(int)$key]["high_score"] = 0;
                $scoreStats[(int)$key]["jumlah_dimainkan"] = 0;
            }
            // $scoreStats[(int)$key] = $value->name;
        }
        $scoreStats = json_decode(json_encode($scoreStats), true);

        $usermcount = [];
        $userArreasy = [];
        

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        for ($i = 0; $i <= 11; $i++) {
            if (!empty($usermcount[$i])) {
                $userArreasy[$i]["jumlah$i"] = $usermcount[$i];
            } else {
                $userArreasy[$i]["jumlah$i"] = 0;
            }
        }
        // return json_encode($scoreStats);
        return view('home', compact('username', 'statistik', 'type', 'jumlahuser', 'jumlahmengetik', 'karakter', 'month', 'users', 'userArreasy', 'scoreStats'));
    }
}

<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Statistik;
use App\Activity;
use Carbon\Carbon;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $uid = Auth::user()->id;
        if($uid == 1){
            $username = Auth::user()->username;
            $alldata = Statistik::orderBy('created_at', 'DESC')->get();
            return view('admin.statistik.index', compact('username', 'alldata'));
        }
        
        $easy = Statistik::where('user_id', $uid)->where('kesulitan', 'mudah')->orderBy('created_at', 'DESC')->limit(10)->get();
        $normal = Statistik::where('user_id', $uid)->where('kesulitan', 'normal')->orderBy('created_at', 'DESC')->limit(10)->get();
        $hard = Statistik::where('user_id', $uid)->where('kesulitan', 'susah')->orderBy('created_at', 'DESC')->limit(10)->get();
        $pemrograman = Statistik::where('user_id', $uid)->where('kesulitan', 'pemrograman')->orderBy('created_at', 'DESC')->limit(10)->get();
        $alldata = Statistik::where('user_id', $uid)->orderBy('created_at', 'DESC')->get();

        $datastatistik = Statistik::where('user_id', $uid)->select('id', 'created_at')->get()->groupBy(function($date) {
            //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
            return Carbon::parse($date->created_at)->format('m'); // grouping by months
        });
        $usermcount = [];
        $userArr = [];

        foreach ($datastatistik as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($usermcount[$i])){
                $userArr[$i] = $usermcount[$i];    
            }else{
                $userArr[$i] = 0;    
            }
        }
        $maxnilai = Statistik::get();
        return view('user.statistik.index', compact('uid', 'pemrograman', 'alldata', 'maxnilai', 'userArr', 'easy', 'normal', 'hard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Statistik::create($request->all());
        $uid = Auth::user()->id;
        // $kesulitan = type::all();

        $data = new Statistik;

        $data->speed_typing = $request->typing;
        // $data->speed_typing = 2;
        $data->time = $request->time;
        $data->karakter_id = $request->karakter_id;
        // $data->kesulitan = $kesulitan->where('id', $request->karakter_id)->get('name');
        $data->kesulitan = $request->kesulitan;

        $data->user_id = $uid;
        $data->save();

        $log = new Activity;
        $log->user_id = $uid;
        $log->activity = "store";
        $log->log = "mengetik karakter dengan id statistik ". $data->id ;
        $log->save();


        
        return response()->json($data);
        // return response()->json(['success'=>'Got Simple Ajax Request.']);
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

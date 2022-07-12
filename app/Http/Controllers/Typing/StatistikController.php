<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Statistik;
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
        $alldata = Statistik::where('user_id', $uid)->orderBy('created_at', 'DESC')->get();
        // $date = today();
        // $alldata = Statistik::where('user_id', $uid)->orderBy('created_at', 'DESC')->whereDate('created_at', Carbon::now()->subDays(4))->get();
        return view('user.statistik.index', compact('uid', 'alldata'));
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

        $data = new Statistik;

        $data->speed_typing = $request->typing;
        // $data->speed_typing = 2;
        $data->time = $request->time;
        $data->karakter_id = $request->karakter_id;

        $data->user_id = $uid;
        $data->save();
        
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

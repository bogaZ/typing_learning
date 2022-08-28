<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Level;
use Auth;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->id != 1){
            abort(404);
        }
        $uid = Auth::user();
        $username = $uid->name;
        $alldata = Level::all();
        return view('admin.level.index', compact('alldata', 'username'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::user()->id != 1){
            abort(404);
        }
        $uid = Auth::user();
        $username = $uid->name;
        return view('admin.level.create', compact('username'));
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
        if(Auth::user()->id != 1){
            abort(404);
        }
        $level = new Level();
        $level->level = $request->level;
        $level->score = $request->score;
        $level->save();

        return redirect()->route('level.index')->with('sukses', 'Level berhasil ditambahkan!');
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
        if(Auth::user()->id != 1){
            abort(404);
        }
        $uid = Auth::user();
        $username = $uid->name;
        $data = Level::find($id);
        return view('admin.level.edit', compact('username', 'data'));
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
        if(Auth::user()->id != 1){
            abort(404);
        }
        $level = Level::find($id);
        $level->level = $request->level;
        $level->score = $request->score;
        $level->save();

        return redirect()->route('level.index')->with('sukses', 'Level berhasil diubah!');
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
        if(Auth::user()->id != 1){
            abort(404);
        }
    }
}

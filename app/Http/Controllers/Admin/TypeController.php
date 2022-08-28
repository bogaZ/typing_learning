<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use App\type;
use Auth;

class TypeController extends Controller
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
        $alldata = type::all();
        $username = Auth::user()->name;
        return view('admin.charactertext.index', compact('username', 'alldata'));
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
        $username = Auth::user()->name;
        return view('admin.charactertext.create', compact('username'));
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
        $typecharacter = new type();
        $typecharacter->name = $request->name;
        $typecharacter->save();

        return redirect()->route('character.index')->with('sukses', 'tingkat kesulitan berhasil dibuat!');
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
        $username = Auth::user()->name;
        $data = type::find($id);
        return view('admin.charactertext.edit', compact('username', 'data'));
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
        $typecharacter = type::find($id);
        $typecharacter->score = $request->name;
        $typecharacter->save();

        return redirect()->route('character.index')->with('sukses', 'tingkat kesulitan berhasil diubah!');
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
        $hapus = type::find($id);
        $hapus->delete();

        return back()->with('sukses', 'tingkat kesulitan berhasil dihapus');
    }
}

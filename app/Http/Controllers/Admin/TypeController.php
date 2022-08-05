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
        $typecharacter = new type();
        $typecharacter->name = $request->name;
        $typecharacter->save();

        return redirect()->route('character.index')->with('sukses', 'type berhasil dibuat!');
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
        $typecharacter = type::find($id);
        $typecharacter->name = $request->name;
        $typecharacter->save();

        return redirect()->route('character.index')->with('sukses', 'type berhasil diubah!');
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
        $hapus = type::find($id);
        $hapus->delete();

        return back()->with('sukses', 'Karakter berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bahasa;
use Auth;

class BahasaController extends Controller
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
        $alldata = Bahasa::all();
        $username = Auth::user()->name;
        
        return view('admin.bahasa.index', compact('username', 'alldata'));
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
        return view('admin.bahasa.create', compact('username'));
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
        $bahasa = new Bahasa();
        $bahasa->bahasa = $request->name;
        $bahasa->save();

        return redirect()->route('bahasa.index')->with('sukses', 'type berhasil dibuat!');
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
        if(Auth::user()->id != 1){
            abort(404);
        }
        $hapus = Bahasa::find($id);
        $hapus->delete();

        return back()->with('sukses', 'Bahasa berhasil dihapus');
    }
}

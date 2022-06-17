<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use Auth;

class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('role:admin',['only'=>['index']]);
    //     $this->middleware('role:admin',['only'=>['create', 'store']]);
    //     $this->middleware('role:admin',['only'=>['edit', 'update']]);
    //     $this->middleware('role:admin',['only'=>['destroy']]);
    // }
     
    public function index()
    {
        //
        // $tanggal = ['']
        $namakarakter = karakter::all()->where('user_id', Auth::user()->id);
        return view('user.custom.index', compact('namakarakter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $userid = Auth::user()->id;

        return view('user.custom.create', compact('userid'));
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
        $karakter = new karakter;
        $karakter->user_id = Auth::User()->id;
        $karakter->karakter = $request->karakter;
        $karakter->nama = $request->nama;
        $karakter->save();

        return redirect('home')->with('sukses', 'Karakter berhasil dibuat');
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
        $hapus = karakter::find($id);
        $hapus->delete();

        return redirect('home')->with('sukses', 'Karakter berhasil dibuat');
    }
}

<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use App\User;
use App\type;
use App\Bahasa;
use Auth;
use DB;

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
        $alldata = karakter::all();
        $username = Auth::user()->name;
        // return view('admin.charactertext.index', compact('username', 'alldata'));

        $namakarakter = karakter::all()->where('user_id', Auth::user()->id);
        return view('user.custom.index', compact('namakarakter', 'alldata', 'username'));
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
        $coba = User::first();
        $username = Auth::user()->name;
        $typecharacter = type::all();
        $allbahasa = Bahasa::all();
        return view('user.custom.create', compact('userid', 'coba', 'username', 'allbahasa', 'typecharacter'));
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
        $userid = Auth::user()->id;
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        $karakter = new karakter;
        $karakter->user_id = Auth::User()->id;
        $karakter->karakter = $request->karakter;
        $karakter->nama = $request->nama;
        if($role_id == 1){
            $karakter->bahasa_id = $request->bahasa;
            $karakter->type_id = $request->typecharacter;
            $karakter->save();
            
            return back()->with('sukses', 'Karakter berhasil dibuat');
        }
        $karakter->bahasa_id = "1";
        $karakter->type_id = "1";
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
        $karakter = karakter::find($id);
        return view('user.custom.show', compact('karakter'));
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
        $karakter = karakter::find($id);
        $username = Auth::user()->name;
        $typecharacter = type::all();
        return view('user.custom.edit', compact('username', 'karakter', 'typecharacter'));
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

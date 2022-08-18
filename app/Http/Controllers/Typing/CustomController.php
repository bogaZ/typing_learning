<?php

namespace App\Http\Controllers\Typing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\karakter;
use App\User;
use App\type;
use App\Bahasa;
use App\Activity;
use App\Pemrograman;
use App\Statistik;
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
        $alldata = karakter::orderBy('created_at', 'DESC')->get();
        $username = Auth::user()->name;
        // return view('admin.charactertext.index', compact('username', 'alldata'));
        $namakarakter = karakter::all()->where('user_id', Auth::user()->id);
        $userid = Auth::user()->id;
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        if($role_id == 1){
            return view('admin.custom.index', compact('namakarakter', 'alldata', 'username'));
        }
        $alldata = karakter::where('user_id', Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
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
        $allpemrograman = Pemrograman::all();
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        if($role_id == 1){
            return view('admin.custom.create', compact('userid', 'allpemrograman', 'coba', 'username', 'allbahasa', 'typecharacter'));
        }
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
        // karakter
        // nama
        // typecharacter
        // bahasa
        
        $userid = Auth::user()->id;
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        if($role_id == 1){
            $this->validate($request, [
                'karakter'=> 'required',
                'nama'=> 'required',
                'typecharacter'=> 'required',
                'bahasa'=> 'required',
            ]);
        }


        $karakter = new karakter;
        $karakter->user_id = Auth::User()->id;

        $karakter->karakter = $request->karakter;
        $karakter->nama = $request->nama;
        // return json_encode($karakter);

        $log = new Activity;
        $log->user_id = $userid;
        $log->activity = "store";
        if($role_id == 1){
            $karakter->bahasa_id = $request->bahasa;
            $karakter->pemrograman_id = $request->pemrograman;
            $karakter->type_id = $request->typecharacter;
            $karakter->save();
            $log->log = "Admin membuat karakter baru (custom) yang memiliki id ". $karakter->id ;
            $log->save();
            
            return back()->with('sukses', 'Karakter berhasil dibuat');
        }
        $karakter->bahasa_id = "1";
        $karakter->type_id = "1";
        $karakter->save();
        $log->log = "User membuat karakter baru (custom) yang memiliki id ". $karakter->id ;
        // $log->log = "User". Auth::user()->name ."membuat karakter baru (custom) yang memiliki id ". $karakter->id ;
        $log->save();
        
        return redirect()->route('custom.index')->with('sukses', 'Karakter berhasil dibuat');
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
        $userid = Auth::user()->id;
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        if($role_id == 1){
            return view('admin.custom.show', compact('karakter'));
        }
        $uid = Auth::user()->id;
        $statistik = Statistik::all();
        $kata = karakter::find($id);
        
        $log = new Activity;
        $log->user_id = $userid;
        $log->activity = "show";
        $log->log = "user bermain karakter custom yang memiliki id ". $kata->id ;
        $log->save();
        return view('user.custom.show', compact('karakter', 'kata', 'id', 'uid', 'statistik'));
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
        $userid = Auth::user()->id;
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        if($role_id == 1){
            return view('admin.custom.edit', compact('username', 'karakter', 'typecharacter'));
        }
        $log = new Activity;
        $log->user_id = $userid;
        $log->activity = "edit";
        $log->log = "user ingin mengubah karakter custom yang memiliki id ". $karakter->id ;
        $log->save();
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
        $userid = Auth::user()->id;
        $role_id = DB::table('model_has_roles')->where('model_id', $userid)->value('role_id');
        $karakter = karakter::find($id);
        $karakter->karakter = $request->karakter;
        $karakter->nama = $request->nama;

        $log = new Activity;
        $log->user_id = $userid;
        $log->activity = "update";
        if($role_id == 1){
            // $karakter->bahasa_id = $request->bahasa;
            $karakter->pemrograman_id = $request->pemrograman;
            $karakter->type_id = $request->typecharacter;
            $karakter->save();
            $log->log = "Admin update karakter (custom) yang memiliki id ". $karakter->id ;
            $log->save();
            
            return back()->with('sukses', 'Karakter berhasil diupdate');
        }
        $karakter->save();
        $log->log = "user update karakter (custom) yang memiliki id ". $karakter->id ;
        $log->save();
        
        return redirect()->route('custom.index')->with('sukses', 'Karakter berhasil diupdate');
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
        $userid = Auth::user()->id;
        $hapus = karakter::find($id);
        $hapus->delete();

        if($userid != 1){
            $log = new Activity;
            $log->user_id = $userid;
            $log->activity = "delete";
            $log->log = "user menghapus karakter custom yang memiliki id ". $hapus->id ;
            $log->save();
            return redirect()->route('custom.index')->with('sukses', 'Karakter berhasil dihapus');
        }
        $log = new Activity;
        $log->user_id = $userid;
        $log->activity = "delete";
        $log->log = "Admin menghapus karakter custom yang memiliki id ". $hapus->id ;
        $log->save();

        return redirect()->route('custom.index')->with('sukses', 'Karakter berhasil dihapus');
    }
}

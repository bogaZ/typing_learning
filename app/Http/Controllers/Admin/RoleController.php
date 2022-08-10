<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Role;

class RoleController extends Controller
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
        $username = Auth::user()->name;
        $alldata = DB::table('roles')->get();
        // $alldata =
        return view('admin.role.index', compact('alldata', 'username'));
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
        $alldata = DB::table('roles')->get();
        // $alldata =
        return view('admin.role.create', compact('alldata', 'username'));
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
        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->save();

        return redirect()->route('role.index')->with('sukses', 'type berhasil dibuat!');
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
        $role = Role::find($id);
        $username = Auth::user()->name;
        $alldata = DB::table('roles')->get();
        // $alldata =
        return view('admin.role.edit', compact('alldata', 'role', 'username'));
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
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        return redirect()->route('role.index')->with('sukses', 'type berhasil diubah!');
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
        $hapus = Role::find($id);
        $hapus->delete();

        return back()->with('sukses', 'Karakter berhasil dihapus');
    }
}

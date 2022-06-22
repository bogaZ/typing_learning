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
        $username = Auth::user()->name;
        $alldata = DB::table('roles')->get();
        // $alldata =
        return view('admin.role.edit', compact('alldata', 'username'));
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
        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->save();

        return redirect()->route('role.index')->with('sukses', 'type berhasil dibuat!');
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

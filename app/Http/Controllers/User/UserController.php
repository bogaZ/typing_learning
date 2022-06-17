<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alldata = User::all();
        $username = Auth::user()->name;
        return view('admin.user.index', compact('alldata', 'username'));
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
        $role = Role::all();
        return view('admin.user.create', compact('username', 'role'));
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
        $user = new User();
        $user->name = $request->nama;
        $user->email =  $request->email;
        $user->assignRole($request->role);
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index')->with('sukses', 'User berhasil dibuat!');
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
        $user = User::find($id);
        $role = Role::all();
        $userrole = DB::table('model_has_roles')->select('role_id')->where('model_id',$id)->value('role_id');
        return view('admin.user.edit', compact('username', 'user', 'role', 'userrole'));
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
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user = User::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->assignRole($request->role);
        $user->password = Hash::make($request->password);
        $user->update();

        return redirect()->route('user.index')->with('sukses', 'User berhasil diubah!');
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
        User::find($id)->delete();

        return back()->with('sukses', 'User berhasil dihapus!');
        // User::find($id)->delete;
    }
}
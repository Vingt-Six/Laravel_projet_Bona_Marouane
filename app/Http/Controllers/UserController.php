<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $avatars = Avatar::all();
        return view('pages.user.user', compact('users', 'avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = User::find($id);
        $this->authorize('admin-user', $show);
        $avatar = Avatar::all();
        return view('pages.user.show', compact('show', 'avatar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        $this->authorize('admin-user', $edit);
        $avatars = Avatar::all();
        return view('pages.user.edit', compact('edit', 'avatars'));
    }

    public function edituser($id)
    {
        $edit = User::find($id);
        $this->authorize('admin-user', $edit);
        $avatars = Avatar::all();
        $roles = Role::all();
        return view('pages.user.edituser', compact('edit', 'avatars', 'roles'));
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
        $update = User::find($id);
        $update -> name = $request -> name;
        $update -> firstname = $request -> firstname;
        $update -> age = $request -> age;
        $update -> email = $request -> email;
        $update -> avatar_id = $request -> avatar_id;
        $update -> save();
        return redirect('/dashboard');
    }

    public function updateuser(Request $request, $id)
    {
        $updateuser = User::find($id);
        $this->authorize('admin-user', $updateuser);
        $updateuser -> name = $request -> name;
        $updateuser -> firstname = $request -> firstname;
        $updateuser -> age = $request -> age;
        $updateuser -> email = $request -> email;
        $updateuser -> avatar_id = $request -> avatar_id;
        $updateuser -> save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $this->authorize('admin-user', $delete);
        $delete -> delete();
        return redirect()->back();
    }
}

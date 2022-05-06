<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function __construct() {
        $this->middleware('admin.co');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();
        return view('pages.avatar.avatar', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.avatar.createavatar');
    }

    public function createurl()
    {
        return view('pages.avatar.createavatarurl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:30',
            'src' => 'required',
        ]);

        $store = new Avatar();
        $store -> name = $request -> name;
        $store -> src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $store -> url = null;
        $store -> save();
        return redirect('/avatar')->with('success', 'Avatar créer avec succès');
    }

    public function storeurl(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:30',
            'url' => 'required',
        ]);

        $store = new Avatar();
        $store -> name = $request -> name;
        $file = $request->name . '.png';
        $content = file_get_contents($request->url);
        $store->url = file_put_contents('storage/'. $file, $content);
        $store -> src = null;
        $store -> save();
        return redirect('/avatar')->with('success', 'Avatar créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(Avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(Avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avatar $avatar)
    {
        $avatar -> delete();
        if ($avatar->id > 6) {
            Storage::delete('public/'. $avatar->src);
        }
        return redirect()->back()->with('danger', 'Avatar supprimer avec succès');
    }
}

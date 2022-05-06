<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        return view('pages.galerie.galerie', compact('images'));
    }

    public function indexchoice() {
        return view('pages.image.choice');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('pages.image.createimage', compact('categories'));
    }

    public function createurl()
    {
        $categories = Categorie::all();
        return view('pages.image.createimageurl', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Image();
        $store->name = $request->name;
        $store -> src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $store -> url = null;
        $store->categorie_id = $request->categorie_id;
        $store->save();
        return redirect('/galerie');
    }

    public function storeurl(Request $request)
    {
        $store = new Image();
        $store->name = $request->name;
        $file = $request->name . '.png';
        $content = file_get_contents($request->url);
        $store->url = file_put_contents('storage/' . $file, $content);
        $store->src = null;
        $store->categorie_id = $request->categorie_id;
        $store->save();
        return redirect('/galerie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image -> delete();
        if ($image->id > 4) {
            Storage::delete('public/'. $image->src);
        }
        return redirect()->back();
    }

    public function download($id) {
        $download = Image::find($id);
        return Storage::download('public/'. $download -> src);
    }

    public function downloadurl($id) {
        $dl = Image::find($id);
        return Storage::download('public/'. $dl -> name . '.png');
    }
}

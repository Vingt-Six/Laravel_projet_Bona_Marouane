<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct() {
        $this->middleware('admin.co')->except(['index','download', 'downloadurl']);
    }
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
        $request->validate([
            'name' => 'required|min:1|max:30',
            'src' => 'required',
            'categorie_id' => 'required'
        ]);

        $store = new Image();
        $store->name = $request->name;
        $store -> src = $request->file('src')->hashName();
        Storage::put('public/', $request->file('src'));
        $store -> url = null;
        $store->categorie_id = $request->categorie_id;
        $store->save();
        return redirect('/galerie')->with('success', 'Image ajouter dans la galerie avec succès');
    }

    public function storeurl(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:30',
            'url' => 'required',
            'categorie_id' => 'required'
        ]);

        $store = new Image();
        $store->name = $request->name;
        $file = $request->name . '.png';
        $content = file_get_contents($request->url);
        $store->url = file_put_contents('storage/' . $file, $content);
        $store->src = null;
        $store->categorie_id = $request->categorie_id;
        $store->save();
        return redirect('/galerie')->with('success', 'Image ajouter dans la galerie avec succès');
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
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        if ($image->id > 4) {
            Storage::delete('public/'. $image->src);
        }
        return redirect()->back()->with('danger', 'Image bien supprimer');
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

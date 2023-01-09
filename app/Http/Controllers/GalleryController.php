<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::latest()->get();
        return view('admin.gallery.index', compact('gallery'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create',[
            'gallery' => Gallery::get()
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', [
            'gallery' => $gallery,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        $input = $request->all();

        if (request()->file('image')) {
            $image = request()->file('image');
            $imageUrl = $image->storeAs("img/gallery", Str::slug('Gallery')."-".time().".{$image->extension()}");
        } else{
            $imageUrl = null;
        }
        $input['image'] = "$imageUrl";

        $post = Gallery::create($input);
         
        return redirect()->route('gallery.index')
            ->with('success','Gambar berhasil dibuat!');
    }
    
    public function destroy(Gallery $gallery)
    {
        if($gallery->image && Storage::exists($gallery->image)){
            Storage::delete($gallery->image);
        }

        $gallery->delete();
  
        return redirect()->route('gallery.index')
            ->with('success','Foto berhasil dihapus!');
    }

}

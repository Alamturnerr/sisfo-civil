<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Http\Requests\StoreGaleryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleryController extends Controller

{

    public function _construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries=Galery::get();
        return view("admin.galery.index",compact("galeries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galery.create',[
            'galery' => Galery::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleryRequest $request)
    {
        $input = $request->all();

        if (request()->file('image')) {
            $image = request()->file('image');
            $imageUrl = $image->storeAs("img/galery", Str::slug('Galery')."-".time().".{$image->extension()}");
        } else{
            $imageUrl = null;
        }
        $input['image'] = "$imageUrl";

        $post = Galery::create($input);
         
        return redirect()->route('galery.index')
            ->with('success','Gambar berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleryRequest  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleryRequest $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        if($galery->image && Storage::exists($galery->image)){
            storage::delete($galery->image);
        }

        $galery->delete();

        return redirect()->route('galery.index')
        ->with('success','Foto berhasil dibapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\InformationSystem;
use App\Http\Requests\StoreInformationSystemRequest;
use App\Http\Requests\UpdateInformationSystemRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InformationSystemController extends Controller
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
        $informationSystem = InformationSystem::latest()->get();
        return view('admin.information_system.index',compact('informationSystem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.information_system.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInformationSystemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInformationSystemRequest $request)
    {
        $input = $request->all();

        if (request()->file('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $thumbnailUrl = $thumbnail->storeAs("img/informationSystem", Str::slug($input['title']) . "-" . time() . ".{$thumbnail->extension()}");
        } else {
            $thumbnailUrl = null;
        }
        $input['thumbnail'] = "$thumbnailUrl";

        $event = InformationSystem::create($input);

        return redirect()->route('information_system.index')
            ->with('success', 'Sistem Informasi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InformationSystem  $informationSystem
     * @return \Illuminate\Http\Response
     */
    public function show(InformationSystem $informationSystem)
    {
        return view('admin.information_system.show', compact('informationSystem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InformationSystem  $informationSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(InformationSystem $informationSystem)
    {
        return view('admin.information_system.edit', [
            'informationSystem' => $informationSystem,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInformationSystemRequest  $request
     * @param  \App\Models\InformationSystem  $informationSystem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInformationSystemRequest $request, InformationSystem $informationSystem)
    {
        $input = $request->all();

        if (request()->file('thumbnail')) {
            if($informationSystem->thumbnail && Storage::exists($informationSystem->thumbnail)){
                Storage::delete($informationSystem->thumbnail);
            }
            $thumbnail = request()->file('thumbnail');
            $thumbnailUrl = $thumbnail->storeAs("img/informationSystem", time().".{$thumbnail->extension()}");
        } else{
            $thumbnailUrl = $informationSystem->thumbnail;
        }
        $input['thumbnail'] = "$thumbnailUrl";

        $informationSystem->update($input);

        if ($informationSystem->getChanges() != [])
        {
            return redirect()->route('information_system.show',$informationSystem->id)
            ->with('success','Sistem informasi berhasil diedit!');
    
        } else{
            return redirect()->route('information_system.show',$informationSystem->id)
            ->with('success','-- Tidak ada perubahan --');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InformationSystem  $informationSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(InformationSystem $informationSystem)
    {
        if ($informationSystem->thumbnail && Storage::exists($informationSystem->thumbnail)) {
            Storage::delete($informationSystem->thumbnail);
        }
        
        $informationSystem->delete();

        return redirect()->route('information_system.index')
            ->with('success', 'Sistem Informasi berhasil dihapus!');
    }
}

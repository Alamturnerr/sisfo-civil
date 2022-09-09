<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use App\Models\RepositoryCategory;
use App\Http\Requests\StoreRepositoryRequest;
use App\Http\Requests\UpdateRepositoryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RepositoryController extends Controller
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
        $repositories = Repository::latest()->get();
        return view('admin.repositories.index', compact('repositories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.repositories.create',[
            'categories' => RepositoryCategory::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRepositoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepositoryRequest $request)
    {
        $input = $request->all();

        if (request()->file('file')) {
            $file = request()->file('file');
            $fileUrl = $file->storeAs("pdf/repositories", Str::slug($input['title'])."-".time().".{$file->extension()}");
        } else{
            $fileUrl = null;
        }
        $input['file'] = "$fileUrl";

        $repository = Repository::create($input);
         
        return redirect()->route('repositories.index')
            ->with('success','Repositori berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function show(Repository $repository)
    {
        return redirect()->route('repositories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function edit(Repository $repository)
    {
        return view('admin.repositories.edit', [
            'repository' => $repository,
            'categories' => RepositoryCategory::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRepositoryRequest  $request
     * @param  \App\Models\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepositoryRequest $request, Repository $repository)
    {
        $input = $request->all();

        if (request()->file('file')) {
            if($repository->file && Storage::exists($repository->file)){
                Storage::delete($repository->file);
            }
            $file = request()->file('file');
            $fileUrl = $file->storeAs("pdf/repositories", $input['title'].".{$file->extension()}");
        } else{
            $fileUrl = $repository->file;
        }
        $input['file'] = "$fileUrl";

        $repository->update($input);

        if ($repository->getChanges() != [])
        {
            return redirect()->route('repositories.index')
            ->with('success','Repositori berhasil diedit!');
    
        } else{
            return redirect()->route('repositories.index')
            ->with('success','-- Tidak ada perubahan --');
        }
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repository  $repository
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repository $repository)
    {
        if($repository->file && Storage::exists($repository->file)){
            Storage::delete($repository->file);
        }

        $repository->delete();
  
        return redirect()->route('repositories.index')
            ->with('success','Repositori berhasil dihapus!');
    }
}

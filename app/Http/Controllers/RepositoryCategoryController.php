<?php

namespace App\Http\Controllers;

use App\Models\RepositoryCategory;
use App\Models\Repository;
use App\Http\Requests\StoreRepositoryCategoryRequest;
use App\Http\Requests\UpdateRepositoryCategoryRequest;

class RepositoryCategoryController extends Controller
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
        $repositoryCategories = RepositoryCategory::latest()->get();
        return view('admin.repository_categories.index', compact('repositoryCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.repository_categories.create',[
            'categories' => RepositoryCategory::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRepositoryCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepositoryCategoryRequest $request)
    {
        $input = $request->all();

        $repository_categories = RepositoryCategory::create($input);
         
        return redirect()->route('repository_categories.index')
            ->with('success','Kategori repositori berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepositoryCategory  $repositoryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RepositoryCategory $repositoryCategory)
    {
        $repositories = $repositoryCategory->repositories()->latest()->get();
        return view('admin.repositories.index', [
            'repositories' => $repositories,
            'repositoryCategory' => $repositoryCategory,
            'categories' => RepositoryCategory::get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RepositoryCategory  $repositoryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RepositoryCategory $repositoryCategory)
    {
        return view('admin.repository_categories.edit', [
            'repositoryCategory' => $repositoryCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRepositoryCategoryRequest  $request
     * @param  \App\Models\RepositoryCategory  $repositoryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepositoryCategoryRequest $request, RepositoryCategory $repositoryCategory)
    {
        $input = $request->all();
        $repositoryCategory->update($input);
         
        if ($repositoryCategory->getChanges() != [])
        {
            return redirect()->route('repository_categories.index',$repositoryCategory->slug)
            ->with('success','Kategori repositori berhasil diedit!');
    
        } else{
            return redirect()->route('repository_categories.index')
            ->with('success','-- Tidak ada perubahan --');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RepositoryCategory  $repositoryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepositoryCategory $repositoryCategory)
    {
        $repositories = Repository::get();

        foreach($repositories as $repository){
            if($repository->repository_category_id == $repositoryCategory->id){
                return redirect()->route('repository_categories.index')
                    ->with('error', 'Kategori tidak bisa dihapus! Ada repositori yang memakai kategori tersebut.');
            }
        }
        
        $repositoryCategory->delete();

        return redirect()->route('repository_categories.index')
            ->with('success','Kategori repositori berhasil dihapus!');
    }
}

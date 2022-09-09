<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Models\Post;
use App\Http\Requests\StorePostCategoryRequest;
use App\Http\Requests\UpdatePostCategoryRequest;

class PostCategoryController extends Controller
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
        $post_categories = PostCategory::latest()->get();
        return view('admin.post_categories.index', compact('post_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post_categories.create',[
            'categories' => PostCategory::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostCategoryRequest $request)
    {
        $input = $request->all();
        $input['total_visited'] = 0;

        $post_categories = PostCategory::create($input);
         
        return redirect()->route('post_categories.index')
            ->with('success','Kategori berita berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PostCategory $post_category)
    {
        $posts = $post_category->posts()->latest()->get();
        
        return view('admin.posts.index', [
            'posts' => $posts,
            'post_category' => $post_category,
            'categories' => PostCategory::get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
        return view('admin.post_categories.edit', [
            'postCategory' => $postCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostCategoryRequest  $request
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostCategoryRequest $request, PostCategory $postCategory)
    {
        $input = $request->all();
        $postCategory->update($input);
         
        if ($postCategory->getChanges() != [])
        {
            return redirect()->route('post_categories.index',$postCategory->slug)
            ->with('success','Kategori berita berhasil diedit!');
    
        } else{
            return redirect()->route('post_categories.index',$postCategory->slug)
            ->with('success','-- Tidak ada perubahan --');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $postCategory)
    {
        $posts = Post::get();

        foreach($posts as $post){
            if($post->post_category_id == $postCategory->id){
                return redirect()->route('post_categories.index')
                    ->with('error', 'Kategori tidak bisa dihapus! Ada berita yang memakai kategori tersebut.');
            }
        }
        
        $postCategory->delete();

        return redirect()->route('post_categories.index')
            ->with('success','Kategori berita berhasil dihapus!');
    }
}

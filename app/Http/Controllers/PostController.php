<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
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
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create',[
            'categories' => PostCategory::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $input = $request->all();
        $input['total_visited'] = 0;

        if (request()->file('thumbnail')) {
            $thumbnail = request()->file('thumbnail');
            $thumbnailUrl = $thumbnail->storeAs("img/posts", Str::slug($input['title'])."-".time().".{$thumbnail->extension()}");
        } else{
            $thumbnailUrl = null;
        }
        $input['thumbnail'] = "$thumbnailUrl";

        $post = Post::create($input);
         
        return redirect()->route('posts.index')
            ->with('success','Berita berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => PostCategory::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $input = $request->all();

        if (request()->file('thumbnail')) {
            if($post->thumbnail && Storage::exists($post->thumbnail)){
                Storage::delete($post->thumbnail);
            }
            $thumbnail = request()->file('thumbnail');
            $thumbnailUrl = $thumbnail->storeAs("img/posts", time().".{$thumbnail->extension()}");
        } else{
            $thumbnailUrl = $post->thumbnail;
        }
        $input['thumbnail'] = "$thumbnailUrl";

        $post->update($input);

        if ($post->getChanges() != [])
        {
            return redirect()->route('posts.show',$post->slug)
            ->with('success','Berita berhasil diedit!');
    
        } else{
            return redirect()->route('posts.show',$post->slug)
            ->with('success','-- Tidak ada perubahan --');
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->thumbnail && Storage::exists($post->thumbnail)){
            Storage::delete($post->thumbnail);
        }

        $post->delete();
  
        return redirect()->route('posts.index')
            ->with('success','Berita berhasil dihapus!');
    }
}

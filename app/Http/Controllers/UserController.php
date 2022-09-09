<?php

namespace App\Http\Controllers;

use App\Models\RepositoryCategory;
use App\Models\PostCategory;
use App\Models\Repository;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Job;
use App\Models\Event;
use App\Models\InformationSystem;

class UserController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('user/home', compact('posts'));
    }

    public function profile()
    {
        $profile = Profile::get()->first();
        return view('user/profile', compact('profile'));
    }

    public function posts()
    {
        $posts = Post::latest()->get();
        $post_popular=Post::orderBy('total_visited','desc')->get();
        $posts_page = Post::latest()->Filter(request(['search']))->paginate(10)->withQueryString();
        $post_categories = PostCategory::latest()->get();

        $postPerCategoriesTotal = [];
        foreach ($post_categories as $post_category) {
            array_push($postPerCategoriesTotal, Post::where('post_category_id', $post_category['id'])->get()->count());
        }
        return view('user/posts', compact('posts', 'post_categories', 'postPerCategoriesTotal', 'posts_page', 'post_popular'));
    }

    public function detail_post(Post $post)
    {
        $posts = Post::latest()->get();
        $post_categories = PostCategory::latest()->get();
        $postPerCategoriesTotal = [];
        foreach ($post_categories as $post_category) {
            array_push($postPerCategoriesTotal, Post::where('post_category_id', $post_category['id'])->get()->count());
        }
        $post->update(['total_visited',$post->total_visited+=1]);
        return view('user.detail-post', compact('post', 'posts', 'post_categories', 'postPerCategoriesTotal'));
    }

    public function repositories()
    {
        $repositories = Repository::get();
        $repository_categories = PostCategory::latest()->get();

        return view('user/repositories', compact('repositories', 'repository_categories'));
    }

    public function jobs()
    {
        $jobs = Job::latest()->where('status', 1)->get();
        return view('user/jobs', compact('jobs'));
    }

    public function jobs_data()
    {
        $jobs = Job::latest()->get();
        $data = json_decode($jobs);
        return $data;
    }

    public function events()
    {
        $events = Event::latest()->Filter(request(['search']))->paginate(8)->withQueryString();
        return view('user/events', compact('events'));
    }

    public function detail_event(Event $event)
    {
        $events = Event::get();
        $event->update(['total_visited',$event->total_visited+=1]);
        return view('user.detail-event', compact('event', 'events'));
    }

    public function information_system()
    {
        $informationSystem = InformationSystem::get();
        return view('user.information-system',compact('informationSystem'));
    }

    public function information_system_data()
    {
        $data = InformationSystem::get();
        return json_encode($data);
    }

    public function application()
    {
        return view('user.applications.main-application');
    }

    public function application1()
    {
        return view('user.applications.application1');
    }

    public function application2()
    {
        return view('user.applications.application2');
    }

    public function post_categories(PostCategory $post_category)
    {
        $posts = $post_category->posts()->latest()->get();
        $posts_page = $post_category->posts()->latest()->paginate(10);
        $post_categories = PostCategory::latest()->get();
        $post_category->update(['total_visited',$post_category->total_visited+=1]);
        $postPerCategoriesTotal = [];
        foreach ($post_categories as $p) {
            array_push($postPerCategoriesTotal, Post::where('post_category_id', $p['id'])->get()->count());
        }
        return view('user.posts', compact('posts', 'post_categories', 'postPerCategoriesTotal', 'post_category', 'posts_page'));
    }

    public function repository_categories(RepositoryCategory $repositoryCategory)
    {
        $repositories = $repositoryCategory->repositories()->latest()->get();
        $repositories_categories = RepositoryCategory::latest()->get();
        return view('user.repositories', compact('repositories', 'repositories_categories', 'repositoryCategory'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Repository;
use App\Models\RepositoryCategory;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Event;
use App\Models\InformationSystem;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::get();
        $post_categories = PostCategory::get();
        $repositories = Repository::get();
        $repository_categories = RepositoryCategory::get();
        $jobs = Job::get();
        $applicants = Applicant::get();
        $information_systems = InformationSystem::get();
        $events = Event::get();

        $postPerCategoriesName = [];
        $postPerCategoriesTotal = [];
        $postPerCategoriesColor = [];
        foreach ($post_categories as $post_category) {
            array_push($postPerCategoriesName, $post_category->name);
            array_push($postPerCategoriesTotal, Post::where('post_category_id', $post_category['id'])->get()->count());
            array_push($postPerCategoriesColor, "#".substr(md5(rand()), 0, 6));
        }

        $repositoryPerCategoriesName = [];
        $repositoryPerCategoriesTotal = [];
        $repositoryPerCategoriesColor = [];
        foreach ($repository_categories as $repository_category) {
            array_push($repositoryPerCategoriesName, $repository_category->name);
            array_push($repositoryPerCategoriesTotal, Repository::where('repository_category_id', $repository_category['id'])->get()->count());
            array_push($repositoryPerCategoriesColor, "#".substr(md5(rand()), 0, 6));
        }

        $jobName = [];
        $jobTotal = [];
        $jobColor = [];
        foreach ($jobs as $job) {
            array_push($jobName, $job->title);
            array_push($jobTotal, Applicant::where('job_id', $job['id'])->get()->count());
            array_push($jobColor, "#".substr(md5(rand()), 0, 6));
        }

        $informationSystemStrategis = 0;
        $informationSystemPembangunan = 0;
        $informationSystemRawan = 0;
        foreach ($information_systems as $information_system) {
            if($information_system['status'] == 'Daerah Strategis'){
                $informationSystemStrategis++;
            }else if($information_system['status'] == 'Dalam Pembangunan'){
                $informationSystemPembangunan++;
            }else{
                $informationSystemRawan++;
            }
        }
        $informationSystemPerStatusName = ['Daerah Strategis', 'Dalam Pembangunan', 'Daerah Rawan'];
        $informationSystemPerStatusTotal = [$informationSystemStrategis, $informationSystemPembangunan, $informationSystemRawan];
        $informationSystemPerStatusColor = ['#1cc88a', '#f6c23e', '#e74a3b'];

        return view('admin/dashboard',[
            'posts' => $posts,
            'post_categories' => $post_categories,
            'repositories' => $repositories,
            'repository_categories' => $repository_categories,
            'postPerCategoriesName' => $postPerCategoriesName,
            'postPerCategoriesTotal' => $postPerCategoriesTotal,
            'postPerCategoriesColor' => $postPerCategoriesColor,
            'repositoryPerCategoriesName' => $repositoryPerCategoriesName,
            'repositoryPerCategoriesTotal' => $repositoryPerCategoriesTotal,
            'repositoryPerCategoriesColor' => $repositoryPerCategoriesColor,
            'jobs' => $jobs,
            'jobName' => $jobName,
            'jobTotal' => $jobTotal,
            'jobColor' => $jobColor,
            'applicants' => $applicants,
            'information_systems' => $information_systems,
            'informationSystemPerStatusName' => $informationSystemPerStatusName,
            'informationSystemPerStatusTotal' => $informationSystemPerStatusTotal,
            'informationSystemPerStatusColor' => $informationSystemPerStatusColor,
            'events' => $events,
        ]);
    }
}

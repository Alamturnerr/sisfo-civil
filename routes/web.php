<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\RepositoryCategoryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InformationSystemController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User
Route::get('/', [UserController::class, 'index']);
Route::get('/profil', [UserController::class, 'profile']);
Route::get('/berita', [UserController::class, 'posts']);
Route::get('/berita/kategori/{post_category:slug}', [UserController::class, 'post_categories']);
Route::get('/berita/{post:slug}', [UserController::class, 'detail_post']);
Route::get('/repositori', [UserController::class, 'repositories']);
Route::get('/repositori/kategori/{repository_category:slug}', [UserController::class, 'repository_categories']);
Route::get('/sistem-informasi', [UserController::class, 'information_system']);
Route::get('/loker', [UserController::class, 'jobs']);
Route::post('applicants', [ApplicantController::class, 'store']);
Route::get('/aplikasi', [UserController::class, 'application']);
Route::get('/aplikasi/stabilitas', [UserController::class, 'application1']);
Route::get('/aplikasi/jembatan-balok', [UserController::class, 'application2']);
Route::get('/event', [UserController::class, 'events']);
Route::get('/event/{event:slug}', [UserController::class, 'detail_event']);
Route::get('/sistem-informasi/data', [UserController::class, 'information_system_data']);
Route::get('/loker/data', [UserController::class, 'jobs_data']);

// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::resource('admin/profile', ProfileController::class);
Route::resource('admin/posts', PostController::class);
Route::resource('admin/post_categories', PostCategoryController::class);
Route::get('admin/posts/categories/{post_category:slug}', [PostCategoryController::class, 'show']);
Route::resource('admin/repositories', RepositoryController::class);
Route::resource('admin/repository_categories', RepositoryCategoryController::class);
Route::get('admin/repositories/categories/{repository_category:slug}', [RepositoryCategoryController::class, 'show']);
Route::resource('admin/information_system',InformationSystemController::class);
Route::resource('admin/jobs', JobController::class);
Route::resource('admin/applicants', ApplicantController::class);
Route::get('admin/applicants/jobs/{job:id}', [JobController::class, 'show']);
Route::resource('admin/events', EventController::class);

// Auth
Auth::routes();
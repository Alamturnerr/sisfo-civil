@extends('user.layouts.main')

@section('title', $post->title)

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/detail-posts.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/side-posts.css') }}">
@endsection

@section('content')
<main>
    <div class="container">
        <!-- Judul -->
        <section class='row my-3 pt-3'>
            <div class="col-md-12">
                <h3>{{ $post->title }}</h3>
                <p class="px-1">
                    <i class="fas fa-calendar"></i> {{ $post->created_at }} - <a href="/berita/kategori/{{ $post->post_category->slug }}" class="badge badge-primary"><i class="fas fa-tag  "></i> {{ $post->post_category->name }}</a>
                </p>
            </div>
        </section>
        <!-- End Judul -->
        
        <hr>

        <!-- Deskripsi -->
        <div class="row my-3 py-3">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-12">
                        <img class="img-fluid" src="{{ asset($post->takeImage()) }}" alt="{{ $post->thumbnail }}">
                        <div class="mt-4">
                            <p>{!! $post->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @include('user.layouts.side-posts')
        </div>
        <!-- End Deskripsi -->
    </div>
</main>
@endsection

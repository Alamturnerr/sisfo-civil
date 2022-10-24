@extends('user.layouts.main')

@section('title', $post->title)

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/detail-posts.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/side-posts.css') }}">
@endsection
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
@section('content')
<main>
    <div class="container">
        <!-- Judul -->
        <section class='row my-3 pt-3'>
            <div class="col-md-12">
                <h3>{{ $post->title }}</h3>
                <p class="px-1">
                    <i class="fas fa-calendar"></i> {{ $post->created_at }} <span data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Total Pengunjung">
                <i class="fas fa-eye"></i> {{ $post->total_visited }} </span> - <a href="/berita/kategori/{{ $post->post_category->slug }}" class="badge badge-primary"><i class="fas fa-tag  "></i> {{ $post->post_category->name }}</a>
                </p>
            </div>
        </section>
        <script>
            $(document).ready(function(){
              $('[data-toggle="popover"]').popover();   
            });
            </script>
            
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

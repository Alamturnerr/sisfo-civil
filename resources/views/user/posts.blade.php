@extends('user.layouts.main')

@section('title', 'Berita')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/posts.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/side-posts.css') }}">
<style>
    .posts-card-img{
        height: 200px !important;
    }
    @foreach ($posts as $index => $post)
        .custom-card-{{$post->slug}}{
            background-image: url('{{asset($post->takeImage())}}');
            background-size: cover;
            width:100%;
            height:150px;
        }
        @if($index<=3)
            .custom-carousel-{{$post->slug}}{
                background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{asset($post->takeImage())}}');
                background-size: cover;
                height: 450px;
                background-position: center;
            }
        @endif
    @endforeach{}
</style>
@endsection

@section('content')
{{-- Carousel --}}
@if($posts->count())
<header>
    <div id="carouselExampleControls" class="carousel slide mb-3 d-none d-md-block" data-ride="carousel">
        <ul class="carousel-indicators">
            @foreach ($posts as $index=>$post)
                @if($posts->count()>1)
                    @if($index==0)
                        <li data-target="#carouselExampleControls" data-slide-to="{{$index}}" class="active"></li>
                    @else
                        <li data-target="#carouselExampleControls" data-slide-to="{{$index}}"></li>
                    @endif
                @endif
                @if($index==3) @break @endif
            @endforeach
        </ul>
        <div class="carousel-inner">
            @foreach ($posts as $index=>$post)
            @if($index==0)    
            <div class="carousel-item active">
                <div class="d-block w-100 custom-carousel-{{$post->slug}}"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="/berita/{{ $post->slug }}">{{$post->title}}</a></h5>
                    <p>
                        <i class="fas fa-calendar mr-1"></i> {{$post->created_at}} 
                        <a class="text-white ml-3" href="/berita/kategori/{{ $post->post_category->slug }}"><i class="fas fa-tag mr-1"></i>{{ $post->post_category->name }}</a>
                    </p>
                </div>   
            </div>
            @else
            <div class="carousel-item">
                <div class="d-block w-100 custom-carousel-{{$post->slug}}"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5><a href="/berita/{{ $post->slug }}">{{$post->title}}</a></h5>
                    <p>
                        <i class="fas fa-calendar mr-1"></i> {{$post->created_at}} 
                        <a class="text-white ml-3" href="/berita/kategori/{{ $post->post_category->slug }}"><i class="fas fa-tag mr-1"></i>{{ $post->post_category->name }}</a>
                    </p>
                </div>   
            </div>
            @endif
            @if($index==3) @break @endif
            @endforeach
        </div>
        @if($index>0)
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
        @endif
    </div>
</header>
@endif
{{-- End Carousel --}}

<div class="container my-4">
    <main>
        <section class="row">
            {{-- List Berita --}}
            <div class="col-lg-9 col-md-12">
            @if(isset($post_category))
                <div class="col-md-12 bg-primary d-flex justify-content-between text-white px-4 py-3">
                    <h4 class="my-auto"><i class="fas fa-newspaper"></i> Daftar Berita - Kategori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $post_category->name }}</h4>
                </div>
            @else
                <div class="col-md-12 bg-primary d-flex justify-content-between text-white px-4 py-3">
                    <h4 class="my-auto"><i class="fas fa-newspaper"></i> Daftar Berita</h4>
                </div>
            @endif

            @if($posts_page->count())
                <div class="row my-3">
                    @foreach($posts_page as $index=>$post)
                    <div class="col-md-6 mb-4 d-flex align-items-stretch">
                        <div class="card shadow col-12 p-0">
                            <a href="/berita/{{ $post->slug }}">
                                <div class="custom-card-{{ $post->slug }} posts-card-img"></div>
                            </a>
                            <div class="card-body">
                                <a href="/berita/{{ $post->slug }}"><h4 class="card-title text-dark">{{ Str::limit($post->title, 150) }}</h4></a>
                                <p class="px-1">
                                    <i class="fas fa-calendar"></i> {{$post->created_at}} -
                                    <a href="/berita/kategori/{{ $post->post_category->slug }}" class="badge badge-primary"><i class="fas fa-tag"></i> {{ $post->post_category->name }} </a>
                                </p>
                                <a href="/berita/{{ $post->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
                            </div>
                        </div> 
                    </div>
                    @endforeach
                </div>
            @elseif(!$posts_page->count() && request('search'))
                <div class="col-md-12 mb-4 d-flex align-items-stretch justify-content-center">
                    <p class="text-center my-5">-- Hasil pencarian tidak ditemukan --</p>
                </div>
            @else
                <p class="text-center my-5">-- Berita belum tersedia --</p>
            @endif

            <!-- {{-- Pagination --}} -->
                @if($posts->count())
                    {{ $posts_page->links() }}
                @endif
            <!-- {{-- End Pagination --}} -->

            </div>
            {{-- End List Berita --}}
            
            @if($posts->count())
                @include('user.layouts.side-posts')
            @endif
        </section> 
    </main>
</div>
@endsection
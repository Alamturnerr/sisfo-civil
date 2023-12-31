@extends('user.layouts.main')

@section('title', 'Beranda')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/home.css') }}">
<style>
    @foreach ($posts as $index => $post)
        .custom-card-{{$post->slug}}{
            background-image: url('{{asset($post->takeImage())}}');
            background-size: cover;
            width:100%;
            height:150px;
        }
    @endforeach;
</style>
@endsection
{{-- @extends('user.layouts.image-style') --}}

@section('content')
{{-- Jumbotron --}}
<header>
    <div class="jumbotron jumbotron-fluid jumbotron-home text-white">
        <div class="container">
            <h1 class="display-4">Selamat Datang</h1>
            <div class="row">
                <div class="col-md-8">
                    <p class="lead">Website Sipil UTama.</p> 
                </div>
            </div>
        </div>
    </div>
</header>
{{-- End Jumbotron --}}

<main>
    {{-- Tentang Kami --}}
    <div class="container">
        <section class="row justify-content-center my-5 py-5">
            <section class="col-md-6 mr-auto my-auto">
                <h2>Tentang Kami</h2>
                <p>Selamat datang! Guna mempersiapkan lulusan yang siap diterima di industri, saat ini Teknik Sipil UTama telah menjalin kerjasama dengan Berbagai Instansi baik pemerintah ataupun swasta yang menitik beratkan pada upaya materi kurikulum yang disesuaikan dengan dunia industri (Asosiasi) dengan cara pemetaan yang merujuk pada KKNI & SKKNI.</p>
                <a class="btn btn-primary" href="/profil">Baca Selengkapnya</a>
            </section>
            <section class="col-md-5 ml-auto my-auto">
                <img class="img-fluid" src="{{asset('img/user/about-home.png')}}" alt="about-home">
            </section>
        </section>
    </div>
    {{-- End Tentang Kami --}}

    {{-- Galeri --}}
    <div class="bg-gallery-home">
        <div class="container">
            <section class="row my-5 py-5">
                <div class="col-md-12">
                    <h2><i class="fas fa-images"></i> Galeri</h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div id="imgGallery" class="row gallery-home">
                        <section class="col-md-9 main-img-home">
                        @foreach($galeris as $galeris)
                            <img class="img-fluid main-img-home rounded shadow" id="mainImg-home" src="{{ asset($galeris->takeImage()) }}" style="height: 1280px; width: 800px;" alt="gallery-home">
                        @endforeach
                        </section>
                        <section class="col-md-2 mx-auto my-auto">
                        @foreach($galeri as $gallery)
                            <img class="img-fluid my-2 thumb-home" src="{{ asset($gallery->takeImage()) }}" style="height: 1280px; width: 800px;" alt="gallery1-home">
                         @endforeach
                        </section>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        (function(){
                var imgLen = document.getElementById('imgGallery');
                var images = imgLen.getElementsByTagName('img');
                var dots = document.getElementsByClassName('dot');
                var i;
                var counter = 1;

                if(counter <= images.length){
                    setInterval(function(){
                        images[0].src = images[counter].src;
                        console.log(images[counter].src);
                        counter++;

                        if(counter === images.length){
                            counter = 1;
                        }
                    },5000);
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            })();
    </script>
    {{-- End Galeri --}}

    {{-- Berita Terbaru --}}
    <div class="container">
        <section class="my-5 py-5">
            <section class="row mb-4">
                <div class="col-12">
                    <div class="d-flex justify-content-between bg-primary text-white px-4 py-3 shadow">
                        <h4 class="my-auto"><i class="fas fa-newspaper"></i> Berita Terbaru</h4>
                        <a class="my-auto" href="/berita">Lihat semua berita <i class="fas fa-angle-right fa-sm"></i></a>
                    </div>
                </div>
            </section>
            <section class="row latest-news-home mb-5">
                @if ($posts->count())
                    @foreach ($posts as $index => $post)
                        <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch my-2">
                            <div class="card shadow col-12 p-0">
                                <a href="/berita/{{ $post->slug }}">
                                    <div class="custom-card-{{ $post->slug }} card-img-home"></div>
                                </a>
                                <div class="card-body px-3">
                                    <a href="/berita/{{ $post->slug }}">
                                        <h5 class="card-title font-weight-bold text-dark mt-1">{{ Str::limit($post->title, 100) }}</h5>
                                    </a>
                                    <p>
                                        <i class="fas fa-calendar"></i> {{ $post->created_at }}
                                        <br>
                                        <a href="/berita/kategori/{{ $post->post_category->slug }}" class="badge badge-primary"><i class="fas fa-tag"></i> {{ $post->post_category->name }} </a>
                                    </p> 
                                </div>
                            </div>
                        </div>
                        @if ($index==3) @break @endif
                    @endforeach
                @else
                    <p class="mx-auto">-- Berita belum tersedia --</p>
                @endif
            </section>
        </section>
    </div>
    {{-- End Berita Terbaru --}}
    {{-- @if(Auth::guard('member')->check()) 
    <script>
        $(document).ready(function(){
            $("#myModal").modal("show");
        });
    </script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Account Information</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Hallo! nama .</br>
                    Akun anda belum aktif, silahkan aktifkan terlebih dahulu dengan melakukan pembayaran.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Pembayaran</button>
            </div>
        </div>

    </div>
</div>
@endif --}}

</main>
@endsection
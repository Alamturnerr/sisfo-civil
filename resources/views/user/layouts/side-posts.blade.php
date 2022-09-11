<div class="col-lg-3">

    {{-- Search --}}
    <form class="d-flex mb-3" role="search" action="/berita" method="get">
        <input autocomplete="off" class="form-control me-2" type="search" placeholder="Cari berita.." aria-label="Search" name="search"> 
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </form>
    {{-- End Search --}}

    {{-- Berita Terbaru dan Berita Populer--}}
    <section class="px-3 py-4 my-3 bg-primary text-white shadow">
        @if(request()->is('berita'))
            @if(isset($post_category))
                <h5 class=" d-flex justify-content-center">Berita Populer</h5>
                <div class="text-center">
                    <span class="small"><i class="fas fa-sm fa-fw fa-tag"></i> {{ $post_category->name }}</span>
                </div>
            @else
                <h5 class=" d-flex justify-content-center">Berita Populer</h5>
            @endif
            <ul class="list-group list-group-flush row">
                @foreach ($post_popular as $index => $post)
                <section>
                    <a href="{{ url('/berita/'.$post->slug) }} " class="mb-0 pb-0"><li class="list-group-item borderless bg-primary pb-0 mb-0">{{ Str::limit($post->title, 100) }}</li></a> 
                    <li class="list-group-item borderless bg-primary py-0 mt-0 mb-2"><span class="small -0 py-0">{{$post->created_at}}</span>@if($index<$post_popular->count()-1) <hr class="border-secondary"> @endif</li>
                </section>
                @if($index==4) @break @endif
                @endforeach
            </ul>
        @else
            @if(isset($post_category))
                <h5 class=" d-flex justify-content-center">Berita Terbaru</h5>
                <div class="text-center">
                    <span class="small"><i class="fas fa-sm fa-fw fa-tag"></i> {{ $post_category->name }}</span>
                </div>
            @else
                <h5 class=" d-flex justify-content-center">Berita Terbaru</h5>
            @endif
            <ul class="list-group list-group-flush row">
                @foreach ($posts as $index => $post)
                <section>
                    <a href="{{ url('/berita/'.$post->slug) }} " class="mb-0 pb-0"><li class="list-group-item borderless bg-primary pb-0 mb-0">{{ Str::limit($post->title, 100) }}</li></a> 
                    <li class="list-group-item borderless bg-primary py-0 mt-0 mb-2"><span class="small -0 py-0">{{$post->created_at}}</span>@if($index<$posts->count()-1) <hr class="border-secondary"> @endif</li>
                </section>
                @if($index==4) @break @endif
                @endforeach
            </ul>
        @endif
    </section>
    {{-- End Berita Terbaru --}}

    {{-- Kategori Berita --}}
    <section class="px-3 py-4 my-3 shadow bg-primary text-white">
        <h5 class=" d-flex justify-content-center">Kategori Berita</h5>
        @foreach ($post_categories as $index => $post_category)
                <a class="badge badge-warning" href="{{ url('/berita/kategori/'.$post_category->slug) }}">{{ $post_category->name }} ({{ $postPerCategoriesTotal[$index] }})</a> 
        @endforeach
    </section>
</div>
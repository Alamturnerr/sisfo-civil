@extends('user.layouts.main')

@section('title', 'Repositori')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/repositories.css') }}">
@endsection

@section('content')
<header>
    <div class="jumbotron jumbotron-fluid jumbotron-repo d-flex align-content-center flex-wrap">
        <div class="container text-white text-center">
            @if(isset($repositoryCategory))
                <h2 class="display-4 text-uppercase">Repositori - Kategori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $repositoryCategory->name }}</h2>
            @else
                <h2 class="display-4 text-uppercase">Repositori</h2>
            @endif
            <div>
                <p class="lead">Sipil UTama hadir dengan Program Studi Teknik Sipil dengan kurikulum yang sesuai dengan kebutuhan Industri.</p>
            </div>
        </div>
    </div>
</header>
<main class="container">
    <div class="d-flex mb-4" role="search">
        @if($repositories->count())
            <input autocomplete="off" class="form-control " type="text" id="searchBox-1" placeholder="Cari buku, jurnal, modul.." aria-label="Search" >
        @endif
    </div>
    <div id="table-responsive-1" class="table-responsive mb-5 overflow-auto shadow">
        <table id="table-1" class="table table-hover table-bordered small">
            <thead class="bg-primary text-white sticky-top">
                <tr>
                    <th scope="col" class="th-sm" width="45%">Judul</th>
                    @if(isset($repositoryCategory))
                        <th scope="col" class="th-sm" width="20%">Kategori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $repositoryCategory->name }}</th>
                    @else
                        <th scope="col" class="th-sm" width="20%">Kategori</th>
                    @endif
                    <th scope="col" class="th-sm" width="20%">Jenis</th>
                    <th scope="col" class="th-sm" width="15%">Link</th>
                </tr>
            </thead>
            <tbody class="scroll-table">
                @if($repositories->count())
					@foreach ($repositories as $index => $repository)
                        <tr scope="row">
                            <td class="text-left p-3">{{ $repository->title }}</td>
                            <td>
                                <a href="{{ url('/repositori/kategori/'.$repository->repository_category->slug) }}" class="text-primary"><i class="fas fa-tag"></i> {{ $repository->repository_category->name }}</a>
                            </td>
                            <td>{{ $repository->type }}</td>
                            <td>
                                <a target="_blank" class="btn btn-primary btn-sm" href="{{ asset($repository->takePdf()) }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr scope="row">  
                        <td colspan="4">-- Repositori belum tersedia --</td>
                    </tr>
				@endif  
            </tbody>
        </table>
    </div>
    <div id="not-found" style="display:none" class="text-center my-4"></div>
</main>
@endsection

@if($repositories->count())
    @section('scripts')
    <script>
        // Search Repository
        var searchBox_1 = document.getElementById("searchBox-1");
        searchBox_1.addEventListener("keyup", function(){
            var keyword = this.value;
            var resultsCount = 0;
            keyword = keyword.toUpperCase();
            var table_1 = document.getElementById("table-1");
            var table_responsive_1 = document.getElementById("table-responsive-1");
            var all_tr = table_1.getElementsByTagName("tr");
            for(var i=0; i<all_tr.length; i++){
                var name_column = all_tr[i].getElementsByTagName("td")[0];
                if(name_column){
                    var name_value = name_column.textContent || name_column.innerText;
                    name_value = name_value.toUpperCase();
                    if(name_value.indexOf(keyword) > -1){
                        all_tr[i].style.display = ""; // show
                        resultsCount++;
                    }else{
                        all_tr[i].style.display = "none"; // hide   
                    }
                }
            }
            var notFound = document.getElementById('not-found')
            if(resultsCount === 0) {
                notFound.innerHTML = '-- Hasil pencarian tidak ditemukan --';
                notFound.style.display = "";
                notFound.classList.add("small");
                table_1.style.display = "none";
                table_responsive_1.style.display = "none";
            } else {
                table_1.style.display = "";
                table_responsive_1.style.display = "";
                notFound.style.display = "none";
            }
        });
    </script>
    @endsection
@endif

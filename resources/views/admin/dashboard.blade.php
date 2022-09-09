@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
<p>Halaman ini menampilkan statistik dari seluruh data yang ada di website.<br><span class="small mb-4">Download <span class="font-weight-bold">manual guide book</span> untuk admin <a href="{{ asset('buku-petunjuk-admin.pdf') }}" target="_blank">disini</a>.</span></p>

<div class="row">

    {{-- Statistik Berita --}}
    <div class="col-md-6">
        <h1 class="h5 mb-2 text-gray-800">Statistik Berita</h1>
        <div class="row">
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Berita</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Kategori Berita</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $post_categories->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tags fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-10 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Total Berita Berdasarkan Kategori</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if(!$posts->count())
                            -- Belum ada data berita --
                        @else
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="KategoriBeritaPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                @foreach ($post_categories as $index => $post_category)
                                    <span class="mr-2">
                                        <i class="fas fa-circle" style="color: {!! $postPerCategoriesColor[$index] !!}"></i> {{ $post_category->name }}: {{ $postPerCategoriesTotal[$index] }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    {{-- Statistik Repositori --}}
    <div class="col-md-6">
        <h1 class="h5 mb-2 text-gray-800">Statistik Repositori</h1>
        <div class="row">
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Repositori</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $repositories->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Kategori Repositori</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $repository_categories->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tags fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-10 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Total Repositori Berdasarkan Kategori</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if(!$repositories->count())
                            -- Belum ada data repositori --
                        @else
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="KategoriRepositoriPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                @foreach ($repository_categories as $index => $repository_category)
                                    <span class="mr-2">
                                        <i class="fas fa-circle" style="color: {!! $repositoryPerCategoriesColor[$index] !!}"></i> {{ $repository_category->name }}: {{ $repositoryPerCategoriesTotal[$index] }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    {{-- Statistik Loker --}}
    <div class="col-md-6">
        <h1 class="h5 mb-2 text-gray-800">Statistik Loker</h1>
        <div class="row">
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Pelamar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $applicants->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Lowongan Pekerjaan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jobs->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-10 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Total Pelamar Sesuai Dengan Posisi</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if(!$applicants->count())
                            -- Belum ada data pelamar --
                        @else
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="LokerPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                @foreach ($jobs as $index => $job)
                                    <span class="mr-2">
                                        <i class="fas fa-circle" style="color: {!! $jobColor[$index] !!}"></i> {{ $job->title }}: {{ $jobTotal[$index] }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="col-md-6">
        {{-- Statistik Event --}}
        <h1 class="h5 mb-2 text-gray-800">Statistik Event</h1>
        <div class="row">
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Event</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $events->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        {{-- Statistik Sistem Informasi --}}
        <h1 class="h5 mb-2 text-gray-800">Statistik Sistem Informasi</h1>
        <div class="row">
            <div class="col-lg-7 col-md-10 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Sistem Informasi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $information_systems->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-map fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-10 col-lg-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Total Sistem Informasi Sesuai Dengan Status</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if(!$information_systems->count())
                            -- Belum ada data sistem informasi --
                        @else
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="SistemInformasiPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle" style="color: {!! $informationSystemPerStatusColor[0] !!}"></i> 
                                    {{ $informationSystemPerStatusName[0] }}: {{ $informationSystemPerStatusTotal[0] }}<br>

                                    <i class="fas fa-circle" style="color: {!! $informationSystemPerStatusColor[1] !!}"></i> 
                                    {{ $informationSystemPerStatusName[1] }}: {{ $informationSystemPerStatusTotal[1] }}<br>

                                    <i class="fas fa-circle" style="color: {!! $informationSystemPerStatusColor[2] !!}"></i> 
                                    {{ $informationSystemPerStatusName[2] }}: {{ $informationSystemPerStatusTotal[2] }}
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/admin/demo/chart-pie-demo.js') }}"></script>

    @if($posts->count())
    <script>
        // Pie Chart Kategori Berita
        var ctx = document.getElementById("KategoriBeritaPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($postPerCategoriesName) !!},
            datasets: [{
                data: {!! json_encode($postPerCategoriesTotal) !!},
                backgroundColor: {!! json_encode($postPerCategoriesColor) !!},
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>
    @endif

    @if($repositories->count())
    <script>
        // Pie Chart Kategori Repositori
        var ctx = document.getElementById("KategoriRepositoriPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($repositoryPerCategoriesName) !!},
            datasets: [{
                data: {!! json_encode($repositoryPerCategoriesTotal) !!},
                backgroundColor: {!! json_encode($repositoryPerCategoriesColor) !!},
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>
    @endif

    @if($applicants->count())
    <script>
        // Pie Chart Loker
        var ctx = document.getElementById("LokerPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($jobName) !!},
            datasets: [{
                data: {!! json_encode($jobTotal) !!},
                backgroundColor: {!! json_encode($jobColor) !!},
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>
    @endif

    @if($information_systems->count())
    <script>
        // Pie Chart Sistem Informasi
        var ctx = document.getElementById("SistemInformasiPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($informationSystemPerStatusName) !!},
            datasets: [{
                data: {!! json_encode($informationSystemPerStatusTotal) !!},
                backgroundColor: {!! json_encode($informationSystemPerStatusColor) !!},
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>
    @endif
@endsection
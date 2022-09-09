<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/sb-admin-2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/admin/dataTables/datatables.bootstrap4.min.css') }}">

    {{-- Favicon --}}
	<link rel="icon" href="{{ url('widyatama-logo.ico') }}">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/admin/style.css')}}">

    <title>@yield('title') | Admin - Sipil UTama</title>
</head>
<body id="page-top">
    @guest
        <div class="container" id="app">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    @else
        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('admin.layouts.sidebar')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    @include('admin.layouts.navbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                
                @include('admin.layouts.footer')

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->    
    @endguest

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    
    @if(Auth::check())
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Keluar" jika ingin keluar dari akun ini.</div>
                    <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a id="logout-button" class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            this.classList.add('disabled');
                            document.getElementById('logout-form').submit();">
                        Keluar
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/admin/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/admin/sb-admin-2.min.js') }}"></script>
    
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/admin/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('vendor/admin/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/admin/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('js/admin/demo/datatables-demo.js') }}"></script> 

    <!-- Custom File Input -->
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

    <!-- CKEditor -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    @if(request()->is('admin/posts/create', 'admin/posts/*/edit'))
    <script>
        let description = document.getElementById("description");

        CKEDITOR.replace(description,{
            language:'en-gb'
        });
    </script>
    @endif

    @if(request()->is('admin/profile/create', 'admin/profile/*/edit'))
    <script>
        let description_profile = document.getElementById("description_profile");
        let vision = document.getElementById("vision");
        let mission = document.getElementById("mission");

        CKEDITOR.replace(description_profile,{
            language:'en-gb'
        });
        CKEDITOR.replace(vision,{
            language:'en-gb'
        });
        CKEDITOR.replace(mission,{
            language:'en-gb'
        });
    </script>
    @endif

    @if(request()->is('admin/jobs/create', 'admin/jobs/*/edit'))
    <script>
        let description = document.getElementById("description");

        CKEDITOR.replace(description,{
            language:'en-gb'
        });
    </script>
    @endif

    @if(request()->is('admin/events/create', 'admin/events/*/edit'))
    <script>
        let description = document.getElementById("description");

        CKEDITOR.replace(description,{
            language:'en-gb'
        });
    </script>
    
    <script>
        /* Dengan Rupiah */
        var price = document.getElementById('price');
        price.addEventListener('keyup', function(e)
        {
            price.value = formatRupiah(this.value, 'Rp. ');
        });

        /* Fungsi */
        function formatRupiah(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 3,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
                
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
    @endif

    {{-- Custom JS --}}
    <script src="{{ asset('js/admin/script.js') }}"></script>

    @yield('scripts')
</body>
</html>
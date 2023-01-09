<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	{{-- Font Awesome --}}
	<link href="{{ asset('vendor/admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-eATZzfKDO8jsh3B1"></script>
   
	{{-- Favicon --}}
	<link rel="icon" href="{{ url('widyatama-logo.ico') }}">

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{ asset('css/user/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/notActive.css') }}">

	@yield('styles')
	
	<title>Attention | Sipil UTama</title>
</head>
@if(Auth::guard('MemberNotActive')->check()) 
@foreach($notActive as $mem)
<body id="page-top">
<main>
	<div class="container">
<div class="card text-center">
  <div class="card-header">
    Attention!
  </div>
  <div class="card-body">
    <h5 class="card-title">Halo, {{ $mem->name }}.</h5>
    <p class="card-text">Akun anda belum aktif, silahkan melakukan pembayaran untuk mengaktifkan akun anda.</p>
    <button id="pay-button" class="btn btn-primary">Check Payment</button>
  </div>
  <div class="card-footer text-muted">
   <a href="/">Kembali</a>
  </div>
</div>
<script type="text/javascript">
        const payButton = document.querySelector('#pay-button');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();
 
            snap.pay('{{ $mem->token }}', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                    
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                   let x = '{{ $mem->token }}';
                    const url = 'https://jsonplaceholder.typicode.com/posts';
                    const id = {{ $mem->id }}
                    window.location.href = "/payment" + id; 
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log(result)
                }
            });
        });
    </script>
@endforeach
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endif
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="{{ asset('vendor/admin/jquery-easing/jquery.easing.min.js') }}"></script>

	<!-- Custom File Input -->
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
	
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	{{-- Custom JS --}}
	<script src="{{asset('/js/user/script.js')}}"></script>
	
	@yield('scripts')
</body>
</html>
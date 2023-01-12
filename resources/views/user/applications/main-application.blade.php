@extends('user.layouts.main')

@section('title', 'Aplikasi')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/application.css') }}">
@endsection

@section('content')
<div class="container my-4">
	@if(request()->is('aplikasi'))
	<h2 class="my-4 pt-3">Aplikasi</h2><hr>
	@else
	@yield('header-aplikasi-1')
	@yield('header-aplikasi-2')
	@yield('header-aplikasi-5')
	@endif
	<div class="row">
		{{-- Sidebar --}}
		<div class="col-lg-4 mb-4">
			<div id="list-example" class="list-group">
				<a href="/aplikasi/stabilitas" class="list-group-item list-group-item-action link-app {{ request()->is('aplikasi/stabilitas') ? ' active-app' : '' }} li-border bg-primary text-white">Stabilitas Dinding Penahan Tanah</a>
				@if(Auth::guard('member')->check()) 
				<a href="/aplikasi/jembatan-balok" class="list-group-item list-group-item-action link-app {{ request()->is('aplikasi/jembatan-balok') ? ' active-app' : '' }} li-border bg-primary text-white">Jembatan Balok-T</a>
				@else
				<a class="list-group-item list-group-item-action text-muted link-app li-border bg-primary text-white">Jembatan Balok-T(Member)</a>
				@endif
				<a class="list-group-item list-group-item-action text-muted link-app li-border bg-primary text-white">Analisis Frekuensi (Segera)</a>
				<a class="list-group-item list-group-item-action text-muted link-app li-border bg-primary text-white">Dinding Gravity (Segera)</a>
				<a href="/aplikasi/EXCretwall" class="list-group-item list-group-item-action link-app {{ request()->is('aplikasi/EXCretwall') ? ' active-app' : '' }} li-border bg-primary text-white">EXCretwall (Segera)</a>
			</div>	
		</div>
		{{-- End Sidebar --}}
		@if(request()->is('aplikasi'))
			<div class="col-lg-8 text-justify">
				<div class="alert alert-info">Pilih aplikasi yang diinginkan.</div>
			</div>
		@endif

		@yield('image-formula-1')
		@yield('image-formula-2')
	</div>
</div>

@yield('application')

@endsection
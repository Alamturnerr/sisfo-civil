@extends('user.layouts.main')

@section('title', 'Profil')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection

@section('content')
<main>
	<div class="container">
		{{-- Tentang Kami --}}
		<h2 class="my-4 pt-3">Tentang Kami</h2><hr>
		<section class="my-3">
			<div class="row justify-content-center">
				<div class="col-lg-10 py-3 my-auto">
					<img src="{{asset("img/user/about-profile.jpg")}}" class="d-block w-100 mx-auto shadow" alt="about-profile">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					@if($profile == NULL)
						<p class="text-center">-- Deskripsi belum tersedia --</p>
					@else
						<p>{!! $profile->description !!}</p>
					@endif
				</div>
			</div>
		</section><hr>
		{{-- End Tentang Kami --}}

		{{-- Visi Misi --}}
		<section class="my-4">
			<h3 class="text-center my-4 text-uppercase">Visi</h3>
			<div class="bg-primary text-white rounded shadow-lg p-5">
				@if($profile == NULL)
					<span>-- Visi belum tersedia --</span>
				@else
					<span>{!! $profile->vision !!}</span>
				@endif
			</div>
			<h3 class="text-center my-4 text-uppercase">Misi</h3>
			<div class="bg-primary text-white rounded text-justify shadow-lg p-5">
				@if($profile == NULL)
					<span>-- Misi belum tersedia --</span>
				@else
					<span>{!! $profile->mission !!}</span>
				@endif
			</div>
		</section><hr>
		{{-- End Visi Misi --}}

		{{-- Struktur Organisasi --}}
		{{-- <section class="my-4 pb-3">
			<h3 class="my-4">Struktur Organisasi</h3>
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo1-home.png")}}" class="d-block w-100" alt="photo1-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Leonardo DiCaprio</h8>
							<p class="card-text">Ketua</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo2-home.png")}}" class="d-block w-100" alt="photo2-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Philip Seymour Hoffman</h8>
							<p class="card-text">Wakil Ketua</p>
						</div>
					</div> 
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo3-home.png")}}" class="d-block w-100" alt="photo3-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Caprion</h8>
							<p class="card-text">Sekretaris</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo4-home.png")}}" class="d-block w-100" alt="photo4-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">James Bond</h8>
							<p class="card-text">Bendahara</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo5-home.png")}}" class="d-block w-100" alt="photo5-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Alexa Sandra</h8>
							<p class="card-text">Sekretaris II</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo6-home.png")}}" class="d-block w-100" alt="photo6-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Johaness Malika</h8>
							<p class="card-text">Bendahara II</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo7-home.png")}}" class="d-block w-100" alt="photo7-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Andreas Alexander</h8>
							<p class="card-text">Dokumentasi</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="{{asset("img/user/photo8-home.png")}}" class="d-block w-100" alt="photo8-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Leona Capricon</h8>
							<p class="card-text">Humas</p>
						</div>
					</div>
					<br>
				</div>
			</div>
		</section> --}}
		{{-- End Struktur Organisasi --}}
	</div>
</main>
@endsection
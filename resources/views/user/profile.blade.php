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
		 <section class="my-4 pb-3">
			<h3 class="my-4">Struktur Organisasi</h3>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-3">
						<img src="https://ts.widyatama.ac.id/wp-content/uploads/2020/02/Yanyan-Agustian-e1580714999113-150x150.jpg" class="d-block w-100" alt="photo1-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Yanyan Agustian, S.T.,M.Eng.,PhD</h8>
							<p class="card-text">Ketua Program Studi</p>
							<p class="card-text">Kelompok Keahlian Geoteknik/Mekanika Tanah</p>
						</div>
					</div>
					<br>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="col d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-5" style="width: 185px;">
						<img src="https://ts.widyatama.ac.id/wp-content/uploads/2020/02/Bambang-Eko-Widyanto-e1580720494163-150x150.jpg" class="d-block w-100" alt="photo5-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Bambang Eko Widyanto,MT</h8>
							<p class="card-text">Kelompok Keahlian Struktur</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-5" style="width: 185px;">
						<img src="https://ts.widyatama.ac.id/wp-content/uploads/2020/02/Fuad-Hasan-1-150x150.jpg" class="d-block w-100" alt="photo6-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Fuad Hasan, A.Md,S.T,M.T.</h8>
							<p class="card-text">Kelompok Keahlian Sumber Daya Air</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-5" style="width: 185px;">
						<img src="https://ts.widyatama.ac.id/wp-content/uploads/2020/02/Asep-Setiawan-150x150.png" class="d-block w-100" alt="photo7-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Asep Setiawan, S.T.,M.T.</h8>
							<p class="card-text">Kelompok Keahlian Transportasi</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-5" style="width: 185px;">
						<img src="https://ts.widyatama.ac.id/wp-content/uploads/2020/02/Sandy-Radhitya-Akbar-150x150.jpg" class="d-block w-100" alt="photo8-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Sandy Radhitya Akbar</h8>
							<p class="card-text">Kelompok Keahlian Manajemen Konstruksi</p>
						</div>
					</div>
					<br>
				</div>
				<div class="col d-flex align-items-stretch justify-content-center">
					<div class="card shadow my-5" style="width: 185px;">
						<img src="https://ts.widyatama.ac.id/wp-content/uploads/2020/02/Raden-Herdian-150x150.jpg" class="d-block w-100" alt="photo9-home"> 
						<div class="card-body text-center">
							<h8 class="card-title font-weight-bold">Raden Herdian Bayu Ash Siddiq, S.T.,M.T</h8>
							<p class="card-text">Kelompok Keahlian Sumber Daya Air</p>
						</div>
					</div>
					<br>
				</div>
			</div>
		</section> 
		{{-- End Struktur Organisasi --}}
	</div>
</main>
@endsection
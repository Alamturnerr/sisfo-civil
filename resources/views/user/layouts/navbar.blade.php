<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="bg-logo col-lg-2 d-flex justify-content-center">
		<a class="navbar-brand my-2" href="/">
			<img src="{{ asset('img/user/logo-navbar.png' )}}" alt="logo-navbar">
		</a>
	</div>
	<button class="navbar-toggler mx-auto my-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon "></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto text-center">
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="/">Beranda</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('profil') ? ' active' : '' }}" href="/profil">Profil</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('berita', 'berita/*') ? ' active' : '' }}" href="/berita">Berita</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('repositori', 'repositori/*') ? ' active' : '' }}" href="/repositori">Repositori</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('sistem-informasi',) ? ' active' : '' }}" href="/sistem-informasi">Sistem Informasi</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('loker') ? ' active' : '' }}" href="/loker">Loker</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('aplikasi', 'aplikasi/*') ? ' active' : '' }}" href="/aplikasi">Aplikasi</a>
			</li>
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('event', 'event/*') ? ' active' : '' }}" href="/event">Event</a>
			</li>
			<li class="px-2 py-2">
				<a target="_blank" class="nav-link btn btn-danger btn-sm px-4 contact-us" href="mailto:sipil.utama2019@gmail.com">Kontak Kami</a>
			</li>
		</ul>
	</div>
</nav>

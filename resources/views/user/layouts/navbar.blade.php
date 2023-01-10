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
<<<<<<< HEAD
			<li class="nav-item px-1 py-2">
				<a class="nav-link {{ request()->is('faq', 'faq/*') ? ' active' : '' }}" href="/faq">FAQ</a>
=======
			<li class="px-2 py-2">
				<button type="button" class="nav-link btn btn-danger btn-sm px-4 contact-us" data-toggle="modal" data-target="#exampleModal">
					Login
				  </button>
				{{-- <a target="_blank" class="nav-link btn btn-danger btn-sm px-4 contact-us" href="mailto:sipil.utama2019@gmail.com">Kontak Kami</a> --}}
>>>>>>> c97a5c32df2593b317b3ef7facfc241743c37b58
			</li>
			@if(Auth::guard('member')->check()) 
			<li class="px-2 py-2">
				<a href="{{ route('logout_member') }}" class="nav-link btn btn-danger btn-sm px-4 contact-us">Logout</a>
			</li>
			@else
			<li class="px-2 py-2">
				<a target="_blank" class="nav-link btn btn-danger btn-sm px-4 contact-us" data-toggle="modal" data-target="#exampleModal">Login</a>
			</li>
			@endif
		</ul>
	</div>
</nav>
<<<<<<< HEAD
<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header login-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close close-color" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="{{ route('login.member') }}" method="POST">
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="modal-footer">
	  	<a href="/member/registrasi"><button type="button" class="btn btn-danger">Sign Up</button></a>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
		</form>
      </div>
    </div>
  </div>
</div>
=======

{{-- Modal Login --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="h4 text-gray-900 mb-4">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="user" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" autocomplete="off" placeholder="Masukan email..">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Masukan password..">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Ingatkan saya</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
            </form>
        </div>
        <div class="modal-footer">
			<div class="mx-auto">
				<a class="small" href="{{ route('register') }}">Buat Akun</a>
			</div>
        </div>
      </div>
    </div>
  </div>
>>>>>>> c97a5c32df2593b317b3ef7facfc241743c37b58


@extends('user.layouts.main')

@section('title', 'Profil')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection

@section('content')
<main>
	<div class="container">
		{{-- Member Registration --}}
		<h2 class="my-4 pt-3">Member Registration</h2><hr>
        <section class="my-3">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <?php if(Session::has('registrasi_success')): ?>
            <div class="message message-success">
                <span class="close"></span>
                <?php echo Session::get('registrasi_success') ?>
            </div>
        <?php endif; ?>
    <form method="POST" action="{{ route('process.register') }}">
        @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nama</label>
        <input id="name" name="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" placeholder="Masukan nama.."/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input id="email" name="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Masukan email.."/>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    </div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input id="password" name="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" autocomplete="off" placeholder="Masukan password.."/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password Confirm</label>
        <input id="password_confirm" name="password_confirm" type="password" class="form-control form-control-user" name="password_confirmation" autocomplete="off" placeholder="Ulangi password.."/>
    </div>
</div>
  <div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</section>
</div>
</main>
@endsection
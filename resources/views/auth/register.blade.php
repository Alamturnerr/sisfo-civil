@extends('admin.layouts.main')

@section('title', 'Register')

@section('content')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Buat Akun Admin</h1>
</div>
<form class="user" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group row">
        <div class="col-sm-12">
            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" placeholder="Masukan nama.."/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="Masukan email.."/>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" autocomplete="off" placeholder="Masukan password.."/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" autocomplete="off" placeholder="Ulangi password.."/>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('login') }}">Sudah punya akun? Masuk!</a>
</div>
@endsection
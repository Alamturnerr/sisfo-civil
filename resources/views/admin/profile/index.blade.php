@extends('admin.layouts.main')

@section('title', 'Profil')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Profil</h1>
<p class="mb-4">Halaman ini menampilkan data pada <a target="_blank" href="/profil">halaman profil</a>.</p>
<div class="row">
    @if(!$profile == NULL)
        <div class="col-md-8">
            <a href="{{ route('profile.edit',$profile->id) }}">
                <button type="button" class="btn btn-primary mb-3"><i class="fas fa-edit"></i> Edit Profil</button>
            </a>
        </div>
        <div class="col-md-4 text-center">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <span>{{ $message }}</span>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <span>{{ $message }}</span>
            </div>
        @endif
        </div>
    @endif
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Profil</h6>
    </div>
    <div class="card-body">
        <div class="row text-center">
            <div class="col-md-12">
                @if(!$profile == NULL)
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <tbody>
                            <tr>
                                <th class="bg-light" width="15%">Deskripsi</th>
                                <td class="text-left">{!! $profile->description !!}</td>
                            </tr>
                            <tr>
                                <th class="bg-light" width="15%">Visi</th>
                                <td class="text-left">{!! $profile->vision !!}</td>
                            </tr>
                            <tr>
                                <th class="bg-light" width="15%">Misi</th>
                                <td class="text-left">{!! $profile->mission !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @else
                <p>-- Profil belum dibuat --</p>
                <a href="{{ route('profile.create') }}">
                    <button type="button" class="btn btn-success mb-3">Buat Profil</button>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.layouts.main')

@section('title', 'Edit Kategori Berita | '.$postCategory->name)

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Mengubah Kategori Berita</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('post_categories.update',$postCategory->slug) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">Nama<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama kategori.." value="{{ old('name') ?? $postCategory->name }}">
						@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">Slug<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Buat slug.." value="{{ old('slug') ?? $postCategory->slug }}">
						<small class="text-muted">Tidak boleh sama dengan slug kategori lain.</small>
						@error('slug')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('post_categories.index') }}"><div class="btn btn-secondary">Batal</div></a>
					<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
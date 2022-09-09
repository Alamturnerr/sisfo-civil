@extends('admin.layouts.main')

@section('title', 'Edit Berita | '.$post->title)

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Mengubah Berita</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('posts.update',$post->slug) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group mb-3">
						<label class="form-label">Judul<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan judul.." value="{{ old('title') ?? $post->title }}">
						@error('title')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group mb-3">
						<label class="form-label">Deskripsi<span class="text-danger">*</span></label>
						<textarea class="form-control @error('description') is-invalid @enderror" style="height:250px" id="description" name="description" placeholder="Tulis isi berita..">{{ old('description') ?? $post->description }}</textarea>
						@error('description')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Kategori<span class="text-danger">*</span></label>
						<select class="form-control @error('post_category_id') is-invalid @enderror" id="post_category_id" name="post_category_id">
							<option disabled>-- Pilih Kategori --</option>
							@foreach($categories as $category)
								<option value="{{ $category->id }}" {{ $category->id == $post->post_category_id ? 'selected' : '' }}>{{ $category->name }}</option>
							@endforeach
						</select>
				        @error('post_category_id')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">Slug<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Buat slug.." value="{{ old('slug') ?? $post->slug }}">
						<small class="text-muted">Tidak boleh sama dengan slug berita lain.</small>
						@error('slug')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">Gambar<span class="text-danger">*</span></label>
						<div class="row">
							<div class="col-md-12">
								@if($post->thumbnail)
								<img src="{{ asset($post->takeImage()) }}" alt="{{ old('thumbnail') ?? $post->thumbnail }}" width="35%" class="img-thumbnail mb-2">
								@else
								<p><em>- Belum Ada Gambar -</em></p>
								@endif
								<div class="custom-file">
									<input autocomplete="off" type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail">
									<label class="custom-file-label" for="thumbnail">{{ $post->thumbnail }}</label>
									<small class="text-muted">Format yang diperbolehkan hanya jpeg, png, jpg, dan svg. Ukuran maks 5mb.</small>
									@error('thumbnail')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('posts.index') }}"><div class="btn btn-secondary">Batal</div></a>
					<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
@extends('admin.layouts.main')

@section('title', 'Upload Image')

@section('content')
<?php
$sl = rand(1,100);
?>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Upload Gallery</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
		    @csrf
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
						<label class="form-label">Poster<span class="text-danger">*</span></label>
						<div class="custom-file">
							<input autocomplete="off" type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
							<label class="custom-file-label" for="poster">Pilih Gambar</label>
							<small class="text-muted">Format yang diperbolehkan hanya jpeg, png, jpg, dan svg. Ukuran maks 5mb.</small>
                            <input class="form-control" type="text"  id="slug" name="slug" value="gallery-{{ $sl }}" placeholder="Gallery Home" readonly>
							<small class="text-muted">Penomoran dalam slug akan terisi otomatis</small>
							@error('image')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
				    </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('gallery.index') }}"><div class="btn btn-secondary">Batal</div></a>
				    <button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
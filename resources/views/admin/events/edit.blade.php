@extends('admin.layouts.main')

@section('title', 'Edit Event | '.$event->name)

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Mengubah Event</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('events.update',$event->slug) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Nama<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama event.." value="{{ old('name') ?? $event->name }}">
				        @error('name')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Deskripsi<span class="text-danger">*</span></label>
				        <textarea class="form-control @error('description') is-invalid @enderror" style="height:250px" id="description" name="description" placeholder="Tulis isi berita..">{{ old('description') ?? $event->description }}</textarea>
				        @error('description')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Lokasi<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="Masukan lokasi event.." value="{{ old('location') ?? $event->location }}">
				        @error('location')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Harga<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Masukan harga event.." value="{{ old('price') ?? $event->price }}">
				        @error('price')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Tanggal & Waktu<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="datetime-local" name="date_time" class="form-control @error('date_time') is-invalid @enderror" placeholder="Masukan tanggal & waktu event.." value="{{ old('date_time') ?? $event->date_time }}">
				        @error('date_time')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Link Event</label>
				        <input autocomplete="off" type="text" name="link" class="form-control @error('link') is-invalid @enderror" placeholder="Masukan link event.." value="{{ old('link') ?? $event->link }}">
				        @error('link')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Slug<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="Buat slug.." value="{{ old('slug') ?? $event->slug }}">
						<small class="text-muted">Tidak boleh sama dengan slug event lain.</small>
				        @error('slug')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">Poster<span class="text-danger">*</span></label>
						<div class="row">
							<div class="col-md-12">
								@if($event->poster)
								<img src="{{ asset($event->takeImage()) }}" alt="{{ old('poster') ?? $event->poster }}" width="35%" class="img-poster mb-2">
								@else
								<p><em>- Belum Ada Gambar -</em></p>
								@endif
								<div class="custom-file">
									<input autocomplete="off" type="file" class="custom-file-input @error('poster') is-invalid @enderror" id="poster" name="poster">
									<label class="custom-file-label" for="poster">{{ $event->poster }}</label>
									<small class="text-muted">Format yang diperbolehkan hanya jpeg, png, jpg, dan svg. Ukuran maks 5mb.</small>
									@error('poster')
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
					<a href="{{ route('events.index') }}"><div class="btn btn-secondary">Batal</div></a>
				    <button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
@extends('admin.layouts.main')

@section('title', 'Buat Repositori')

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Membuat Repositori</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('repositories.store') }}" method="POST" enctype="multipart/form-data">
		    @csrf	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Judul<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan judul repositori.." value="{{ old('title') }}">
				        @error('title')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Kategori<span class="text-danger">*</span></label>
						<select class="form-control @error('repository_category_id') is-invalid @enderror" id="repository_category_id" name="repository_category_id">
							<option disabled {{ (old('repository_category_id') ? '':'selected') }}>-- Pilih Kategori --</option>
							@foreach($categories as $category) 
								<option value="{{ $category->id }}" {{ (old('repository_category_id') == $category->id ? 'selected':'') }}>{{ $category->name }}</option>
							@endforeach
						</select>
				        @error('repository_category_id')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Tipe<span class="text-danger">*</span></label>
						<select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
							<option value=" " {{ (old('type') ? '':'selected') }}>-- Pilih Tipe --</option>
							<option value="Modul" {{ (old('type') == 'Modul' ? 'selected':'') }}>Modul</option>
							<option value="Jurnal" {{ (old('type') == 'Jurnal' ? 'selected':'') }}>Jurnal</option>
							<option value="Buku" {{ (old('type') == 'Buku' ? 'selected':'') }}>Buku</option>
						</select>
				        @error('type')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
						<label class="form-label">File<span class="text-danger">*</span></label>
						<div class="custom-file">
							<input autocomplete="off" type="file" class="custom-file-input @error('file') is-invalid @enderror" id="file" name="file">
							<label class="custom-file-label" for="file">Pilih File</label>
							<small class="text-muted">Format yang diperbolehkan hanya pdf. Ukuran maks 20mb.</small>
							@error('file')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
				    </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('repositories.index') }}"><div class="btn btn-secondary">Batal</div></a>
				    <button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
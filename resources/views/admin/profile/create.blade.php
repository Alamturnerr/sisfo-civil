@extends('admin.layouts.main')

@section('title', 'Buat Profil')

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Membuat Profil</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('profile.store') }}" method="POST">
		    @csrf
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Deskripsi<span class="text-danger">*</span></label>
				        <textarea class="form-control @error('description') is-invalid @enderror" style="height:250px" id="description_profile" name="description" placeholder="Tulis isi berita..">{{ old('description') }}</textarea>
				        @error('description')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Visi<span class="text-danger">*</span></label>
				        <textarea class="form-control @error('vision') is-invalid @enderror" style="height:250px" id="vision" name="vision" placeholder="Tulis isi berita..">{{ old('vision') }}</textarea>
				        @error('vision')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Misi<span class="text-danger">*</span></label>
				        <textarea class="form-control @error('mission') is-invalid @enderror" style="height:250px" id="mission" name="mission" placeholder="Tulis isi berita..">{{ old('mission') }}</textarea>
				        @error('mission')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('profile.index') }}"><div class="btn btn-secondary">Batal</div></a>
				    <button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
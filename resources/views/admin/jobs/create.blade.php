@extends('admin.layouts.main')

@section('title', 'Buat Lowongan Kerja')

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Membuat Lowongan Kerja</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
		    @csrf
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
				    <div class="form-group mb-3">
				        <label class="form-label">Nama Lowongan<span class="text-danger">*</span></label>
				        <input autocomplete="off" type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukan nama lowongan kerja.." value="{{ old('title') }}">
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
				        <textarea class="form-control @error('description') is-invalid @enderror" style="height:250px" id="description" name="description" placeholder="Tulis isi lowongan kerja..">{{ old('description') }}</textarea>
				        @error('description')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Status<span class="text-danger">*</span></label>
						<select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
							<option value=" " {{ (old('status') ? '':'selected') }}>-- Pilih Status --</option>
							<option value="1" {{ (old('status') == '1' ? 'selected':'') }}>Dibuka</option>
							<option value="0" {{ (old('status') == '0' ? 'selected':'') }}>Ditutup</option>
						</select>
						@error('status')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('jobs.index') }}"><div class="btn btn-secondary">Batal</div></a>
				    <button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
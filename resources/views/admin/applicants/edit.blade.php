@extends('admin.layouts.main')

@section('title', 'Edit Pelamar | '.$applicant->name)

@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Mengubah Data</h6>
	</div>
	<div class="card-body">
		<form action="{{ route('applicants.update',$applicant->id) }}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group mb-3">
						<label class="form-label">Nama Lengkap<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama lengkap.." value="{{ old('name') ?? $applicant->name }}">
						@error('name')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group mb-3">
						<label class="form-label">Email<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan nama email.." value="{{ old('email') ?? $applicant->email }}">
						@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group mb-3">
						<label class="form-label">Nomor Telepon<span class="text-danger">*</span></label>
						<input autocomplete="off" type="text" name="number" class="form-control @error('number') is-invalid @enderror" placeholder="Masukan nomor telepon.." value="{{ old('number') ?? $applicant->number }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
						@error('number')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
                <div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">Alamat<span class="text-danger">*</span></label>
						<textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Masukan Alamat..">{{ old('address') ?? $applicant->address }}</textarea>
						@error('address')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Posisi<span class="text-danger">*</span></label>
						<select class="form-control @error('job_id') is-invalid @enderror" id="job_id" name="job_id">
							<option disabled>-- Pilih Posisi --</option>
							@foreach($jobs as $job)
                            <option value="{{ $job->id }}" {{ $job->id == $applicant->job_id ? 'selected' : '' }}>{{ $job->title }}</option>
							@endforeach
						</select>
				        @error('job_id')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
				    </div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<div class="form-group mb-3">
						<label class="form-label">File Resume<span class="text-danger">*</span></label>
						<div class="row">
							<div class="col-md-12">
								<div class="custom-file">
									<input autocomplete="off" type="file" class="custom-file-input @error('file') is-invalid @enderror" id="file" name="file">
									<label class="custom-file-label" for="file">{{ $applicant->file }}</label>
									<small class="text-muted">Format yang diperbolehkan hanya pdf. Ukuran maks 20mb.</small>
									@error('file')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
				    <div class="form-group mb-3">
				        <label class="form-label">Status<span class="text-danger">*</span></label>
						<select class="form-control id="status" name="status">
							<option disabled>-- Pilih Status --</option>
							<option value="1" {{ $applicant->status == 1 ? 'selected' : '' }}>Dicek</option>
							<option value="0" {{ $applicant->status == 0 ? 'selected' : '' }}>Belum Dicek</option>
						</select>
				    </div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
					<a href="{{ route('applicants.index') }}"><div class="btn btn-secondary">Batal</div></a>
					<button type="submit" class="btn btn-primary">Kirim</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
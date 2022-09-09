@extends('admin.layouts.main')

@section('title', 'Detail Pelamar | '.$applicant->name)

@section('content')
@if ($message = Session::get('success'))
<div class="row text-center">
	<div class="col-md-4">
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	</div>
</div>
@endif

<a href="{{ route('applicants.index') }}"><div class="btn btn-secondary mb-2">Kembali</div></a>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Data Pelamar</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm table-bordered">
				<tbody>
					<tr>
						<th width="20%" class="bg-light">Nama Lengkap</th>
						<td class="text-left">{{ $applicant->name }}</td>
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Email</th>
						<td class="text-left">{{ $applicant->email }}</td>
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Nomor Telepon</th>
						<td class="text-left">{{ $applicant->number }}</td>
					</tr>
					<tr>
						<th class="bg-light">Alamat</th>
						<td class="text-left">{!! $applicant->address !!}</td>
					</tr>
					<tr>
						<th class="bg-light">Posisi</th>
						<td class="text-left">{{ $applicant->job->title }}</td>
					</tr>
					<tr>
						<th class="bg-light">created_at</th>
						<td class="text-left">{{ $applicant->created_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">updated_at</th>
						<td class="text-left">{{ $applicant->updated_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">Status</th>
						<td class="text-left">
							<label class="badge {{ ($applicant->status == 1) ? 'badge-success' : 'badge-danger' }}">
								{{ ($applicant->status == 1) ? 'Dicek' : 'Belum Dicek' }}</label>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
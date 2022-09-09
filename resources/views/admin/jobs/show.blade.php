@extends('admin.layouts.main')

@section('title', 'Detail Lowongan Kerja | '.$job->title)

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

<a href="{{ route('jobs.index') }}"><div class="btn btn-secondary mb-2">Kembali</div></a>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Lowongan Kerja</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm table-bordered">
				<tbody>
					<tr>
						<th width="20%" class="bg-light">Nama Lowongan</th>
						<td class="text-left">{{ $job->title }}</td>
					</tr>
					<tr>
						<th class="bg-light">Deskripsi</th>
						<td class="text-left">{!! $job->description !!}</td>
					</tr>
					<tr>
						<th class="bg-light">created_at</th>
						<td class="text-left">{{ $job->created_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">updated_at</th>
						<td class="text-left">{{ $job->updated_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">Status</th>
						<td class="text-left">
							<label class="badge {{ ($job->status == 1) ? 'badge-success' : 'badge-danger' }}">
								{{ ($job->status == 1) ? 'Dibuka' : 'Ditutup' }}</label>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
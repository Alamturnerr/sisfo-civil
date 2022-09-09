@extends('admin.layouts.main')

@section('title', 'Pelamar')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pelamar</h1>
<p class="mb-4">Halaman ini menampilkan data dari <a target="_blank" href="/loker#form-job">formulir lowongan kerja</a>.</p>

<div class="text-center d-flex flex-row-reverse">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	@endif
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		@if(isset($job))
			<h6 class="m-0 font-weight-bold text-primary">Tabel Pelamar Kerja - Posisi <i class="fas fa-sm fa-fw fa-tag"></i> {{ $job->title }}</h6>
		@else
			<h6 class="m-0 font-weight-bold text-primary">Tabel Pelamar Kerja</h6>
		@endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Nama</th>
						<th width="15%">Posisi</th>
						<th width="15%">created_at</th>
						<th width="15%">updated_at</th>
						<th width="15%">Status</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Nama</th>
						<th width="15%">Posisi</th>
						<th width="15%">created_at</th>
						<th width="15%">updated_at</th>
						<th width="15%">Status</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @if ($applicants->count())
					@foreach ($applicants as $index => $applicant)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
							<td class="text-left">{{ $applicant->name }}</td>
							<td> {{ $applicant->job->title }}</td>
							<td class="text-center">{{ $applicant->created_at }}</td>
							<td class="text-center">{{ $applicant->updated_at }}</td>
							<td class="text-center">
								<label class="badge {{ ($applicant->status == 1) ? 'badge-success' : 'badge-danger' }}">
									{{ ($applicant->status == 1) ? 'Dicek' : 'Belum Dicek' }}</label>
							</td>
                            <td>
                                <a target="_blank" class="btn btn-outline-success btn-sm my-1" href="{{asset($applicant->takePdf()) }}"><i class="fas fa-download"></i></a>
								<a class="btn btn-outline-success btn-sm my-1" href="{{ route('applicants.show',$applicant->id) }}"><i class="fas fa-eye"></i></a>
								<a class="btn btn-outline-primary btn-sm my-1" href="{{ route('applicants.edit',$applicant->id) }}"><i class="fas fa-edit"></i></a>
								<button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deleteApplicantModal-{{ $applicant->id }}"><i class="fas fa-trash"></i></button>
							</td>
                    </tr>
                    <!-- Delete Repositori Modal -->
					<div class="modal fade" id="deleteApplicantModal-{{ $applicant->id }}" tabindex="-1" aria-labelledby="deleteApplicantModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteApplicantModal">Yakin untuk dihapus?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Data <strong>{{ $applicant->name }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
								</div>
								<div class="modal-footer">
									<form action="{{ route('applicants.destroy', $applicant->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-danger" onclick="disableButton(this)">Hapus</button>
									</form>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
				@endif    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('admin.layouts.main')

@section('title', 'Galery')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Galery </h1>
<p class="mb-4">Halaman ini menampilkan data di <a target="_blank" href="/">halaman Home. </a></p>
<div class="row">
	<div class="col-md-4 text-center">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	@endif
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('galery.create') }}">
			<button type="button" class="btn btn-success mb-3">Tambah Data</button>
		</a>
	</div>
	<div class="col-md-4 text-center">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	@endif
	</div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Tabel Galery</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
						<th width="80%" class="text-left">Nama</th>
						<th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="5%">No</th>
						<th width="80%" class="text-left">Nama</th>
						<th width="15%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @if ($galeries->count())
					@foreach ($galeries as $index => $galery)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
							<td class="text-left">{{ $galery->title }}</td>
                            <td>
								<a class="btn btn-outline-success btn-sm my-1" href="{{ route('galery.show',$galery->id) }}"><i class="fas fa-eye"></i></a>
								<a class="btn btn-outline-primary btn-sm my-1" href="{{ route('galery.edit',$galery->id) }}"><i class="fas fa-edit"></i></a>
								<button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deleteeventModal-{{ $galery->id }}"><i class="fas fa-trash"></i></button>
							</td>
                    </tr>
                    <!-- Delete event Modal -->
					<div class="modal fade" id="deleteeventModal-{{ $galery->id }}" tabindex="-1" aria-labelledby="deleteeventModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-name" id="deleteeventModal">Yakin untuk dihapus?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Event <strong>{{ $galery->title }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
								</div>
								<div class="modal-footer">
									<form action="{{ route('galery.destroy', $galery->id) }}" method="POST">
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
@extends('admin.layouts.main')

@section('title', 'Gallery')
@section('content')
<!-- Page Heading -->
@if(isset($event_category))
<h1 class="h3 mb-2 text-gray-800">Event <i class="fas fa-sm fa-fw fa-tag"></i></h1>
<p class="mb-4">Halaman ini menampilkan data di <a target="_blank" href="/event">halaman event. </a></p>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('gallery.index') }}"><div class="btn btn-secondary mb-3">Kembali</div></a>
	</div>
	<div class="col-md-4 text-center">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	@endif
	</div>
</div>
@else
<h1 class="h3 mb-2 text-gray-800">Gallery</h1>
<p class="mb-4">Halaman ini menampilkan data di <a target="_blank" href="/event">halaman event</a>.</p>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('gallery.create') }}">
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
@endif

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Tabel Gallery</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
						<th width="45%" class="text-left">Image</th>
                        <th width="35%">created_at</th>
						<th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="5%">No</th>
						<th width="45%" class="text-left">Image</th>
                        <th width="35%">created_at</th>
						<th width="15%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @if ($gallery->count())
					@foreach ($gallery as $index => $gallerys)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
							<td class="text-left">{{ $gallerys->image }}</td>
							<td class="text-center">{{ $gallerys->created_at }}</td>
                            <td>
								<button type="button" class="btn btn-outline-success btn-sm my-1" data-toggle="modal" aria-labelledby="showimageModal" data-target="#showimageModal-{{ $gallerys->slug }}"><i class="fas fa-eye"></i></button>
								<button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deleteimageModal-{{ $gallerys->slug }}"><i class="fas fa-trash"></i></button>
							</td>
                    </tr>
                    <!-- Delete event Modal -->
					<div class="modal fade" id="deleteimageModal-{{ $gallerys->slug }}" tabindex="-1" aria-labelledby="deleteimageModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-name" id="deleteimageModal">Yakin untuk dihapus?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p><strong>{{ $gallerys->image }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
								</div>
								<div class="modal-footer">
									<form action="{{ route('gallery.destroy', $gallerys->slug) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-danger" onclick="disableButton(this)">Hapus</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Show Image Modal -->
					<div class="modal fade" id="showimageModal-{{ $gallerys->slug }}" tabindex="-1" aria-labelledby="showimageModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-name" id="showimageModal">Image View</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
								<img src="{{ asset($gallerys->takeImage()) }}" alt="{{ $gallerys->slug }}" width="65%" class="justify-content-center img-thumbnail">
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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
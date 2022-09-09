@extends('admin.layouts.main')

@section('title', 'Kategori Repositori')

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kategori Repositori</h1>
<p class="mb-4">Halaman ini menampilkan data kategori dari repositori.</p>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('repository_categories.create') }}">
			<button type="button" class="btn btn-success mb-3">Tambah Data</button>
		</a>
	</div>
	<div class="col-md-4 text-center">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	@endif
	@if ($message = Session::get('error'))
		<div class="alert alert-danger">
			<span>{{ $message }}</span>
		</div>
	@endif
	</div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		@if(isset($repository_category))
			<h6 class="m-0 font-weight-bold text-primary">Tabel Kategori Repositori - Kategori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $repository_category->name }}</h6>
		@else
			<h6 class="m-0 font-weight-bold text-primary">Tabel Kategori Repositori</h6>
		@endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Nama</th>
                        <th width="15%">Slug</th>
						<th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Nama</th>
                        <th width="15%">Slug</th>
						<th width="20%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @if ($repositoryCategories->count())
					@foreach ($repositoryCategories as $index => $repository)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
							<td class="text-left">{{ $repository->name }}</td>
							<td> {{ $repository->slug }}</a></td>
                            <td>
								<a class="btn btn-outline-primary btn-sm my-1" href="{{ route('repository_categories.edit',$repository->slug) }}"><i class="fas fa-edit"></i></a>
								<button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deletePostModal-{{ $repository->slug }}"><i class="fas fa-trash"></i></button>
							</td>
                    </tr>
                    <!-- Delete Post Modal -->
					<div class="modal fade" id="deletePostModal-{{ $repository->slug }}" tabindex="-1" aria-labelledby="deletePostModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deletePostModal">Yakin untuk dihapus?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Kategori <strong>{{ $repository->name }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
								</div>
								<div class="modal-footer">
									<form action="{{ route('repository_categories.destroy', $repository->slug) }}" method="POST">
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
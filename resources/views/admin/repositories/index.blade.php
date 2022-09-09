@extends('admin.layouts.main')

@section('title', 'Repositori')

@section('content')
<!-- Page Heading -->
@if(isset($repositoryCategory))
<h1 class="h3 mb-2 text-gray-800">Repositori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $repositoryCategory->name }}</h1>
<p class="mb-4">Halaman ini menampilkan data di halaman repositori dengan kategori {{ $repositoryCategory->name }}.</p>
<div class="row">
	<div class="col-md-8">	
		<a href="{{ route('repositories.index') }}"><div class="btn btn-secondary mb-3">Kembali</div></a>
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
<h1 class="h3 mb-2 text-gray-800">Repositori</h1>
<p class="mb-4">Halaman ini menampilkan data di <a target="_blank" href="/repositori">halaman repositori</a>.</p>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('repositories.create') }}">
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
		@if(isset($repositoryCategory))
			<h6 class="m-0 font-weight-bold text-primary">Tabel Repositori - Kategori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $repositoryCategory->name }}</h6>
		@else
			<h6 class="m-0 font-weight-bold text-primary">Tabel Repositori</h6>
		@endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Judul</th>
                        <th width="10%">Tipe</th>
						<th width="15%">Kategori</th>
						<th width="15%">created_at</th>
						<th width="15%">updated_at</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Judul</th>
                        <th width="10%">Tipe</th>
						<th width="15%">Kategori</th>
						<th width="15%">created_at</th>
						<th width="15%">updated_at</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @if ($repositories->count())
					@foreach ($repositories as $index => $repository)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
							<td class="text-left">{{ $repository->title }}</td>
                            <td class="text-center">{{ $repository->type }}</td>
							@if(isset($repositoryCategory))
							<td><i class="fas fa-sm fa-fw fa-tag"></i> {{ $repository->repository_category->name }}</td>
							@else
							<td><a href="repositories/categories/{{ $repository->repository_category->slug }}"><i class="fas fa-sm fa-fw fa-tag"></i> {{ $repository->repository_category->name }}</a></td>
							@endif
							<td class="text-center">{{ $repository->created_at }}</td>
							<td class="text-center">{{ $repository->updated_at }}</td>
                            <td>
								<a target="_blank" class="btn btn-outline-success btn-sm my-1" href="{{asset($repository->takePdf()) }}"><i class="fas fa-download"></i></a>
								<a class="btn btn-outline-primary btn-sm my-1" href="{{ route('repositories.edit',$repository->id) }}"><i class="fas fa-edit"></i></a>
								<button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deleteRepositoriModal-{{ $repository->id }}"><i class="fas fa-trash"></i></button>
							</td>
                    </tr>
                    <!-- Delete Repositori Modal -->
					<div class="modal fade" id="deleteRepositoriModal-{{ $repository->id }}" tabindex="-1" aria-labelledby="deleteRepositoriModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteRepositoriModal">Yakin untuk dihapus?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Repositori <strong>{{ $repository->title }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
								</div>
								<div class="modal-footer">
									<form action="{{ route('repositories.destroy', $repository->id) }}" method="POST">
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
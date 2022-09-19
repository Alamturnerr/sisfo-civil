@extends('admin.layouts.main')

@section('title', 'Berita')

@section('content')
<!-- Page Heading -->
@if(isset($post_category))
<h1 class="h3 mb-2 text-gray-800">Berita <i class="fas fa-sm fa-fw fa-tag"></i> {{ $post_category->name }}</h1>
<p class="mb-4">Halaman ini menampilkan data di halaman berita dengan kategori {{ $post_category->name }}.</p>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('posts.index') }}"><div class="btn btn-secondary mb-3">Kembali</div></a>
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
<h1 class="h3 mb-2 text-gray-800">Berita</h1>
<p class="mb-4">Halaman ini menampilkan data di <a target="_blank" href="/berita">halaman berita</a>.</p>
<div class="row">
	<div class="col-md-8">
		<a href="{{ route('posts.create') }}">
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
		@if(isset($post_category))
			<h6 class="m-0 font-weight-bold text-primary">Tabel Berita - Kategori <i class="fas fa-sm fa-fw fa-tag"></i> {{ $post_category->name }}</h6>
		@else
			<h6 class="m-0 font-weight-bold text-primary">Tabel Berita</h6>
		@endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Judul</th>
                        <th width="15%">Kategori</th>
						<th width="10%">Total Pengunjung</th>
						<th width="15%">created_at</th>
						<th width="15%">updated_at</th>
						<th width="20%">Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="5%">No</th>
						<th class="text-left">Judul</th>
                        <th width="15%">Kategori</th>
						<th width="10%">Total Pengunjung</th>
						<th width="15%">created_at</th>
						<th width="15%">updated_at</th>
						<th width="15%">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                @if ($posts->count())
					@foreach ($posts as $index => $post)
                    <tr>
                        <td class="text-center">{{ ++$index }}</td>
							<td class="text-left">{{ $post->title }}</td>
							@if(isset($post_category))
							<td><i class="fas fa-sm fa-fw fa-tag"></i> {{ $post->post_category->name }}</td>
							@else
							<td><a href="posts/categories/{{ $post->post_category->slug }}"><i class="fas fa-sm fa-fw fa-tag"></i> {{ $post->post_category->name }}</a></td>
							@endif
							<td class="text-left">{{ $post->total_visited }}</td>
							<td class="text-center">{{ $post->created_at }}</td>
							<td class="text-center">{{ $post->updated_at }}</td>
                            <td>
								<a class="btn btn-outline-success btn-sm my-1" href="{{ route('posts.show',$post->slug) }}"><i class="fas fa-eye"></i></a>
								<a class="btn btn-outline-primary btn-sm my-1" href="{{ route('posts.edit',$post->slug) }}"><i class="fas fa-edit"></i></a>
								<button type="button" class="btn btn-outline-danger btn-sm my-1" data-toggle="modal" data-target="#deletePostModal-{{ $post->slug }}"><i class="fas fa-trash"></i></button>
							</td>
                    </tr>
                    <!-- Delete Post Modal -->
					<div class="modal fade" id="deletePostModal-{{ $post->slug }}" tabindex="-1" aria-labelledby="deletePostModal" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deletePostModal">Yakin untuk dihapus?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Berita <strong>{{ $post->title }}</strong> akan dihapus secara permanen. Pilih "Hapus" jika sudah yakin.</p>
								</div>
								<div class="modal-footer">
									<form action="{{ route('posts.destroy', $post->slug) }}" method="POST">
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
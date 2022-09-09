@extends('admin.layouts.main')

@section('title', 'Detail Berita | '.$post->title)

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

<a href="{{ route('posts.index') }}"><div class="btn btn-secondary mb-2">Kembali</div></a>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm table-bordered">
				<tbody>
					<tr>
						<th width="20%" class="bg-light">Judul</th>
						<td class="text-left">{{ $post->title }}</td>
					</tr>
					<tr>
						<th class="bg-light">Deskripsi</th>
						<td class="text-left">{!! $post->description !!}</td>
					</tr>
					<tr>
						<th class="bg-light">Kategori</th>
						<td class="text-left"><a href="categories/{{ $post->post_category->slug }}"><i class="fas fa-sm fa-fw fa-tag"></i> {{ $post->post_category->name }}</a></td>
					</tr>
					<tr>
						<th class="bg-light">created_at</th>
						<td class="text-left">{{ $post->created_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">updated_at</th>
						<td class="text-left">{{ $post->updated_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">Gambar</th>
						<td class="text-left">
							@if($post->thumbnail)
							<img src="{{ asset($post->takeImage()) }}" alt="{{ $post->thumbnail }}" width="35%" class="img-thumbnail">
							@else
							<em>- Belum Ada Gambar -</em>
							@endif
						</td>
					</tr>
					<tr>
						<th class="bg-light">Slug</th>
						<td class="text-left">{{ $post->slug }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
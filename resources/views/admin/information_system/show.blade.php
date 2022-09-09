@extends('admin.layouts.main')

@section('title', 'Detail Sistem Informasi | '.$informationSystem->title)

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

<a href="{{ route('information_system.index') }}"><div class="btn btn-secondary mb-2">Kembali</div></a>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Sistem Informasi</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm table-bordered">
				<tbody>
					<tr>
						<th width="20%" class="bg-light">Judul</th>
						<td class="text-left">{{ $informationSystem->title }}</td>
					</tr>
					<tr>
						<th class="bg-light">Deskripsi</th>
						<td class="text-left">{!! $informationSystem->description !!}</td>
					</tr>
					<tr>
						<th class="bg-light">Status</th>
						@if($informationSystem->status =='Daerah Rawan')
							<td class="text-left"><span class="badge badge-danger">{{ $informationSystem->status }}</span></td>
						@elseif($informationSystem->status =='Daerah Strategis')
							<td class="text-left"><span class="badge badge-success">{{ $informationSystem->status }}</span></td>
						@elseif($informationSystem->status =='Dalam Pembangunan')
							<td class="text-left"><span class="badge badge-warning">{{ $informationSystem->status }}</span></td> 
						@endif
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Provinsi</th>
						<td class="text-left">{{ $informationSystem->province }}</td>
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Kota</th>
						<td class="text-left">{{ $informationSystem->city }}</td>
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Alamat Lengkap</th>
						<td class="text-left">{{ $informationSystem->address }}</td>
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Latitude</th>
						<td class="text-left">{{ $informationSystem->x }}</td>
					</tr>
                    <tr>
						<th width="20%" class="bg-light">Longitude</th>
						<td class="text-left">{{ $informationSystem->y }}</td>
					</tr>
					<tr>
						<th class="bg-light">created_at</th>
						<td class="text-left">{{ $informationSystem->created_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">updated_at</th>
						<td class="text-left">{{ $informationSystem->updated_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">Gambar</th>
						<td class="text-left">
							@if($informationSystem->thumbnail)
							<img src="{{ asset($informationSystem->takeImage()) }}" alt="{{ $informationSystem->thumbnail }}" width="35%" class="img-thumbnail">
							@else
							<em>- Belum Ada Gambar -</em>
							@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
@extends('admin.layouts.main')

@section('title', 'Detail Event | '.$event->name)

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

<a href="{{ route('events.index') }}"><div class="btn btn-secondary mb-2">Kembali</div></a>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm table-bordered">
				<tbody>
					<tr>
						<th width="20%" class="bg-light">Nama</th>
						<td class="text-left">{{ $event->name }}</td>
					</tr>
					<tr>
						<th class="bg-light">Deskripsi</th>
						<td class="text-left">{!! $event->description !!}</td>
					</tr>
					<tr>
						<th class="bg-light">Harga</th>
						<td class="text-left">{{ $event->price }}</td>
					</tr>
                    <tr>
						<th class="bg-light">Lokasi</th>
						<td class="text-left">{{ $event->location }}</td>
					</tr>
                    <tr>
						<th class="bg-light">Link</th>
						<td class="text-left">
							@if($event->link == null)
								-
							@else
								<a href="{{ $event->link }}" target="_blank">{{ $event->link }}</a>
							@endif
						</td>
					</tr>
					<tr>
						<th class="bg-light">Tanggal dan Waktu</th>
						<td class="text-left">{{Carbon\Carbon::parse($event->date_time)->translatedFormat("d F Y H:i")}}</td>
						
					</tr>
					<tr>
						<th class="bg-light">created_at</th>
						<td class="text-left">{{ $event->created_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">updated_at</th>
						<td class="text-left">{{ $event->updated_at }}</td>
					</tr>
					<tr>
						<th class="bg-light">Poster</th>
						<td class="text-left">
							@if($event->poster)
							<img src="{{ asset($event->takeImage()) }}" alt="{{ $event->poster }}" width="35%" class="img-thumbnail">
							@else
							<em>- Belum Ada Gambar -</em>
							@endif
						</td>
					</tr>
					<tr>
						<th class="bg-light">Slug</th>
						<td class="text-left">{{ $event->slug }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
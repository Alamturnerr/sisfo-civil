@extends('user.layouts.main')

@section('title', 'Event')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/event.css') }}">
<style>
	@foreach ($events as $index => $event)
        .custom-card-{{$event->slug}}{
            background-image: url('{{asset($event->takeImage())}}');
            background-size: cover;
            width:100%;
            height:300px;
			background-position: center;
        }
    @endforeach;
</style>
@endsection

@section('content')
<header>
    <div class="jumbotron jumbotron-fluid jumbotron-event d-flex align-content-center flex-wrap">
        <div class="container text-white text-center">
                <h2 class="display-4 text-uppercase">Event</h2>
            <div>
                <p class="lead">Ikuti event terbaru kami.</p>
            </div>
        </div>
    </div>
</header>

<main class="container my-4">
		@if($events->count() || request('search'))
			<form class="d-flex" role="search" action="/event" method="get">
				<input autocomplete="off" class="form-control" type="search" placeholder="Cari event.." aria-label="Search" name="search"> 
					<button class="btn btn-primary btn-lg active btn-sm" type="submit"> <i class="fas fa-search text-white"></i> </button>
			</form>
		@endif

		<section>	
			@if($events->count())
				<div class="row">
					@foreach ($events as $index => $event)
					<div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch justify-content-center">
						<div class="card shadow my-3 col-12 p-0">
							<a href="/event/{{ $event->slug }}">
								<div class="custom-card-{{ $event->slug }} events-card-img"></div>
							</a>
							<div class="card-body text-center">
								<a href="event/{{ $event->slug }}">
									<h5 class="card-title font-weight-bold">{{ Str::limit($event->name, 50) }}</h5>
								</a>
								<p class="card-text"><i class="far fa-clock mr-2"></i>{{Carbon\Carbon::parse($event->date_time)->translatedFormat("d F Y, H:i")}}</p>
								<a href="/event/{{ $event->slug }}" class="btn btn-primary">Detail Event</a>
							</div>
						</div>
						<br>
					</div>
					@endforeach
				</div>
			@elseif(!$events->count() && request('search'))
				<p class="text-center my-5">-- Hasil pencarian tidak ditemukan --</p>
			@else
				<p class="text-center my-5">-- Event belum tersedia --</p>
			@endif
		</section>

	<!-- {{-- Pagination --}} -->
	@if($events->count())
		{{ $events->links() }}
	@endif
	<!-- {{-- End Pagination --}} -->

</main>
@endsection
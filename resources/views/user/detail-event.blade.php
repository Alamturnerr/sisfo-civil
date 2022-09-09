@extends('user.layouts.main')

@section('title', $event->name)

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/detail-event.css') }}">
@endsection

@section('content')
<main>
    <div class="container">

        <!-- Event Title -->
        <section class='row my-2 pt-3'>
            <div class="col-md-12">
                <h2>{{ $event->name }}</h2>
                <hr>
            </div>
        </section>
        <!-- End Event Title -->

        <!-- Event Body -->
        <section class="row my-2">
            <div class="col-md-12 py-3 text-center justify-content-center">
                <img class="img-fluid w-50" src="{{ asset($event->takeImage()) }}" alt="{{ $event->poster }}"">
            </div>
            <div class="col-md-12 mr-auto my-auto mx-auto">
                <div>
                    <p>{!! $event->description !!}</p>
                </div>
            </div>
        </section>
        <!-- End Event Body -->

        <!-- Event Card -->
        <section class="card bg-card-event my-5 ">
            <div class="row col-md-12 justify-content-center mt-3 pl-5">

                <div class="col-md-6 mx-auto mt-3 mb-3">
                    <h6 class="mb-2 font-weight-bold">
                        <i class="far fa-clock mr-2"></i>Waktu Event
                    </h6>
                    <p>{{Carbon\Carbon::parse($event->date_time)->translatedFormat("d F Y H:i")}}</p>
                </div>

                @if($event->link == NULL)
                <div class="col-md-6 mx-auto mt-3 mb-3">
                    <h6 class="mb-2 font-weight-bold">
                        <i class="fas fa-link mr-2"></i>Link Event
                    </h6>
                    <p>-</p>
                </div>
                @else
                <div class="col-md-6 mx-auto mt-3 mb-3">
                    <h6 class="mb-2 font-weight-bold">
                        <i class="fas fa-link mr-2"></i>Link Event
                    </h6>
                    <a target="_blank" href="{{ $event->link }}">{{ $event->link }}</a>
                </div>
                @endif

                <div class="col-md-6 mx-auto mt-3 mb-3">
                    <h6 class="mb-2 font-weight-bold">
                        <i class="fas fa-map-marker-alt mr-2"></i>Lokasi Event
                    </h6>
                    <p>{{ $event->location }}</p>
                </div>

                @if($event->price == "Rp. 0")
                <div class="col-md-6 mx-auto mt-3 mb-3">
                    <h6 class="mb-2 font-weight-bold">
                        <i class="fas fa-link mr-2"></i>Biaya Pendaftaran
                    </h6>
                    <p>Gratis</p>
                </div>
                @else
                <div class="col-md-6 mx-auto mt-3 mb-3">
                    <h6 class="mb-2 font-weight-bold">
                        <i class="fas fa-dollar-sign mr-2"></i>Biaya Pendaftaran
                    </h6>
                    <p>{{ $event->price }}</p>
                </div>
                @endif

            </div>
        </section>
        <!-- End Event Card -->
            
    </div>
    
</main>
@endsection
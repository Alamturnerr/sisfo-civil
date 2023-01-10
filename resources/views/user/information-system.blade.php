@extends('user.layouts.main')

@section('title', 'Sistem Informasi')

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>
<link rel="stylesheet" href="{{ asset('css/user/information-system.css') }}">
<style>
    @foreach ($informationSystem as $index => $information_system)
        .custom-information-system-{{$information_system->id}}{
            background-image: url('{{asset($information_system->takeImage())}}');
            background-size: cover;
            width:100%;
            height:100px;
        }
    @endforeach;
</style>
@endsection

@section('content')
    <header>  
        <div class="container my-4">
            <h2 class="my-4 pt-3">Sistem Informasi Infrastruktur Teknik Sipil</h2><hr>
        </div>
    </header>
    <main>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="map my-2 shadow"></div>
                    <div class="text-right">
                        <small><a href="https://www.flaticon.com/free-icons/pin" title="pin icons" target="blank">Pin icons created by Freepik - Flaticon</a></small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-light shadow d-inline-block mr-3 my-2">
                        <span><div class="bg-success box-color"></div> Daerah Strategis : {{ $informationSystem->where('status', 'Daerah Strategis')->count() }}</span><br>
                        <span><div class="bg-danger box-color"></div> Daerah Rawan : {{ $informationSystem->where('status', 'Daerah Rawan')->count() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    {{-- Leaflet JS --}}
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

    {{-- Sistem Informasi JS --}}
    <script src="{{asset('/js/user/information-system.js')}}"></script>
@endsection
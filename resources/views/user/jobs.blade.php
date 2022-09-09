@extends('user.layouts.main')

@section('title', 'Loker')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/user/jobs.css') }}">
@endsection

@section('content')
<!-- Jumbotron -->
<header>
    <div class="jumbotron jumbotron-fluid jumbotron-job d-flex align-content-center flex-wrap">
        <div class="container text-white text-left">
            <h2 class="display-4 text-uppercase">Lowongan Kerja Teknik Sipil Widyatama</h2>
            <div>
                <p class="lead">Lulusan Teknik Sipil UTama, yaitu menjadi Asisten Konsultan Perencana dan Pengawasan Bidang Teknik Sipil, Asisten Kontraktor Bidang Teknik Sipil, Wirausaha Bidang Teknik Sipil, Akademisi Bidang Teknik Sipil, Peneliti? Bidang Teknik Sipil.</p>
            </div>
        </div>
    </div>
</header>
<!-- End Jumbotron -->

<main>
    <div class="container">
        <div class="d-flex justify-content-center bg-primary text-white px-4 py-3 shadow my-5">
        <h4 class="my-auto">
            Lowongan Yang Tersedia
        </h4>
        </div>
        @if($jobs->count())
        <div class="row justify-content-left mb-5 mt-4">
            <div class="col-md-4 mb-4">
                <div class="list-group overflow-auto">
                    @foreach ($jobs as $index => $job)
                    <p id="{{ $job->id }}" class="m-0 link-job list-group-item list-group-item-action bg-primary li-border text-white">{{ $job->title }}</p>    
                    @endforeach
                </div>
            </div>
            <div class="col-md-8 text-justify">
                <div id="judul-job">
                    <h4>Pilih Profesi</h4>
                </div>
                <hr>
                <div id="deskripsi-job" class="text-left overflow-auto">
                    <div class="alert alert-info">Pilih sesuai potensi anda.</div>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="text-center">-- Lowongan belum tersedia --</p>
            </div>            
        </div>
        @endif
    </div>
    <!-- End Lowongan Kerja Tersedia -->
    
    <!-- Formulir Lamaran Kerja -->
    <div class="container mb-5">
        <div class="d-flex justify-content-center bg-primary text-white px-4 py-3 shadow my-5">
            <h4 id="form-job" class="my-auto">Formulir Lamaran Kerja</h4>
        </div>
        @if($jobs->count())
        <div class="row justify-content-between">
            <div class="col-md-6 mb-4">
                <form action="{{ route('applicants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Lengkap<span class="text-danger">*</span></label>
                    <input autocomplete="off" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama lengkap.." value="{{ old('name') }}">
                        @error('name')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			          	@enderror
                </div>
                <div class="form-group">
                    <label>Email<span class="text-danger">*</span></label>
                    <input autocomplete="off" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan email.." value="{{ old('email') }}">
                    @error('email')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			        @enderror
                </div>
                <div class="form-group">
                    <label>Nomor Kontak<span class="text-danger">*</span></label>
                    <input autocomplete="off" type="text" name="number" class="form-control @error('number') is-invalid @enderror" placeholder="Masukan nomor kontak.." value="{{ old('number') }}"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    @error('number')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			        @enderror
                </div>
                <div class="form-group">
                    <label>Alamat<span class="text-danger">*</span></label>
                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Masukan alamat..">{{ old('address') }}</textarea>
                    @error('address')
				        <div class="invalid-feedback">
			            	{{ $message }}
			          	</div>
			        @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Posisi Yang Akan Dipilih<span class="text-danger">*</span></label>
                    <select class="form-control @error('job_id') is-invalid @enderror" id="job_id" name="job_id">
                        <option disabled {{ (old('job_id') ? '':'selected') }}>-- Pilih Posisi --</option>
                        @foreach($jobs as $job) 
                            <option value="{{ $job->id }}" {{ (old('job_id') == $job->id ? 'selected':'') }}>{{ $job->title }}</option>
                        @endforeach
                    </select>
                    @error('job_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
				</div>
                    <div class="form-group">
						<label class="form-label">Unggah Resume atau CV<span class="text-danger">*</span></label>
						<div class="custom-file">
							<input autocomplete="off" type="file" class="custom-file-input @error('file') is-invalid @enderror" id="file" name="file">
							<label class="custom-file-label" for="file">Pilih File</label>
							<small class="text-muted">Format yang diperbolehkan hanya pdf. Ukuran maks 20mb.</small>
							@error('file')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
							@enderror
						</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="{{asset('/img/user/formulir-jobs.png')}}" alt="formulir-jobs">
            </div>
        </div>
        @else
        <p class="text-center my-5">-- Formulir belum tersedia --</p>
        @endif
    </div>
    <!-- End Formulir Lamaran Kerja -->
</main>
@endsection

@section('scripts')
    @if(session()->has('success'))
    <script>
        $(document).ready(function(){
            swal("{{ session()->get('success') }}\nSilakan tunggu balasan via email atau no telepon. Terimakasih.",{ icon: "success"});
        });
    </script>
    @endif
@endsection
@extends('user.applications.main-application')

@section('title', 'Aplikasi Stabilitas')

@section('header-aplikasi-1')
<h2 class="my-4 pt-3">Aplikasi Stabilitas</h2><hr>
@endsection

@section('image-formula-1')
<div class="col-md-4 my-auto mx-auto">
    <img class="img-fluid" src="{{asset('img/user/MencariStabilitas1-aplikasi.png')}}" alt="TekananTanahAktif-aplikasi">
</div>
@endsection

@section('application')
<main>
	<div class="container my-4">
		{{-- Mencari stabilitas dinding --}}
		<section>
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Mencari Stabilitas Dinding Penahan Tanah</h5>
				</div>
			</div>
	
			<div class="row my-4">
				<div class="col-lg-3">
					<p class="small text-center"><br></p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>q</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='q' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>h1</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='h1' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>h2</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='h2' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>h3</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='h3' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-3">
					<p class="small text-center">Tanah 1</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>C1</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='c1' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>ɣ1</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='al1' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
										</div>
									</div>
								</td> 
							</tr>
	
							<tr>
								<th>ϕ1</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='fi1' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">⁰</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<p class="small text-center">Tanah 2</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="table-responsive">
								<table class="table small table-bordered">
									<tr>
										<th>C2</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='c2' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>ɣ2</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='al2' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>ɣ1 sat</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='alsat' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>ɣw</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='alw' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="table-responsive">
								<table class="table small table-bordered">
									<tr>
										<th>ɣ beton</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='alcon' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>ϕ2</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='fi2' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">⁰</span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>ɣ2' = ɣ sat -ɣw</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='al2_' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p href="#" class="btn btn-success btn-application-1">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End --}}

		{{-- Tekanan tanah aktif --}}
		<section class="display-application-none show-aplication-1">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Tekanan Tanah Aktif (Pa)</h5>
				</div>
			</div>
	
			<div class="row my-4 text-center mx-auto">
				<div class="col-lg-8 mt-3">
					<img class="img-fluid w-75" src="{{asset('img/user/TekananTanahAktif-aplikasi.png')}}" alt="TekananTanahAktif-aplikasi">
				</div>
				<div class="col-lg-4 mt-3">
					<img  class="img-fluid w-50" src="{{asset('img/user/TekananTanahAktif2-aplikasi.png')}}" alt="TekananTanahAktif2-aplikasi">
				</div>
			</div>
	
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Ka1 = tan^2.(45-ϕ2/2) =</th>
								<td id="ka1"></td>
							</tr>
	
							<tr>
								<th>Ka2 = tan^2.(45-ϕ2/2) =</th>
								<td id="ka2"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>h1</th>
								<td id="h_1"></td>
							</tr>
							<tr>
								<th>h2</th>
								<td id="h_2"></td> 
							</tr>
							<tr>
								<th>h3</th>
								<td id="h_3"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>hc = (2.𝑐)/(ɣ√𝑘𝑎1)</th>
								<td id="hc"></td>
							</tr>
							<tr>
								<th>h1-hc</th>
								<td id="cal1"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	
			<div class="row">
				<div class="col-lg-12">
					<p class="small">Jarak ke O dari <span class="text-danger">titik pusat</span> berat secara <span class="text-danger">vertikal</span>.</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th scope="col">Kondisi</th>
									<th scope="col">No.	Diagram</th>
									<th scope="col">p kecil</th>
									<th scope="col">P besar</th>
									<th scope="col">Jarak ke O (m)</th>
									<th scope="col">Momen = Pa.Jarak (Kn.m)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="2">h1</td>
									<td>1</td>
									<td id="psmpa1"></td>
									<td id="pa1"></td>
									<td id="dist1"></td>
									<td id="ma1"></td>
								</tr>
								<tr>
									<td >2</td>
									<td id="psmpa2"></td>
									<td id="pa2"></td>
									<td id="dist2"></td>
									<td id="ma2"></td>
								</tr>
								<tr>
									<td rowspan="3">h2</td>
									<td>3</td>
									<td id="psmpa3"></td>
									<td id="pa3"></td>
									<td id="dist3"></td>
									<td id="ma3"></td>
								</tr>
								<tr>
									<td>4</td>
									<td id="psmpa4"></td>
									<td id="pa4"></td>
									<td id="dist4"></td>
									<td id="ma4"></td>
								</tr>
								<tr>
									<td>5</td>
									<td id="psmpa5"></td>
									<td id="pa5"></td>
									<td id="dist5"></td>
									<td id="ma5"></td>
								</tr>
								<tr>
									<td rowspan="5">h3</td>
									<td>6</td>
									<td id="psmpa6"></td>
									<td id="pa6"></td>
									<td id="dist6"></td>
									<td id="ma6"></td>
								</tr>
								<tr>
									<td>7</td>
									<td id="psmpa7"></td>
									<td id="pa7"></td>
									<td id="dist7"></td>
									<td id="ma7"></td>
								</tr>
								<tr>
									<td>8</td>
									<td id="psmpa8"></td>
									<td id="pa8"></td>
									<td id="dist8"></td>
									<td id="ma8"></td>
								</tr>
								<tr>
									<td>9</td>
									<td id="psmpa9"></td>
									<td id="pa9"></td>
									<td id="dist9"></td>
									<td id="ma9"></td>
								</tr>
								<tr>
									<td>10</td>
									<td id="psmpa10"></td>
									<td id="pa10"></td>
									<td id="dist10"></td>
									<td id="ma10"></td>
								</tr>
							  </tbody>
							  <thead>
									<th colspan="3"></th>
									<th id="totalpa"></th>
									<th colspan="1"></th>
									<th id="totalma"></th>
							  </thead>
						</table>
					</div>
				</div>
			</div>
		</section>
		{{-- End --}}
		{{-- Tekanan tanah pasif --}}
		<section class="display-application-none show-aplication-1">
			<div class="row my-4">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Tekanan Tanah Pasif (Pp)</h5>
				</div>
			</div>
	
			<div class="row my-4 text-center mx-auto">
				<div class="col-lg-12">
					<img class="img-fluid" src="{{asset('img/user/TekananTanahPasif-aplikasi.png')}}" alt="TekananTanahPasif-aplikasi">
				</div>
			</div>
	
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>hp1</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="hp1" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>hp2</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="hp2" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Kp1 = tan^2.(45+ϕ2/2)</th>
								<td id="kp1"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	
			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-2">Hitung</p>
				</div>
			</div>
	
			
		</section>
		{{-- End --}}
		{{-- Tekanan akibat beban --}}
		
		<section class="display-application-none show-aplication-2">
		<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="table-responsive">
						<p class="small">Jarak ke O dari <span class="text-danger">titik pusat</span> berat secara <span class="text-danger">vertikal</span>.</p>
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th scope="col">No. Diagram</th>
									<th scope="col">p kecil</th>
									<th scope="col">P besar</th>
									<th scope="col">Jarak ke O (m)</th>
									<th scope="col">Momen = Pa.Jarak (Kn.m)</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
									<td >1</td>
									<td id="psmpp1"></td>
									<td id='plpp1'></td>
									<td id='jkopp1'></td>
									<td id="mmpp1"></td>
								</tr>
								<tr>
									<td >2</td>
									<td id="psmpp2"></td>
									<td id="plpp2"></td>
									<td id="jkopp2"></td>
									<td id="mmpp2"></td>
								</tr>
							  </tbody>
							  <thead>
									<th colspan="2"></th>
									<th id="totalpp"></th>
									<th colspan="1"></th>
									<th id="totalmp"></th>
							  </thead>
						</table>
					</div>
				</div>
			</div>
			<div class="row my-4">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Tekanan akibat beban (PW)</h5>
				</div>
			</div>
	
			<div class="row my-4 text-center mx-auto">
				<div class="col-lg-12">
					<img class="img-fluid w-50" src="{{asset('img/user/TekananAkibatBeban-aplikasi.png')}}" alt="TekananAkibatBeban-aplikasi">
				</div>
			</div>
	
			<div class="row my-4 justify-content-center text-center">
				<div class="col-lg-12">
					<p class="small">Rumus Dasar<br>Weight (W) = ɣ . Volume</p>
				</div>
				<div class="col-lg-3">
					<p class="small text-center"><br></p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>q</th>
								<td id="q_"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-3">
					<p class="small text-center">Tanah 1</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>ɣ1</th>
								<td id="al_1"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="small text-center">Tanah 2</p>
					<div class="row">
						<div class="col-lg-6">
							<div class="table-responsive">
								<table class="table small table-bordered">
									<tr>
										<th>ɣ2</th>
										<td id="al_2"></td>
									</tr>
									<tr>
										<th>ɣ2 sat</th>
										<td id="al1_sat"></td>
									</tr>
									<tr>
										<th>ɣw</th>
										<td id="al_w"></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="table-responsive">
								<table class="table small table-bordered">
									<tr>
										<th>ɣ beton</th>
										<td id="albet"></td>
									</tr>
									<tr>
										<th>ϕ2</th>
										<td id="fi_2"></td>
									</tr>
									<tr>
										<th>ɣ2' = ɣ sat -ɣw</th>
										<td id="al_2_"></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<p class="small text-center">X</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Lebar bidang 1 (x1)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x1" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Lebar bidang 2, segitiga (x2)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x2" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Lebar bidang 3 (x3)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x3" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Lebar bidang 4 (x4)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x4" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Lebar bidang 5 (x5)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x5" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Lebar bidang 6 (x6)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x6" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr></tr>
							<tr>
								<th>Lebar kiri bawah (x7)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x7" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Lebar kanan bawah (x8)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="x8" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-4">
					<p class="small text-center">Y</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Tinggi bidang 1 (y1)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="y1" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Tinggi bidang 2 (y2)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="y2" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Tinggi bidang 3 (y3)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="y3" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Tinggi bidang 4 (y4)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="y4" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Tinggi bidang 5 (y5)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="y5" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Tinggi bidang 6 (y6)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="y6" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-4">
					<p class="small text-center">Z</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>z pakai</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id="z" placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	
			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-3">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End --}}
		{{-- Tekanan berat dinding --}}
		<section class="display-application-none show-aplication-3">
			<div class="row my-4">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Tekanan berat dinding penahan dan momen terhadap O (Kaki depan).</h5>
				</div>
			</div>
	
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p class="small">Jarak ke O dari <span class="text-danger">titik pusat</span> berat secara <span class="text-danger">horizontal</span>.</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Volume = x.y.z</th>
									<th scope="col">ɣ</th>
									<th scope="col">W   = ɣ.Volume</th>
									<th scope="col">Jarak ke O (m)</th>
									<th scope="col">Momen = Pa.Jarak (Kn.m)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td id="vol1"></td>
									<td id="alafon1"></td>
									<td id="w1"></td>
									<td id="jkokd1"></td>
									<td id="mmkd1"></td>
								</tr>
								<tr>
									<td>2</td>
									<td id="vol2"></td>
									<td id="alafon2"></td>
									<td id="w2"></td>
									<td id="jkokd2"></td>
									<td id="mmkd2"></td>
								</tr>
								<tr>
									<td>3</td>
									<td id="vol3"></td>
									<td id="alafon3"></td>
									<td id="w3"></td>
									<td id="jkokd3"></td>
									<td id="mmkd3"></td>
								</tr>
								<tr>
									<td >4</td>
									<td id="vol4"></td>
									<td id="alafon4"></td>
									<td id="w4"></td>
									<td id="jkokd4"></td>
									<td id="mmkd4"></td>
								</tr>
								<tr>
									<td>5</td>
									<td id="vol5"></td>
									<td id="alafon5"></td>
									<td id="w5"></td>
									<td id="jkokd5"></td>
									<td id="mmkd5"></td>
								</tr>
								<tr>
									<td>6</td>
									<td id="vol6"></td>
									<td id="alafon6"></td>
									<td id="w6"></td>
									<td id="jkokd6"></td>
									<td id="mmkd6"></td>
								</tr>
								<tr>
									<td>7</td>
									<td id="vol7"></td>
									<td id="alafon7"></td>
									<td id="w7"></td>
									<td id="jkokd7"></td>
									<td id="mmkd7"></td>
								</tr>
							</tbody>
							<thead>
								<th colspan="3"></th>
								<th id="totalw"></th>
								<th></th>
								<th id="totalmw"></th>
							</thead>
						</table>
					</div>
				</div>
			</div>
	
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p class="small text-center">Stabilitas terhadap penggulingan</p>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th rowspan="4">𝐹𝑔𝐼= (Σ 𝑀𝑤+ Σ 𝑀𝑝)/(Σ 𝑀𝑎) , > 1,5</th>
							</tr>
							<tr>
								<th scope="col" id="sigmw"></th>
							</tr>
							<tr>
								<th scope="col" id="sigma"></th>
							</tr>
							<tr>
								<th scope="col" id="sigmp"></th>
							</tr>
							<tr>
								<th colspan="3" id="fgl"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		{{-- End --}}
		<div class="col-12 text-center display-application-none show-aplication-1">
			<hr>
			<a href="/aplikasi/stabilitas" class="btn btn-danger btn-sm mx-auto">Reset</a>
		</div>
	</div>
</main>
@endsection

@section('scripts')
	<script src="{{asset('/js/user/application/stability.js')}}"></script>
@endsection
@extends('user.applications.main-application')

@section('title', 'Aplikasi Jembatan Balok-T')

@section('header-aplikasi-2')
<h2 class="my-4 pt-3">Aplikasi Jembatan Balok-T</h2><hr>
@endsection

@section('image-formula-2')
<div class="col-md-4 my-auto mx-auto">
    <img class="img-fluid" src="{{asset('img/user/DataStruktur1-aplikasi.jpeg')}}" alt="DataStrukturAtas-aplikasi">
</div>
@endsection

@section('application')
<main>
	<div class="container my-4">

		{{-- Data Struktur  Atas --}}
		<section>
			<br>
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Data Struktur Atas </h5>
				</div>
			</div>
	
			<div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Panjang bentang jembatan <br>( L )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='L' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Lebar jalan (jalur lalu-lintas) <br>( B1 )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='B1' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Lebar trotoar <br>( B2 )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='B2' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Lebar total jembatan <br>( B1 + 2 * B2 )</th>
								<td id="ltj"></td>
							</tr>

                            <tr>
								<th>Jarak antara Girder <br>( s )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='s' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>

                            <tr>
								<th>Dimensi Girder : <br>Lebar girder ( b )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='b' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Dimensi Girder : <br>Tinggi girder ( h )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='h' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
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
								<th>Dimensi Diafragma : <br>Lebar diafragma ( bd )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='bd' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Dimensi Diafragma : <br>Tinggi diafragma ( hd )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='hd' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>

                            <tr>
								<th>Tebal slab lantai jembatan <br>( ts )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='ts' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Tebal lapisan aspal + overlay <br>( ta )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='ta' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Tinggi genangan air hujan <br>( th )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='th' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Tinggi bidang samping <br>( ha )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='ha' placeholder="...">
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

            <div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/DataStruktur2-aplikasi.jpeg')}}" alt="DataStrukturAtas2-aplikasi">
				</div>
			</div>

            <div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Jumlah balok diafragma sepanjang L<br>( nd )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='nd' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">bh</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Jarak antara balok diafragma<br>( sd = L/nd )</th>
								<td id="sd"></td>
							</tr>
						</table>
					</div>
				</div>
            </div>
			
			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-1">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End Data Struktur Atas --}}

        {{-- Bahan Struktur --}}
		<section class="display-application-none show-application-1">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Bahan Struktur </h5>
				</div>
			</div>
	
			<div class="row my-3 justify-content-center">
				<div class="col-lg-2">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>K</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="K" placeholder="..."></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
	
			<div class="row"> 
				<div class="col-lg-12">
					<p class="small text-center">Mutu Beton : <br></p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Kuat tekan beton<br>( fc' = 0.83 * K / 10 )</th>
								<td id="fc"></td>
							</tr>
	
							<tr>
								<th>Modulus elastik<br>( Ec = 4700 * √ fc' )</th>
								<td id="EcM"></td>
							</tr>
	
							<tr>
								<th>Angka poisson<br>( υ )</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="ups" placeholder="... "></td>
							</tr>
	
							<tr>
								<th>Modulus geser<br>( G = Ec / [2*(1 + υ)] )</th>
								<td id="G"></td>
							</tr>
	
							<tr>
								<th>Koefisien muai panjang untuk beton<br>( α )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='alph' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">°C</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="small text-center">Mutu Baja : <br></p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Untuk baja tulangan dengan Ø > 12 mm<br>( U - )</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="Uld" placeholder="... "></td>
							</tr>
	
							<tr>
								<th>Tegangan leleh baja<br>( fy = U*10 )</th>
								<td id="fyld"></td>
							</tr>
						</table>
						<table class="table small table-bordered">
							<tr>
								<th>Untuk baja tulangan dengan Ø ≤ 12 mm :<br>( U - )</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="Ukd" placeholder="... "></td>
							</tr>
	
							<tr>
								<th>Tegangan leleh baja<br>( fy = U*10 )</th>
								<td id="fykd"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="small text-center">Specific Gravity : <br></p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Berat beton bertulang<br>( wc )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='wc' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">kN/m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Berat beton tidak bertulang<br>( w'c )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='w1c' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">kN/m</span>
										</div>
									</div>
								</td>
							</tr>
							
							<tr>
								<th>Berat aspal padat<br>( wa )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='wa' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">kN/m<sup>3</sup></span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Berat jenis air<br>( ww )</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='ww' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">kN/m<sup>3</sup></span>
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
					<p class="btn btn-success btn-application-2">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End Bahan Struktur --}}

		{{-- Analisis Beban --}}
		<section class="display-application-none show-application-2">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Analisis Beban </h5>
				</div>
				<div class="col-lg-12 text-center">
					<p class="medium py-3 font-weight-bold"> Berat Sendiri ( MS ) </p>
				</div>
			</div>

			{{-- Berat Sendiri --}}
			<section>
				<div class="row justify-content-center">
					<div class="col-lg-2">
						<p class="small">Faktor beban ultimit :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>K<sub>MS</sub></th>
									<td><input autocomplete="off" type="number" class="form-control border-primary" id="KMS" placeholder="..."></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<p class="small">Beban berat sendiri balok diafragma pada Girder dihitung sbb. :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Panjang bentang Girder<br>( L )</th>
									<td id="_L"></td>
								</tr>
		
								<tr>
									<th>Berat satu balok diafragma<br>( Wd = bd * (hd - ts) * s * wc )</th>
									<td id="Wd"></td>
								</tr>
	
								<tr>
									<th>Jumlah balok diafragma sepanjang bentang L<br>( nd )</th>
									<td id="_nd"></td>
								</tr>
		
								<tr>
									<th>Beban diafragma pada Girder<br>(  Qd = nd * Wd / L )</th>
									<td id="Qd"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row">
					<div class="col-lg-12">
						<p class="small">Beban <span class="text-danger">berat sendiri</span> pada Girder.</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<thead>
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Jenis</th>
										<th scope="col">Lebar (m)</th>
										<th scope="col">Tebal (m)</th>
										<th scope="col">Berat (kN/m<sup>3</sup>)</th>
										<th scope="col">Beban (kN/m)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Plat Lantai</td>
										<td id="_s"></td>
										<td id="_ts"></td>
										<td id="_wc"></td>
										<td id="PBeban"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Girder</td>
										<td id="_b"></td>
										<td id="GTebal"></td>
										<td id="_wc2"></td>
										<td id="GBeban"></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Diafragma</td>
										<td></td>
										<td></td>
										<td>Qd = </td>
										<td id="_Qd"></td>
									</tr>
								  </tbody>
								  <tr>
										<th colspan="5" class="text-right">Q<sub>MS</sub> =</th>
										<th id="QMS"></th>
								  </tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row my-4 mx-auto justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/AnalisisBeban_BebanSendiri-aplikasi.jpeg')}}" alt="AnalisisBeban_BebanSendiri-aplikasi">
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<p class="small">Gaya geser dan momen pada T-Girder akibat berat sendiri (MS) :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>V<sub>MS</sub><br>( 1/2 * Q<sub>MS</sub> * L )</th>
									<th id="VMS"></th>
								</tr>
		
								<tr>
									<th>M<sub>MS</sub><br>( 1/8 * Q<sub>MS</sub> * L<sup>2</sup> )</th>
									<th id="MMS"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<hr>
			</section>
			{{-- End Berat Sendiri --}}
			
			{{-- Beban Mati Tambahan --}}
			<section">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="medium py-3 font-weight-bold"> Beban Mati Tambahan ( MA ) </p>
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-2">
						<p class="small">Faktor beban ultimit : </p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>K<sub>MA</sub></th>
									<td><input autocomplete="off" type="number" class="form-control border-primary" id="KMA" placeholder="..."></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<p class="small">Jembatan dianalisis harus mampu memikul beban tambahan seperti : <br> 1. Penambahan lapisan aspal (overlay ) di kemudian hari <br> 2. Genangan air hujan jika sistim drainase tidak bekerja dengan baik</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Panjang bentang Girder<br>( L )</th>
									<td id="_L2"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row">
					<div class="col-lg-12">
						<p class="small">Beban <span class="text-danger">mati tambahan</span> pada Girder.</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<thead>
									<tr>
										<th scope="col">No.</th>
										<th scope="col">Jenis</th>
										<th scope="col">Lebar (m)</th>
										<th scope="col">Tebal (m)</th>
										<th scope="col">Berat (kN/m<sup>3</sup>)</th>
										<th scope="col">Beban (kN/m)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Lapisan Aspal + overlay</td>
										<td id="_s2"></td>
										<td id="LATebal"></td>
										<td id="_wa"></td>
										<td id="LABeban"></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Air Hujan</td>
										<td id="_s3"></td>
										<td id="AHTebal"></td>
										<td id="_ww"></td>
										<td id="AHBeban"></td>
									</tr>
								  </tbody>
								  <tr>
										<th colspan="5" class="text-right">Q<sub>MA</sub> = </th>
										<th id="QMA"></th>
								  </tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row my-4 mx-auto justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/AnalisisBeban_MatiTambahan-aplikasi.jpeg')}}" alt="AnalisisBeban_MatiTambahan-aplikasi">
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<p class="small">Gaya geser dan momen pada T-Girder akibat beban tambahan (MA) :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>V<sub>MA</sub><br>( 1/2 * Q<sub>MA</sub> * L )</th>
									<th id="VMA"></th>
								</tr>
		
								<tr>
									<th>M<sub>MA</sub><br>( 1/8 * Q<sub>MA</sub> * L<sup>2</sup> )</th>
									<th id="MMA"></th>
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
			{{-- End Beban Mati Tambahan --}}
		</section>
		{{-- End Analisis Beban --}}

		{{-- Beban Lalu-Lintas --}}
		<section class="display-application-none show-application-3">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Beban Lalu-Lintas </h5>
				</div>
				<div class="col-lg-12 text-center">
					<p class="medium py-3 font-weight-bold"> Beban Lajur "D" ( TD ) </p>
				</div>
			</div>

			{{-- Beban Lajur "D" --}}
			<section>
				<div class="row justify-content-center">
					<div class="col-lg-2">
						<p class="small">Faktor beban ultimit :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>K<sub>TD</sub></th>
									<td><input autocomplete="off" type="number" class="form-control border-primary" id='KTD' placeholder="..."></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="table-responsive mt-3">
							<table class="table small table-bordered">
								<tr>
									<th>q = 8.0</th>
									<td>kPa untuk L ≤ 30</td>
								</tr>
	
								<tr>
									<th>q = 8.0 *( 0.5 + 15 / L )</th>
									<td>kPa untuk L > 30</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row my-4 text-center mx-auto justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/BebanLaluLintas_BebanLajur1-aplikasi.jpeg')}}" alt="BebanLaluLintas_BebanLajur1-aplikasi">
						<p class="small">( Beban Lajur "D" )</p>
					</div>
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/BebanLaluLintas_BebanLajur2-aplikasi.jpeg')}}" alt="BebanLaluLintas_BebanLajur2-aplikasi">
						<p class="small">( Intensitas Uniformly Distributed Load ( UDL ) )</p>
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<p class="small">Untuk panjang bentang</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>L</th>
									<td id="_L3"></td>
								</tr>
	
								<tr>
									<th>q</th>
									<td id="q"></td>
								</tr>
							</table>
							<table class="table small table-bordered">
								<tr>
									<th>KEL mempunyai intensitas <br>( p )</th>
									<td id="p"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<p class="small">Faktor beban dinamis (Dinamic Load Allowance) untuk KEL diambil sebagai berikut :</p>
						<div class="table-responsive mt-3">
							<table class="table small table-bordered">
								<tr>
									<th>DLA = 0.40</th>
									<td>untuk L ≤ 50 m</td>
								</tr>
	
								<tr>
									<th>DLA = 0.4 - 0.0025*(L - 50)</th>
									<td>untul 50 < L < 90 m</td>
								</tr>
	
								<tr>
									<th>DLA = 0.30</th>
									<td>untuk L ≥ 90 m</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row my-4 mx-auto text-center justify-content-center">
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/BebanLaluLintas_BebanLajur3-aplikasi.jpeg')}}" alt="BebanLaluLintas_BebanLajur3-aplikasi">
						<p class="small">( Faktor Beban Dinamis (DLA) )</p>
					</div>
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/BebanLaluLintas_BebanLajur4-aplikasi.jpeg')}}" alt="BebanLaluLintas_BebanLajur4-aplikasi">
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-3 mt-5">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Jarak antara gilder <br>(s)</th>
									<td id="_s4"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-3">
						<p class="small">Untuk panjang bentang, L = <span id="_L4" class="text-danger">15</span> m <br> Maka,</p>
						<div class="table-responsive mt-3">
							<table class="table small table-bordered">
								<tr>
									<th>DLA</th>
									<td id="DLA"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-3">
						<p class="small">Beban lajur pada Girder</p>
						<div class="table-responsive mt-3">
							<table class="table small table-bordered">
								<tr>
									<th> Q<sub>TD</sub> = q * s</th>
									<td id="QTDl"></td>
								</tr>
								<tr>
									<th> P<sub>TD</sub> = (1 + DLA) * p * s</th>
									<td id="PTDl"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<p class="small">Gaya geser dan momen pada T-Gider akibat beban lajur "D" :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>V<sub>TD</sub> = 1/2 * ( QTD * L + PTD )</th>
									<td id="VTD"></td>
								</tr>
		
								<tr>
									<th>M<sub>TD</sub> = 1/8 * QTD * L2 + 1/4 * PTD * L</th>
									<td id="MTD"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<hr>
			</section>
			{{-- End Beban Lajur "D" --}}
			
			{{-- Beban Truk "T" --}}
			<section>
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="medium py-3 font-weight-bold"> BEBAN TRUK "T" ( TT ) </p>
					</div>
				</div>
	
				<div class="row justify-content-center">
					<div class="col-lg-2">
						<p class="small">Faktor beban ultimit :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>K<sub>TT</sub></th>
									<td><input type="number" class="form-control border-primary" id='KTT' placeholder="..."></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="table-responsive mt-3">
							<table class="table small table-bordered">
								<tr>
									<th>Beban hidup pada lantai jembatan berupa beban roda ganda oleh Truk (beban T) yang besarnya <br>( T )</th>
									<td id="T"></td>
								</tr>
	
								<tr>
									<th>Faktor beban dinamis untuk pembebanan truk diambil <br>( DLA )</th>
									<td id="_DLA"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-3">
						<p class="small">Beban truk "T" :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>P<sub>TT</sub> = ( 1 + DLA ) * T</sub></th>
									<td id="PTT"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
	
				<div class="row my-4 text-center mx-auto">
					<div class="col-lg-6">
						<img class="img-fluid" src="{{asset('img/user/BebanLaluLintas_BebanTruk-aplikasi.jpeg')}}" alt="BebanLaluLintas_BebanTruk-aplikasi">
					</div>
					<div class="col-lg-2">
						<table class="table small table-bordered">
							<tr>
								<th>a</th>
								<td id="at"></td>
							</tr>
		
							<tr>
								<th>b</th>
								<td id="bt"></td>
							</tr>
						</table>
					</div>
					<div class="col-lg-5">
						<p class="small text-left mt-2">Gaya geser dan momen pada T-Gider akibat beban truk "T" :</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>V<sub>TT</sub> = [ 9/8 * L - 1/4 * a + b ] / L * P<sub>TT</sub></th>
									<td id="VTT"></td>
								</tr>
								<tr>
									<th>M<sub>TT</sub> = V<sub>TT</sub> * L/2 - P<sub>TT</sub> * b</th>
									<td id="MTT"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-7">
						<p class="small text-left mt-2">Gaya geser dan momen yang terjadi akibat pembebanan lalu-lintas, 
							diambil yg memberikan pengaruh terbesar terhadap T-Girder di antara beban "D" dan beban "T".</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Gaya geser maksimum akibat beban<br>T</th>
									<th id="VTTD"></th>
								</tr>
								<tr>
									<th>Momen maksimum akibat beban<br>D</th>
									<th id="MTTD"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</section>
			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-4">Hitung</p>
				</div>
			</div>
			{{-- End Beban Truk "T" --}}
		</section>
		{{-- End Beban Lalu-Lintas --}}

		{{-- Gaya Rem --}}
		<section class="display-application-none show-application-4">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Gaya Rem ( TB ) </h5>
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-lg-2">
					<p class="small">Faktor beban ultimit :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>K<sub>TB</sub></th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="KTB" placeholder="..."></td>
							</tr>
						</table>
					</div>
				</div>
                <div class="col-lg-12">
					<p class="small">Pengaruh pengereman dari lalu-lintas diperhitungkan sebagai gaya dalam arah memanjang, dan dianggap bekerja pada jarak 1.80 m di atas lantai jembatan. 
						<br>Besarnya gaya rem arah memanjang jembatan tergantung panjang total jembatan (Lt) sebagai berikut :</p>
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Gaya rem, H<sub>TB</sub> = <span class="text-danger">250</span></th>
								<td>untuk Lt ≤ 80 m</td>
							</tr>

                            <tr>
								<th>Gaya rem, H<sub>TB</sub> = <span class="text-danger">250 + 2.5*(Lt - 80)</span></th>
								<td>untuk 80 < Lt < 180 m</td>
							</tr>

							<tr>
								<th>Gaya rem, H<sub>TB</sub> = <span class="text-danger">500</span></th>
								<td>untuk Lt ≥ 180 m</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/GayaRem-aplikasi.jpeg')}}" alt="GayaRem-aplikasi">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Panjang bentang Girder <br>( L )</span></th>
								<td id="_L5"></td>
							</tr>
	
							<tr>
								<th>Jumlah Girder <br>( n<sub>girder</sub> )</span></th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='nirger' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">bh</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>Gaya rem <br>( H<sub>TB</sub> )</span></th>
								<td id="HTB"></td>
							</tr>
	
							<tr>
								<th>Jarak antara Girder<br>( s )</span></th>
								<td id="_s5"></td>
							</tr>
	
							<tr>
								<th>Gaya rem untuk Lt ≤ 80 m <br>( T<sub>TB</sub> = H<sub>TB</sub> / n<sub>girder</sub> )</span></th>
								<td id="TTB1"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<div class="row mt-2">
				<div class="col-lg-8">
					<p class="small">Gaya rem juga dapat diperhitungkan sebesar 5% beban lajur "D" tanpa faktor beban dinamis. <br>
						Gaya rem, TTB = 5 % beban lajur "D" tanpa faktor beban dinamis</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>QTD = q * s</th>
								<td id="QTDr"></td>
							</tr>

							<tr>
								<th>PTD = p * s</th>
								<td id="PTDr"></td>
							</tr>

							<tr>
								<th>TTB = 0.05 * ( QTD * L + PTD )</th>
								<td id="TTB2"></td>
							</tr>

							<tr>
								<th><</th>
								<td id="_TTB1"></td>
							</tr>

							<tr>
								<th>Diambil gaya rem <br>( TTB )</th>
								<td id="TTBT"></td>
							</tr>
						</table>
					</div>
				</div>
                <div class="col-lg-4">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Lengan terhadap Titik berat balok <br>( y = 1.80 + ta + h/2 )</th>
								<td id="y"></td>
							</tr>

							<tr>
								<th>Beban momen akibat gaya rem <br>( M = TTB * y )</th>
								<td id="M"></td>
							</tr>
						</table>
					</div>
					<p class="small">Gaya geser dan momen maksimum pada balok akibat gaya rem :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>VTB = M / L</th>
								<th id="VTB"></th>
							</tr>

							<tr>
								<th>MTB = 1/2 * M</th>
								<th id="MTB"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-5">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End Gaya Rem --}}

		{{-- Beban Angin --}}
		<section class="display-application-none show-application-5">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Beban Angin ( EW ) </h5>
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-lg-2">
					<p class="small">Faktor beban ultimit :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>K<sub>EW</sub></th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="KEW" placeholder="..."></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-3">
					<p class="small">Dengan,</p>
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Cw</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="Cw" placeholder="..."></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-3">
					<p class="small">Kecepatan angin rencana,</p>
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Vw</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='Vw' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m/det</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="small">Beban angin tambahan yang meniup bidang samping kendaraan :</p>
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>T<sub>EW</sub> <br>( 0.0012*Cw*(Vw) )<sup>2</sup></th>
								<td id="TEW"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-9">
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Bidang vertikal yang ditiup angin merupakan bidang samping kendaraan dengan tinggi 2.00 m di atas lantai jembatan. <br>( h )</th>
								<td id="hew"></td>
							</tr>

							<tr>
								<th>Jarak antara roda kendaraan x <br>( x )</th>
								<td id="x"></td>
							</tr>

							<tr>
								<th>Beban akibat transfer beban angin ke lantai jembatan<br>( Q<sub>EW</sub> = 1/2*h / x * T<sub>EW</sub> )</th>
								<th id="QEW"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/BebanAngin-aplikasi.jpeg')}}" alt="BebanAngin-aplikasi">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-5">
					<p class="small text-left mt-2">Panjang bentang Girder, L = <span id="_L6" class="text-danger"></span> m <br>
						Gaya geser dan momen pada Girder akibat beban angin (EW) :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>V<sub>EW</sub> = 1/2 * Q<sub>EW</sub> * L</th>
								<th id="VEW"></th>
							</tr>

							<tr>
								<th>M<sub>EW</sub> = 1/8 * Q<sub>EW</sub> * L<sup>2</sup></th>
								<th id="MEW"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-6">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End Beban Angin --}}

		{{-- Pengaruh Temperatur --}}
		<section class="display-application-none show-application-6">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Pengaruh Temperatur ( ET ) </h5>
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-lg-9">
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>ΔT</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='deltaT' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">°C</span>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<th>Koefisien muai panjang untuk beton <br>( α )</th>
								<td id="_alph"></td>
							</tr>

							<tr>
								<th>Panjang bentang Girder<br>( L )</th>
								<td id="_L7"></td>
							</tr>

							<tr>
								<th>Shear stiffness of elastomeric bearing <br>( k )</th>
								<td id="k"></td>
							</tr>

							<tr>
								<th>Temperatur movement <br>( δ = α * ΔT * L )</th>
								<td id="delta"></td>
							</tr>

							<tr>
								<th>Gaya akibat temperatur movement <br>( F<sub>ET</sub> = k * δ )</th>
								<td id="FET"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/PengaruhTemperatur-aplikasi.jpeg')}}" alt="PengaruhTemperatur-aplikasi">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-6">
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Tinggi Girder <br>( h )</th>
								<td id="_h"></td>
							</tr>

							<tr>
								<th>Eksentrisitas <br>( e = h/2 )</th>
								<td id="e"></td>
							</tr>
							
							<tr>
								<th>Momen akibat pengaruh temperatur <br>( M = F<sub>ET</sub>*e )</th>
								<td id="Mt"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="small">Gaya geser dan momen pada Girder akibat pengaruh temperatur (ET) :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>V<sub>ET</sub> = M/L</th>
								<th id="VET"></th>
							</tr>

							<tr>
								<th>M<sub>ET</sub> = M</th>
								<th id="MET"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-7">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End Pengaruh Temperatur --}}

		{{-- Beban Gempa --}}
		<section class="display-application-none show-application-7">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Beban Gempa ( EQ ) </h5>
				</div>
			</div>

			<div class="row justify-content-center my-3">
				<div class="col-lg-12">
					<p class="small">Gaya gempa vertikal pada girder dihitung dengan menggunakan percepatan vertikal ke bawah 
						minimal sebesar 0.10 * g ( g = percepatan gravitasi ) atau dapat diambil 50% koefisien gempa horisontal statik ekivalen.</p>
				</div>
			</div>
			
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<p class="small">Koefisien beban gempa horisontal :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Kh = C * S</th>
							</tr>
						</table>
					</div>
					<ul class="small">
						<li>Kh = Koefisien beban gempa horisontal</li>
						<li>C = Koefisien geser dasar untuk wilayah gempa, waktu getar, dan kondisi tanah setempat</li>
						<li>S = Faktor tipe struktur yg berhubungan dengan kapasitas penyerapan energi gempa (daktilitas) dari struktur.</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<p class="small">Koefisien beban gempa horisontal :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>T = 2 * π * √ [ Wt / ( g * K<sub>P</sub> ) ]</th>
							</tr>
						</table>
					</div>
					<ul class="small">
						<li>Wt = Berat total yang berupa berat sendiri dan beban mati tambahan</li>
						<li>K<sub>P</sub> = kekakuan struktur yang merupakan gaya horisontal yang diperlukan untuk menimbulkan satu satuan lendutan.</li>
						<li>g = percepatan grafitasi bumi, g = <span class="text-danger">9.81</span> m/det<sup>2</sup></li>
					</ul>
				</div>
			</div>

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/BebanGempa1-aplikasi.jpeg')}}" alt="BebanGempa1-aplikasi">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-6">
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr class="text-center">
								<th colspan="2">Berat total yang berupa berat sendiri dan beban mati tambahan : <br>( Wt = QMS + QMA )</th>
							</tr>

							<tr>
								<th>Berat sendiri <br>( QMS )</th>
								<td id="_QMS"></td>
							</tr>

							<tr>
								<th>Beban mati tambahan <br>( QMA )</th>
								<td id="_QMA"></td>
							</tr>

							<tr>
								<th>Panjang bentang <br>( L )</th>
								<td id="_L8"></td>
							</tr>

							<tr>
								<th>Berat total <br>( Wt = (QMS + QMA)*L )</th>
								<td id="Wt"></td>
							</tr>

							<tr>
								<th colspan="2">Ukuran Girder :</th>
							</tr>

							<tr>
								<th>b</th>
								<td id="_b2"></td>
							</tr>

							<tr>
								<th>h</th>
								<td id="_h2"></td>
							</tr>
							
							<tr>
								<th>Momen inersia penampang Girder <br>( I = 1/12 * b * h<sup>3</sup> )</th>
								<td id="I"></td>
							</tr>

							<tr>
								<th colspan="2">Modulus elastik beton</th>
							</tr>
							
							<tr>
								<th>Ec ( Mpa )</th>
								<td id="_EcM"></td>
							</tr>

							<tr>
								<th>Ec ( kPa )</th>
								<td id="Ecq"></td>
							</tr>

							<tr>
								<th>Kekakuan lentur Girder <br>( K<sub>P</sub> = 48 * Ec * I / L<sup>3</sup> )</th>
								<td id="Kp"></td>
							</tr>

							<tr>
								<th>Waktu getar <br>( T = 2 * π * √ [ Wt / ( g * K<sub>P</sub> ) ] )</th>
								<td id="Tq"></td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-lg-6">
                    <div class="table-responsive">
						<table class="table small table-bordered">
							<tr class="text-center">
								<th colspan="2">Kondisi tanah dasar termasuk sedang (medium).</th>
							</tr>

							<tr>
								<th>Lokasi wilayah gempa <br>( Wilayah )</th>
								<td id="wilayah"></td>
							</tr>

							<tr>
								<th>Koefisien geser dasar <br>( C )</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id="C" placeholder="..."></td>
							</tr>

							<tr>
								<th colspan="2">Untuk struktur jembatan dengan daerah sendi plastis beton beton bertulang, 
									maka faktor tipe struktur dihitung dengan rumus, <span class="text-danger">S = 1.0 * F</span></th>
							</tr>
						</table>

						<p class="small">dengan, F = 1.25 - 0.025 * n dan F harus diambil ≥ 1 <br>F = faktor perangkaan <br>
							n = jumlah sendi plastis yang menahan deformasi struktur <br>Untuk nilai, n = 1 maka :</p>

						<table class="table small table-bordered">
							<tr>
								<th>n</th>
								<td id="n"></td>
							</tr>

							<tr>
								<th>F = 1.25 - 0.025 * n</th>
								<td id="F"></td>
							</tr>
						</table>

						<table class="table small table-bordered">
							<tr>
								<th>Faktor tipe struktur <br>( S = 1.0 * F )</th>
								<td id="S"></td>
							</tr>

							<tr>
								<th>Koefisien beban gempa horisontal <br>( Kh = C*S )</th>
								<td id="Kh"></td>
							</tr>

							<tr>
								<th>Koefisien beban gempa vertikal <br>( Kv = 50% * Kh )</th>
								<td id="Kv1"> > 0.10</td>
							</tr>

							<tr>
								<th>Diambil koefisien gempa vertikal <br>( Kv )</th>
								<td id="Kv"></td>
							</tr>
						</table>

						<table class="table small table-bordered">
							<tr>
								<th>Gaya gempa vertikal <br>( T<sub>EQ</sub> = Kv * Wt )</th>
								<td id="TEQ"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/BebanGempa2-aplikasi.jpeg')}}" alt="BebanGempa2-aplikasi">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Beban gempa vertikal <br>( Q<sub>EQ</sub> = T<sub>EQ</sub> / L )</th>
								<td id="QEQ"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-6">
					<p class="small">Gaya geser dan momen pada Girder akibat gempa vertikal (EQ) :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>V<sub>EQ</sub> = 1/2 * Q<sub>EQ</sub> * L</th>
								<th id="VEQ"></th>
							</tr>

							<tr>
								<th>M<sub>EQ</sub> = 1/8 * Q<sub>EQ</sub> * L<sup>2</sup></th>
								<th id="MEQ"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-8">Hitung</p>
				</div>
			</div>
		</section>
		{{-- End Beban Gempa --}}

		{{-- Kombinasi Beban Ultimate --}}
		<section class="display-application-none show-application-8">
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Kombinasi Beban Ultimate</h5>
				</div>
			</div>

			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-9">Tampilkan Hasil</p>
				</div>
			</div>

			<div class="row justify-content-center mt-3">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Jenis Beban</th>
									<th scope="col">Faktor Beban</th>
									<th scope="col">Komb-1</th>
									<th scope="col">Komb-2</th>
									<th scope="col">Komb-3</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Berat sendiri (MS)</td>
									<td id="MSB"></td>
									<td id="">√</td>
									<td id="">√</td>
									<td id="">√</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Beban mati tambahan (MA)</td>
									<td id="MAB"></td>
									<td id="">√</td>
									<td id="">√</td>
									<td id="">√</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Beban lajur "D" (TD)</td>
									<td id="TTDB"></td>
									<td id="">√</td>
									<td id="">√</td>
									<td id="">√</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Gaya rem (TB)</td>
									<td id="TBB"></td>
									<td id="">√</td>
									<td id="">√</td>
									<td id=""></td>
								</tr>
								<tr>
									<td>5</td>
									<td>Beban angin (EW)</td>
									<td id="EWB"></td>
									<td id="">√</td>
									<td id=""></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>6</td>
									<td>Pengaruh Temperatur (ET)</td>
									<td id="ETB"></td>
									<td id=""></td>
									<td id="">√</td>
									<td id=""></td>
								</tr>
								<tr>
									<td>7</td>
									<td>Beban gempa (EQ)</td>
									<td id="EQB"></td>
									<td id=""></td>
									<td id=""></td>
									<td id="">√</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th colspan="4">KOMBINASI MOMEN ULTIMATE</th>
									<th scope="col">Komb-1</th>
									<th scope="col">Komb-2</th>
									<th scope="col">Komb-3</th>
								</tr>
							</thead>
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Jenis Beban</th>
									<th scope="col">Faktor Beban</th>
									<th scope="col">M(kNm)</th>
									<th scope="col">Mu(kNm)</th>
									<th scope="col">Mu(kNm)</th>
									<th scope="col">Mu(kNm)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Berat sendiri (MS)</td>
									<td id="_MSB"></td>
									<td id="_MMS"></td>
									<td id="MSKM"></td>
									<td id="_MSKM"></td>
									<td id="_MSKM2"></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Beban mati tambahan (MA)</td>
									<td id="_MAB"></td>
									<td id="_MMA"></td>
									<td id="MAKM"></td>
									<td id="_MAKM"></td>
									<td id="_MAKM2"></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Beban lajur "D" (TD)</td>
									<td id="_TTDB"></td>
									<td id="_MTTD"></td>
									<td id="TTDKM"></td>
									<td id="_TTDKM"></td>
									<td id="_TTDKM2"></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Gaya rem (TB)</td>
									<td id="_TBB"></td>
									<td id="_MTB"></td>
									<td id="TBKM"></td>
									<td id="_TBKM"></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>5</td>
									<td>Beban angin (EW)</td>
									<td id="_EWB"></td>
									<td id="_MEW"></td>
									<td id="EWKM"></td>
									<td id=""></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>6</td>
									<td>Pengaruh Temperatur (ET)</td>
									<td id="_ETB"></td>
									<td id="_MET"></td>
									<td id=""></td>
									<td id="ETKM"></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>7</td>
									<td>Beban gempa (EQ)</td>
									<td id="_EQB"></td>
									<td id="_MEQ"></td>
									<td id=""></td>
									<td id=""></td>
									<td id="EQKM"></td>
								</tr>
								<thead>
									<th colspan="4"></th>
									<th id="MU1"></th>
									<th id="MU2"></th>
									<th id="MU3"></th>
								</thead>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th colspan="4">KOMBINASI GAYA GESER ULTIMATE</th>
									<th scope="col">Komb-1</th>
									<th scope="col">Komb-2</th>
									<th scope="col">Komb-3</th>
								</tr>
							</thead>
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Jenis Beban</th>
									<th scope="col">Faktor Beban</th>
									<th scope="col">V(kN)</th>
									<th scope="col">Vu(kN)</th>
									<th scope="col">Vu(kN)</th>
									<th scope="col">Vu(kN)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Berat sendiri (MS)</td>
									<td id="_MSB2"></td>
									<td id="_VMS"></td>
									<td id="MSKV"></td>
									<td id="_MSKV"></td>
									<td id="_MSKV2"></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Beban mati tambahan (MA)</td>
									<td id="_MAB2"></td>
									<td id="_VMA"></td>
									<td id="MAKV"></td>
									<td id="_MAKV"></td>
									<td id="_MAKV2"></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Beban lajur "D" (TD/TT)</td>
									<td id="_TTDB2"></td>
									<td id="_VTTD"></td>
									<td id="TTDKV"></td>
									<td id="_TTDKV"></td>
									<td id="_TTDKV2"></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Gaya rem (TB)</td>
									<td id="_TBB2"></td>
									<td id="_VTB"></td>
									<td id="TBKV"></td>
									<td id="_TBKV"></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>5</td>
									<td>Beban angin (EW)</td>
									<td id="_EWB2"></td>
									<td id="_VEW"></td>
									<td id="EWKV"></td>
									<td id=""></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>6</td>
									<td>Pengaruh Temperatur (ET)</td>
									<td id="_ETB2"></td>
									<td id="_VET"></td>
									<td id=""></td>
									<td id="ETKV"></td>
									<td id=""></td>
								</tr>
								<tr>
									<td>7</td>
									<td>Beban gempa (EQ)</td>
									<td id="_EQB2"></td>
									<td id="_VEQ"></td>
									<td id=""></td>
									<td id=""></td>
									<td id="EQKV"></td>
								</tr>
								<thead>
									<th colspan="4"></th>
									<th id="VU1"></th>
									<th id="VU2"></th>
									<th id="VU3"></th>
								</thead>
								<thead>
									<th class="text-right" colspan="4">Momen ultimate rencana girder</th>
									<th>Mu =</th>
									<th id="Mu"></th>
									<th>kNm</th>
								</thead>
								<thead>
									<th class="text-right" colspan="4">Gaya geser ultimate rencana girder</th>
									<th>Vu =</th>
									<th id="Vu"></th>
									<th>kN</th>
								</thead>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		{{-- End kombinasi beban ultimate--}}

		{{-- Pembesian Girder --}}
		<section class="display-application-none show-application-9">
			<div class="row ">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Pembesian Girder</h5>
				</div>
				<div class="col-md-12 text-center m-3">
					<p class="medium font-weight-bold">Tulang Lentur</p>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Momen rencana ultimit Girder (Mu)</th>
								<td id="_Mu"></td>
							</tr>
							<tr>
								<th>Mutu beton (fc')</th>
								<td id="fct"></td>
							</tr>
							<tr>
								<th>Mutu baja tulangan (fy)</th>
								<td id="fyt"></td>
							</tr>
							<tr>
								<th>Tebal slab beton (ts)</th>
								<td id="tst"></td>
							</tr>
							<tr>
								<th>Lebar badan Girder (b)</th>
								<td id="bb"></td>
							</tr>
							<tr>
								<th>Tinggi Girder (h)</th>
								<td id="ht"></td>
							</tr>
							<tr>
								<th>Lebar sayap T-Girder diambil nilai yang terkecil dari(L/4)</th>
								<td id="Lt"></td>
							</tr>
							<tr>
								<th>(s)</th>
								<td id="st"></td>
							</tr>
							<tr>
								<th>('12 * t)</th>
								<td id="tsa"></td>
							</tr>
							<tr>
								<th>Diambil lebar efektif sayap T-Girder, (beff)</th>
								<td id="beff"></td>
							</tr>
							<tr>
								<th>Jarak pusat tulangan terhadap sisi luar beton, (d')</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='dt' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">mm</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Modulus elastis baja, (Es)</th>
								<td id="Es"></td>
							</tr>
							<tr>
								<th>Faktor bentuk distribusi tegangan beton (β)</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='beta1' placeholder="..."></td>
							</tr>
							<tr>
								<th>rb = b1* 0.85 * fc’/ fy * 600/(600+fy)</th>
								<td id="rb"></td>
							</tr>
							<tr>
								<th>Rmax = 0.75*rb*fy*[1-1/2*0.75*rb*fy/(0.85*fc')]</th>
								<td id="Rmax"></td>
							</tr>
							<tr>
								<th>Faktor reduksi kekuatan lentur (ϕ)</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='fi' placeholder="..."></td>
							</tr>
							<tr>
								<th>Tinggi efektif T-Girder (d = h - d')</th>
								<td id="d"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Momen nominal rencana (Mn = Mu/f)</th>
								<td id="Mn"></td>
							</tr>
							<tr>
								<th>Faktor tahanan momen(Rn = Mn * 106 / (beff * d2))</th>
								<td id="Rn"></td>
							</tr>
							<tr>
								<th class="text-danger">Rn < Rmax</th>
								<td id="_R"></td>
							</tr>
							<tr>
								<th>Rasio tulangan yang diperlukan(r = 0.85 * fc’ / fy * [ 1 - Ö (1 – 2 * Rn / ( 0.85 * fc’ ))])</th>
								<td id="r"></td>
							</tr>
							<tr>
								<th>Rasio tulangan minimum (rmin = 1.4 / fy)</th>
								<td id="rmin"></td>
							</tr>
							<tr>
								<th>Luas tulangan yang diperlukan (As = r * beff * d)</th>
								<th id="As"></th>
							</tr>
							<tr>
								<th>Diameter tulangan yang digunakan (D)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='D' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">mm</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>As1 = p/4 * D2</th>
								<td id="As1"></td>
							</tr>
							<tr>
								<th>Jumlah tulangan yang diperlukan (n = As / As1)</th>
								<td id="na"></td>
							</tr>
							<tr>
								<th>Digunakan tulangan</th>
								<th><input autocomplete="off" type="number" class="form-control border-primary" id='angkaN' placeholder="..."> D <span id="_D"></span></th>
							</tr>
							<tr>
								<th>As = As1 * n</th>
								<td id="Asj"></td>
							</tr>
							<tr>
								<th>Tebal selimut beton (td)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='td' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">mm</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Diameter sengkang yang digunakan (ds)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='ds' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">mm</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Jumlah tulangan tiap baris (nt)</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='nt' placeholder="..."></td>
							</tr>
							<tr>
								<th>Jarak bersih antara tulangan (X = ( b - nt * D - 2 * td - 2 * ds) / (nt - 1))</th>
								<td id="X"></td>
							</tr>
							<tr>
								<th></th>
								<td id="_X"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="row text-center my-4">
					<div class="col-lg-12">
						<p class="btn btn-success btn-application-10">Hitung</p>
					</div>
				</div>
			</div>
			
			<section class="display-application-none show-application-10">
				<hr>
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="medium font-weight-bold">Kontrol Kapasitas Momen Ultimate</p>
					</div>
				</div>

				<div class="row text-center my-4">
					<div class="col-lg-12">
						<p class="btn btn-success btn-application-11">Tampilkan Hasil</p>
					</div>
				</div>

				<div class="row my-4 text-center mx-auto">
					<div class="col-lg-12">
						<img class="img-fluid" src="{{asset('img/user/KontrolKapasitasMomen-aplikasi.png')}}" alt="KontrolKapasitasMomen-aplikasi">
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Tebal slab beton (ts)</th>
									<td id="tst2"></td>
								</tr>
								<tr>
									<th>Lebar efektif sayap (beff)</th>
									<td id="beff2"></td>
								</tr>
								<tr>
									<th>Lebar badan Girder (b)</th>
									<td id="bb2"></td>
								</tr>
								<tr>
									<th>Tinggi Girder (h)</th>
									<td id="ht2"></td>
								</tr>
								<tr>
									<th>Jarak pusat tulangan terhadap sisi luar beton (d')</th>
									<td id="dt2"></td>
								</tr>
								<tr>
									<th>Tinggi efektif T-Girder (d = h - d' )</th>
									<td id="tet"></td>
								</tr>
								<tr>
									<th>Luas tulangan (As)</th>
									<td id="Asj2"></td>
								</tr>
								<tr>
									<th>Kuat tekan beton (fc')</th>
									<td id="fct2"></td>
								</tr>
								<tr>
									<th>Kuat leleh baja (fy)</th>
									<td id="fyt2"></td>
								</tr>
								<tr>
									<th>Untuk garis netral berada di dalam sayap T-Girder, maka :</th>
									<td id="">Cc > Ts</td>
								</tr>
								<tr>
									<th>Gaya internal tekan beton pada sayap <br>(Cc = 0.85 * fc' * beff * ts)</th>
									<td id="cc2"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Gaya internal tarik baja tulangan (Ts = As * fy)</th>
									<td id="ts2"></td>
								</tr>
								<tr>
									<th class="text-danger">Cc > Ts</th>
									<td id="cssts"></td>
								</tr>
								<tr>
									<th>a = As * fy / ( 0.85 * fc' * beff )</th>
									<td id="a2"></td>
								</tr>
								<tr>
									<th>Jarak garis netral (c = a / &#946;1)</th>
									<td id="c2"></td>
								</tr>
								<tr>
									<th>Regangan pada baja tulangan tarik <br>(&#949;s = 0.003 * (d - c) / c)</th>
									<td id="s2"></td>
								</tr>
								<tr>
									<th>< 0.03</th>
									<td id="_SS"></td>
								</tr>
								<tr>
									<th>Momen nominal (Mn = As * fy * ( d - a / 2 ) * 10<sup>-6</sup>)</th>
									<td id="Mnn"></td>
								</tr>
								<tr>
									<th>Kapasitas momen ultimit <br>(&#934; * Mn)</th>
									<td id="fiM"></td>
								</tr>
								<tr>
									<th>'> Mu</th>
									<td id="_Mu1"></td>
								</tr>
								<tr>
									<th></th>
									<td id="FIM"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</section>
			
			<section class="display-application-none show-application-11">
				<hr>
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="medium font-weight-bold">Tulang Geser</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Gaya geser ultimit rencana (Vu)</th>
									<td id="_Vu"></td>
								</tr>
								<tr>
									<th>Mutu beton (fc') K-300</th>
									<td id="_fct"></td>
								</tr>
								<tr>
									<th>Mutu baja tulangan (fy) U-39</th>
									<td id="_fyt"></td>
								</tr>
								<tr>
									<th>Faktor reduksi kekuatan geser (ϕ)</th>
									<td><input autocomplete="off" type="number" class="form-control border-primary" id='fi2' placeholder="..."></td>
								</tr>
								<tr>
									<th>Lebar badan Girder (b)</th>
									<td id="_bb"></td>
								</tr>
								<tr>
									<th>Tinggi efektif Girder (d)</th>
									<td id="_d"></td>
								</tr>
								<tr>
									<th>Kuat geser nominal beton (Vc = ( √fc') / 6 * b * d * 10<sup>-3</sup>)</th>
									<td id="Vc"></td>
								</tr>
								<tr>
									<th>(ϕ * Vc)</th>
									<td id="fivc"></td>
								</tr>
								<tr>
									<th>(ϕ * Vs = Vu - ϕ * Vc)</th>
									<td id="Vs1"></td>
								</tr>
								<tr>
									<th>Gaya geser yang dipikul tulangan geser (Vs)</th>
									<td id="Vs"></td>
								</tr>
								<tr>
									<th>Kontrol dimensi Girder terhadap kuat geser maksimum (V<sub>smax</sub> = 2 / 3 * √fc' * [ b * d ] * 10<sup>-3</sup>)</th>
									<td id="Vsmax"></td>
								</tr>
								<tr>
									<th>Dimensi balok memenuhi persyaratan kuat geser</th>
									<td id="_VV"> </td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Digunakan sengkang berpenampang</th>
									<td colspan="4"><input autocomplete="off" type="number" class="form-control border-primary" id='angkaD' placeholder="...">D<input type="number" class="form-control" id='Dv' placeholder="..."></td>
								</tr>
								<tr>
									<th>Luas tulangan geser sengkang (Av = π/4 * D<sup>2</sup> * n)</th>
									<td id="Av" colspan="4"></td>
								</tr>
								<tr>
									<th>Jarak tulangan geser (sengkang) yang diperlukan <br>(S = Av * fy * d / Vs )</th>
									<td id="Sv" colspan="4"></td>
								</tr>
								<tr>
									<th>Digunakan sengkang </th>
									<td id="_angkaD"></td>
									<td>D</td>
									<td id="_Dv"></td>
									<td id=""></td>
								</tr>
								<tr>
									<th>Pada badan girder dipasang tulangan susut minimal dengan rasio tulangan (ρsh)</th>
									<td id="rsh" colspan="4"></td>
								</tr>
								<tr>
									<th>Luas tulangan susut (Ash = ρh * b * d )</th>
									<td id="Ash" colspan="4"></td>
								</tr>
								<tr>
									<th>Diameter tulangan yang digunakan (D)</th>
									<td id="_Dv2" colspan="4"></td>
								</tr>
								<tr>
									<th>Jumlah tulangan susut yang diperlukan (n = Ash / ( π /4 * D<sup>2</sup> ) )</th>
									<td id="nsh" colspan="4"></td>
								</tr>
								<tr>
									<th>Digunakan tulangan</th>
									<td id="" colspan="4">4  D <Span id="_Dv3" class="text-danger"></Span></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row text-center my-4">
					<div class="col-lg-12">
						<p class="btn btn-success btn-application-12">Hitung</p>
					</div>
				</div>
			</section>
			
			<section class="display-application-none show-application-12">
				<hr>
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="medium font-weight-bold">Lendutan Balok</p>
					</div>
				</div>

				<div class="row text-center my-4">
					<div class="col-lg-12">
						<p class="btn btn-success btn-application-13">Tampilkan Hasil</p>
					</div>
				</div>
				
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Mutu beton (fc') K-300</th>
									<td id="_fct2"></td>
								</tr>
								<tr>
									<th>Mutu baja tulangan (fy) U-39</th>
									<td id="_fyt2"></td>
								</tr>
								<tr>
									<th>Modulus elastis beton (Ec = 4700 * &#8730 fc')</th>
									<td id="_EcM2"></td>
								</tr>
								<tr>
									<th>Modulus elastis baja (Es)</th>
									<td id="_Es"></td>
								</tr>
								<tr>
									<th>Tinggi balok (h)</th>
									<td id="_h22"></td>
								</tr>
								<tr>
									<th>Lebar balok (b)</th>
									<td id="_b22"></td>
								</tr>
								<tr>
									<th>Jarak tulangan terhadap sisi luar beton (d')</th>
									<td id="dtt"></td>
								</tr>
								<tr>
									<th>Tinggi efektif balok (d = h - d')</th>
									<td id="dlb"></td>
								</tr>
								<tr>
									<th>Luas tulangan balok (As)</th>
									<td id="Aslb"></td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Inersia brutto penampang balok (Ig = 1/12 * b * h³)</th>
									<td id="Ig"></td>
								</tr>
								<tr>
									<th>Modulus keruntuhan lentur beton (fr = 0.7 * fc' * 10³)</th>
									<td id="fr"></td>
								</tr>
								<tr>
									<th>Nilai perbandingan modulus elastis (n = Es / Ec)</th>
									<td id="nee"></td>
								</tr>
								<tr>
									<th>(n * As)</th>
									<td id="nas"></td>
								</tr>
								<tr>
									<th>Jarak garis netral terhadap sisi atas beton (c = n * As / b)</th>
									<td id="c"></td>
								</tr>
								<tr>
									<th>Inersia penampang retak yang ditransformasikan ke beton dihitung sbb (Icr = 1/3 * b * c³ + n * As * ( d - c )²)</th>
									<td id="Icr"></td>
								</tr>
								<tr>
									<th>(yt = h/2 )</th>
									<td id="yt"></td>
								</tr>
								<tr>
									<th>Momen retak (Mcr = fr * Ig / yt)</th>
									<th id="Mcr"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Jenis Beban</th>
										<th scope="col">Momen (kNm)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td id="">1</td>
										<td id="">Berat sendiri (MS)</td>
										<td id="MMSLB"></td>
									</tr>
									<tr>
										<td id="">2</td>
										<td id="">Beban mati tambahan (MA)</td>
										<td id="MMALB"></td>
									</tr>
									<tr>
										<td id="">3</td>
										<td id="">Beban lalulintas (TD/TT)</td>
										<td id="MTTDLB"></td>
									</tr>
									<tr>
										<td id="">4</td>
										<td id="">Gaya rem (TB)</td>
										<td id="MTBLB"></td>
									</tr>
	
								</tbody>
								<thead>
									<th colspan="2">M<sub>D+L</sub></th>
									<th id="MDL"></th>
								</thead>
							</table>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Inersia efektif untuk perhitungan lendutan (Ie = ( Mcr / M<sub>D+L</sub> )³ * Ig + [ 1 - ( Mcr / M<sub>D+L</sub> )³ ] * Icr)</th>
									<td id="Ie"></td>
								</tr>
								<tr>
									<th>Panjang bentang balok (L)</th>
									<td id="_L9"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Berat Sendiri(MS)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Beban akibat berat sendiri (Q<sub>MS</sub>)</th>
									<td id="QMSLB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat berat sendiri (MS) <br>(δ<sub>MS</sub> = 5/384*Q<sub>MS</sub>*L<sup>4</sup> / ( Ec*Ie))</th>
									<th id="dMS"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Beban Mati Tambahan (MA)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Beban akibat berat sendiri (Q<sub>MA</sub>)</th>
									<td id="QMALB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat berat sendiri (MS) <br>(δ<sub>MA</sub> = 5/384*Q<sub>MA</sub>*L<sup>4</sup> / ( Ec*Ie))</th>
									<th id="dMA"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Beban Lanjur "D" (TD)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Beban lajur "D" : Beban terpusat (P<sub>TD</sub>) </th>
									<td id="PTDLB"></td>
								</tr>
								<tr>
									<th>Beban merata (Q<sub>TD</sub>)</th>
									<td id="QTDLB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat beban lajur "D" (TD) <br>(δ<sub>TD</sub> = 1/48* P<sub>TD</sub>*L<sup>3</sup> / (Ec*Ie) + 5/384*Q<sub>TD</sub>*L<sup>4</sup> / ( Ec*Ie))</th>
									<th id="dTD"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Gaya Rem (TB)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Momen akibat gaya rem (M<sub>TB</sub>)</th>
									<td id="QTBLB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat gaya rem (TB) <br>(δ<sub>TB</sub> = 0.0642 * M<sub>TB</sub> * L<sup>2</sup> / ( Ec*Ie))</th>
									<th id="dTB"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Beban Angin (EW)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Beban akibat transfer beban angin pada kendaraan (Q<sub>EW</sub>)</th>
									<td id="QEWLB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat beban angin (EW) <br>(δ<sub>EW</sub> = 5/384*Q<sub>EW</sub>*L<sup>4</sup> / ( Ec*Ie))</th>
									<th id="dEW"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Pengaruh Temperatur (ET)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Momen akibat temperatur movement (M<sub>ET</sub>)</th>
									<td id="QETLB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat pengaruh temperatur (ET) <br>(δ<sub>ET</sub> = 0.0642 * M<sub>ET</sub> * L<sup>2</sup> / ( Ec*Ie))</th>
									<th id="dET"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p>Lendutan Akibat Beban Gempa (EQ)</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>Beban gempa vertikal ()</th>
									<td id="QEQLB"></td>
								</tr>
								<tr>
									<th>Lendutan akibat beban gempa (EQ) <br>(δ<sub>EQ</sub> = 5/384*Q<sub>EQ</sub>*L<sup>4</sup> / ( Ec*Ie))</th>
									<th id="dEQ"></th>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<p class="medium text-center">Lendutan maksimum</p>
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tr>
									<th>(d<sub>maks</sub> = L/240)</th>
									<td><span class="text-danger" id="dmaks">...</span></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<thead>
									<tr>
										<th rowspan="2">No</th>
										<th rowspan="2">Jenis Beban</th>
										<th>Komb-1</th>
										<th>Komb-2</th>
										<th>Komb-3</th>
									</tr>
									<tr>
										<th>(kNm)</th>
										<th>(kNm)</th>
										<th>(kNm)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td id="">1</td>
										<td id="">Berat sendiri (MS)</td>
										<td id="_dMS"></td>
										<td id="dMS1"></td>
										<td id="dMS2"></td>
									</tr>
									<tr>
										<td id="">2</td>
										<td id="">Beban mati tambahan (MA)</td>
										<td id="_dMA"></td>
										<td id="dMA1"></td>
										<td id="dMA2"></td>
									</tr>
									<tr>
										<td id="">3</td>
										<td id="">Beban lajur "D" (TD)</td>
										<td id="_dTD"></td>
										<td id="dTD1"></td>
										<td id="dTD2"></td>
									</tr>
									<tr>
										<td id="">4</td>
										<td id="">Gaya rem (TB)</td>
										<td id="_dTB"></td>
										<td id="dTB1"></td>
										<td id=""></td>
									</tr>
									<tr>
										<td id="">5</td>
										<td id="">Beban angin (EW)</td>
										<td id="_dEW"></td>
										<td id=""></td>
										<td id=""></td>
									</tr>
									<tr>
										<td id="">6</td>
										<td id="">Pengaruh Temperatur (ET)</td>
										<td id=""></td>
										<td id="_dET"></td>
										<td id=""></td>
									</tr>
									<tr>
										<td id="">7</td>
										<td id="">Beban gempa (EQ)</td>
										<td id=""></td>
										<td id=""></td>
										<td id="_dEQ"></td>
									</tr>
									<thead>
										<tr>
											<th colspan="2"></th>
											<th id="LK1"></th>
											<th id="LK2"></th>
											<th id="LK3"></th>
										<tr>
										<tr>
											<th colspan="2"></th>
											<th id="LK11"></th>
											<th id="LK22"></th>
											<th id="LK33"></th>
										<tr>
									</thead>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row my-4 text-center mx-auto">
					<div class="col-lg-12">
						<img class="img-fluid" src="{{asset('img/user/PembesianGirder-aplikasi.png')}}" alt="PembesianGirder-aplikasi">
					</div>
				</div>
			</section>
		</section>
		{{-- End Pembesian Girder --}}

		{{-- balok diafragma--}}
		<section class="display-application-none show-application-13">
			<div class="row ">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Balok Diafragma</h5>
				</div>
				<div class="col-md-12 text-center mt-3">
					<p class="medium font-weight-bold">Beban Pada Balok Diafragma</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p class="small">Distribusi beban lantai pada balok diafragma adalah sebagai berikut :</p>
				</div>
				<div class="col-lg-6">
					<p class="small">Ukuran balok diafragma</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Lebar (bd)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='bd2' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Tinggi (hd)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='hd2' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<p class="small">Panjang bentang balok diafragma</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>(s)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='ss2' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
					<p class="small">Tebal lantai</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>(ts)</th>
								<td id="ts3" ></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<div class="row my-4 text-center mx-auto">
								<img class="img-fluid" src="{{asset('img/user/BebanBalokDiafragma-aplikasi.png')}}" alt="BebanBalokDiafragma-aplikasi">
							</div>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<p class="small">Berat sendiri (MS) :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis</th>
									<th>Lebar</th>
									<th>Tebal</th>
									<th>Berat (kN/m<sup>3</sup>)</th>
									<th>Beban (kN/m)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="">1</td>
									<td id="">Plat lantai</td>
									<td id="pll"></td>
									<td id="plt"></td>
									<td id="plbt"></td>
									<td id="plbn"></td>
								</tr>
								<tr>
									<td id="">2</td>
									<td id="">Balok diafragma</td>
									<td id="bdl"></td>
									<td id="bdt"></td>
									<td id="bdbt"></td>
									<td id="bdbn"></td>
								</tr>
								<thead>
									<tr>
										<th colspan="5">Q<sub>MS</sub></th>
										<th id="qms2"></th>
									<tr>
								</thead>
							</tbody>
						</table>
					</div>
					<p class="small">Gaya geser dan momen akibat berat sendiri :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>V<sub>MS</sub> = 1/2 * Q<sub>MS</sub> * s</th>
								<td id="vms2" ></td>
							</tr>
							<tr>
								<th>M<sub>MS</sub> = 1/12 * Q<sub>MS</sub> * s<sup>2</sup></th>
								<td id="mms2"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="small">Beban mati tambahan (MA) :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis</th>
									<th>Lebar</th>
									<th>Tebal</th>
									<th>Berat (kN/m<sup>3</sup>)</th>
									<th>Beban (kN/m)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="">1</td>
									<td id="">Lap.Aspal+overlay</td>
									<td id="lal2"></td>
									<td id="lat2"></td>
									<td id="labt2"></td>
									<td id="labn2"></td>
								</tr>
								<tr>
									<td id="">2</td>
									<td id="">Air hujan</td>
									<td id="ahl2"></td>
									<td id="aht2"></td>
									<td id="ahbt2"></td>
									<td id="ahbn2"></td>
								</tr>
								<thead>
									<tr>
										<th colspan="5">Q<sub>MS</sub></th>
										<th id="qms3"></th>
									<tr>
								</thead>
							</tbody>
						</table>
					</div>
					<p class="small">Gaya geser dan momen akibat beban mati tambahan :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>V<sub>MA</sub> = 1/2 * Q<sub>MA</sub> * s</th>
								<td id="vma2"></td>
							</tr>
							<tr>
								<th>M<sub>MA</sub> = 1/2 * Q<sub>MA</sub> * s<sup>2</sup></th>
								<td id="mma2"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p class="small text-center">Beban truk "T" (TT) </p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Beban hidup pada lantai jembatan berupa beban roda ganda oleh Truk (beban T) yang besarnya (T)</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='t4' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">kN</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Faktor beban dinamis untuk pembebanan truk diambil (D<sub>LA</sub>)</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='dla4' placeholder="..."></td>
							</tr>
							<tr>
								<th>Beban truk "T" (P<sub>TT</sub> = (1 + D<sub>LA</sub>) * T)</th>
								<td id="ptt4"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Gaya geser dan momen akibat beban "T" (V<sub>TT</sub> = 1/2 * P<sub>TT</sub>)</th>
								<td id="vtt4"></td>
							</tr>
							<tr>
								<th>(M<sub>TT</sub> = 1/8 * P<sub>TT</sub> * s)</th>
								<td id="mtt4"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<p class="small">Kombinasi beban ultimit :</p>
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Jenis</th>
									<th>Faktor Beban</th>
									<th>V</th>
									<th>M</th>
									<th>Vu</th>
									<th>Mu</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="">1</td>
									<td id="">Berat sendiri (MS)</td>
									<td id="bsfb"></td>
									<td id="bsv"></td>
									<td id="bsm"></td>
									<td id="bsvu"></td>
									<td id="bsmu"></td>
								</tr>
								<tr>
									<td id="">2</td>
									<td id="">Beb.mati tamb (MA)</td>
									<td id="bmfb"></td>
									<td id="bmv"></td>
									<td id="bmm"></td>
									<td id="bmvu"></td>
									<td id="bmmu"></td>
								</tr>
								<tr>
									<td id="">3</td>
									<td id="">Beban truk "T" (TT)</td>
									<td id="btfb"></td>
									<td id="btv"></td>
									<td id="btm"></td>
									<td id="btvu"></td>
									<td id="btmu"></td>
								</tr>
								<thead>
									<tr>
										<th colspan="5"></th>
										<th id="sumvu"></th>
										<th id="summu"></th>
									<tr>
								</thead>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12 text-center">
					<p class="medium font-weight-bold">Momen dan Gaya Geser Rencana Balok Diafragma</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Momen ultimit rencana balok diafragma (Mu)</th>
								<td id="summu2" >...</td>
							</tr>
							<tr>
								<th>Gaya geser ultimit rencana balok diafragma (Vu)</th>
								<td id="sumvu2" >...</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-14">Hitung</p>
				</div>
			</div>
		</section>
		{{-- balok diafragma--}}

		{{-- pembesian balok diafragma--}}
		<section class="display-application-none show-application-14">
			<div class="row ">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Pembesian Balok Diafragma</h5>
				</div>
				<div class="col-md-12 text-center mt-3">
					<p class="medium font-weight-bold">Tulangan Lentur</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Momen rencana ultimit balok diafragma (Mu)</th>
								<td id="mu15"></td>
							</tr>
							<tr>
								<th>Mutu beton (fc')</th>
								<td id="fc15"></td>
							</tr>
							<tr>
								<th>Mutu baja tulangan (fy)</th>
								<td id="fy15"></td>
							</tr>
							<tr>
								<th>Modulus elastis beton (Ec = 4700 * √fc')</th>
								<td id="ec15"></td>
							</tr>
							<tr>
								<th>Modulus elastis baja (Es)</th>
								<td id="es15"></td>
							</tr>
							<tr>
								<th>Lebar balok (b = bd)</th>
								<td id="b15"></td>
							</tr>
							<tr>
								<th>Tinggi balok (h = hd)</th>
								<td id="h15"></td>
							</tr>
							<tr>
								<th>Jarak pusat tulangan terhadap sisi luar beton (d')</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='d15' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">mm</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>Faktor bentuk distribusi tegangan beton (β1)</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='beta15' placeholder="..."></td>
							</tr>
							<tr>
								<th>ρb = β1* 0.85 * fc’/ fy * 600/(600+fy)</th>
								<td id="pb15"></td>
							</tr>
							<tr>
								<th>R<sub>max</sub> = 0.75*ρb*fy*[1-1/2*0.75*ρb*fy/(0.85*fc')] </th>
								<td id="rmax15"></td>
							</tr>
							<tr>
								<th>Faktor reduksi kekuatan lentur (ϕ)</th>
								<td ><input autocomplete="off" type="number" class="form-control border-primary" id='phi15' placeholder="..."></td>
							</tr>
							<tr>
								<th>Tinggi efektif balok (d = h - d')</th>
								<td id="dd15"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Momen nominal rencana (Mn = Mu/ϕ)</th>
								<td id="mn15"></td>
							</tr>
							<tr>
								<th>Faktor tahanan momen (Rn = Mn * 10<sup>6</sup> / (beff * d<sup>2</sup>) )</th>
								<td id="rn15"></td>
							</tr>
							<tr>
								<th class="text-danger">Rn < Rmax </th>
								<td id="hsl15"></td>
							</tr>
							<tr>
								<th>Rasio tulangan yang diperlukan <br>(ρ = 0.85 * fc’ / fy * [ 1 - √ (1 – 2 * Rn / ( 0.85 * fc’ ))])</th>
								<td id="ra15"></td>
							</tr>
							<tr>
								<th>Rasio tulangan minimum (ρ<sub>min</sub> = 1.4 / fy )</th>
								<th id="ramin15"></th>
							</tr>
							<tr>
								<th>Luas tulangan yang diperlukan (As = ρ * b * d)</th>
								<td id="hslas"></td>
							</tr>
							<tr>
								<th>Diameter tulangan yang digunakan (D)</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='dmtr15' placeholder="..."></td>
							</tr>
							<tr>
								<th>As1 = p/4 * D<sup>2</sup></th>
								<td id="hslas2"></td>
							</tr>
							<tr>
								<th>Jumlah tulangan yang diperlukan (n = As / As1)</th>
								<td id="n15"></td>
							</tr>
							<tr>
								<th>Digunakan tulangan</th>
								<td><input autocomplete="off" type="number" class="form-control border-primary" id='nn15' placeholder="..."> D <span id="_dmtr15"></span></td>
							</tr>
							<tr>
								<th>As = As1 * n</th>
								<th id="hsltot"></th>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12 text-center">
					<p class="medium font-weight-bold mt-3">Tulangan Geser</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Gaya geser ultimit rencana (Vu)</th>
								<td id="vu16"></td>
							</tr>
							<tr>
								<th>Mutu beton (fc')</th>
								<td id="fc16"></td>
							</tr>
							<tr>
								<th>Mutu baja tulangan (fy)</th>
								<td id="fy16"></td>
							</tr>
							<tr>
								<th>Faktor reduksi kekuatan geser (ϕ)</th>
								<td ><input autocomplete="off" type="number" class="form-control border-primary" id='beta16' placeholder="..."></td>
							</tr>
							<tr>
								<th>Lebar badan Girder (b)</th>
								<td id="b16"></td>
							</tr>
							<tr>
								<th>Tinggi efektif Girder (d)</th>
								<td id="d16"></td>
							</tr>
							<tr>
								<th>Kuat geser nominal beton (Vc = (√ fc') / 6 * b * d * 10<sup>-3</sup>)</th>
								<td id="vc16"></td>
							</tr>
							<tr>
								<th>ϕ * Vc </th>
								<td id="anakvc16"></td>
							</tr>
							<tr>
								<th class="text-danger">perlu tulang geser</th>
								<td id=""></td>
							</tr>
							<tr>
								<th>ϕ * Vs = Vu - ϕ * Vc</th>
								<td id="vcc16"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Gaya geser yang dipikul tulangan geser (Vs)</th>
								<td id="vccc16"></td>
							</tr>
							<tr>
								<th>Kontrol dimensi Girder terhadap kuat geser maksimum (V<sub>smax</sub> = 2 / 3 * √ fc' * [ b * d ] * 10<sup>-3</sup>)</th>
								<td id="vsmax16"></td>
							</tr>
							<tr>
								<th>Dimensi balok memenuhi persyaratan kuat geser<br>V<sub>s</sub> < V<sub>smax</sub></th>
								<td id="hsl16"></td>
							</tr>
							<tr>
								<th>Digunakan sengkang berpenampang</th>
								<td class="text-danger"><input autocomplete="off" type="number" class="form-control border-primary" id='nn16' placeholder="..."> D <input autocomplete="off" type="number" class="form-control border-primary" id='dd16' placeholder="..."></td>
							</tr>
							<tr>
								<th>Luas tulangan geser sengkang (Av = π/4 * D<sup>2</sup> * n)</th>
								<td id="av16"></td>
							</tr>
							<tr>
								<th>Jarak tulangan geser (sengkang) yang diperlukan (S = Av * fy * d / Vs)</th>
								<td id="s16"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th>Digunakan sengkang</th>
									<th id="sekang1"></th>
									<th>D</th>
									<th id="sekang2"></th>
									<th id="sekang3"></th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
			
			<div class="row my-4 text-center mx-auto mb-5">
				<div class="col-lg-12">
					<img class="img-fluid" src="{{asset('img/user/PembesianBalok-aplikasi.png')}}" alt="PembesianBalok-aplikasi">
				</div>
			</div>

			<div class="row text-center my-4">
				<div class="col-lg-12">
					<p class="btn btn-success btn-application-15">Hitung</p>
				</div>
			</div>
		</section>
		{{-- end pembesian balok diafragma--}}

		<div class="col-12 text-center display-application-none show-application-1">
			<hr>
			<a href="/aplikasi/jembatan-balok" class="btn btn-danger btn-sm mx-auto">Reset</a>
		</div>
	</div>
</main>
@endsection

@section('scripts')
	<script src="{{asset('/js/user/application/jembatan-balok-T.js')}}"></script>
@endsection
@extends('user.applications.main-application')

@section('title', 'Aplikasi EXCretwall')

@section('header-aplikasi-5')
<h2 class="my-4 pt-3">Aplikasi EXCretwall</h2><hr>
@endsection

@section('image-formula-5')

@endsection

@section('application')
<main>
	<div class="container my-4">
		{{-- Mencari nilai EXCretwall --}}
		<section>  
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Wall Drawing</h5>
				</div>
			 </div>
             <div class="col-md-4 my-auto mx-auto">
                <img class="img-fluid" src="{{asset('img/user/ExcretwallDrawing.jpg')}}" alt="ExcretwallDrawing">
             </div>
        
	
                <div class="row">
                    <div class="col-md-12 text-white text-center">
                        <h5 class="my-auto bg-primary py-3">Soil Data</h5>
                    </div>
                </div>

                <div class="row my-4 mx-auto justify-content-center">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{asset('img/user/ExcretwallSoilData.jpg')}}" alt="ExcretwallSoilData">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-3">
                        <p class="small text-center"><br></p>
                        <div class="table-responsive">
                            <table class="table small table-bordered">
								{{-- comment 
                                <tr>
                                    <th>Length</th>
                                    <td>
                                        <div class="input-group">
                                            <input autocomplete="off" type="number" class="form-control border-primary" id='l' placeholder="...">
                                            <div class="input-group-append">
                                                <span class="input-group-text border-primary">KN/m</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
        
                                <tr>
                                    <th>Force</th>
                                    <td>
                                        <div class="input-group">
                                            <input autocomplete="off" type="number" class="form-control border-primary" id='f' placeholder="...">
                                            <div class="input-group-append">
                                                <span class="input-group-text border-primary">kN</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
        
                                <tr>
                                    <th>Surcharge</th>
                                    <td>
                                        <div class="input-group">
                                            <input autocomplete="off" type="number" class="form-control border-primary" id='s' placeholder="...">
                                            <div class="input-group-append">
                                                <span class="input-group-text border-primary">kN/m<sup>2</sup></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        </div>
						--}}

							<tr>
								<th>y3</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='y3' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
	
							<tr>
								<th>y6</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='y6' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td> 
							</tr>
							<th>x4</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='x4' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">m</span>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>δ</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='del' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">deg</span>
										</div>
									</div>
								</td>
							</tr>

                            <tr>
								<th>β</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='bet' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">deg</span>
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
							<p class="small text-center">Material</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="table-responsive">
								<table class="table small table-bordered">
									<tr>
										<th>ɣs</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='als' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>3</sup></span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>σs</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='sis' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">KN/m<sup>2</sup></span>
												</div>
											</div>
										</td>
									</tr>
				
									<tr>
										<th>Cu</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='cu' placeholder="...">
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
										<th>ϕ</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='alcon' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">deg</span>
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
			 {{-- End dan belum beres--}}

			 {{-- Wall Dimensions --}}
			 <div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Wall Dimensions</h5>
				</div>
			 </div>

			 <div class="grid-container">
				<div class="grid-items">
					<div class="col-md-4 ">
						<img class="img-fluid" src="{{asset('img/user/WallDimentions.jpg')}}" alt="WallDimentions">
					</div>
				</div>
			 <div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12">
						<p class="small text-center">Dimensions</p>
					</div>
				</div>
			 </div>
			 <div class="grid-items">
				<div class="row">
					<div class="col-lg-4">
						<div class="table-responsive">
							<table class="table small table-bordered">
								<tbody>
									<tr>
										<th>x1=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x1' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>x2=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x2' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>x3=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x3' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>x6=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x6' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>y2=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='y2' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>x7=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x7' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>x8=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x8' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>y1=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='y1' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>x5=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='x5' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>y4=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='y4' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th>y5=</th>
										<td>
											<div class="input-group">
												<input autocomplete="off" type="number" class="form-control border-primary" id='y5' placeholder="...">
												<div class="input-group-append">
													<span class="input-group-text border-primary">m</span>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div><div class="row justify-content-center">
							<div class="col-lg-12">
								<p class="small text-center">Weight</p>
									<div class="table-responsive">
										<table class="table small table-bordered">
											<tbody>
												<tr>
													<th>ɣc=</th>
													<td>
														<div class="input-group">
															<input autocomplete="off" type="number" class="form-control border-primary" id='alc' placeholder="...">
																<div class="input-group-append">
																	<span class="input-group-text border-primary">Kn/m<sup>3</sup></span>
																</div>
														</div>
													</td>
												</tr>
												<tr>
													<th>Ec=</th>
													<td>
														<div class="input-group">
															<input autocomplete="off" type="number" class="form-control border-primary" id='ec' placeholder="...">
																<div class="input-group-append">
																	<span class="input-group-text border-primary">Kn/m<sup>2</sup></span>
																</div>
														</div>
													</td>
												</tr>
												<tr>
													<th>fc=</th>
													<td>
														<div class="input-group">
															<input autocomplete="off" type="number" class="form-control border-primary" id='fc' placeholder="...">
																<div class="input-group-append">
																	<span class="input-group-text border-primary">Kn/m<sup>2</sup></span>
																</div>
														</div>
													</td>
												</tr>
												<tr>
													<th>fy=</th>
													<td>
														<div class="input-group">
															<input autocomplete="off" type="number" class="form-control border-primary" id='fy' placeholder="...">
																<div class="input-group-append">
																	<span class="input-group-text border-primary">Kn/m<sup>2</sup></span>
																</div>
														</div>
													</td>
												</tr>
											</tbody>
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
		{{-- Active Pressure --}}
		<section class="display-application-none show-aplication-1">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Ka =</th>
								<td id="ka"></td>
							</tr>
						</table>	
					</div>
				<div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Active Pressure</h5>
				</div>
			</div>
			
			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-4 mt-4">
					<img class="img-fluid" src="{{asset('img/user/ExcretwallRumus1.png')}}" alt="ExcretwallRumus1">
				</div>
			</div>
	
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Ka =</th>
								<td id="ka"></td>
							</tr>
	
							<tr>
								<th>Ha =</th>
								<td id="ha"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>	

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-4 mt-4">
					<img class="img-fluid" src="{{asset('img/user/ExcretwallRumus2.png')}}" alt="ExcretwallRumus2">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Pa =</th>
								<td id="pa"></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Passive Pressure</h5>
				</div>
			</div>
	
			<div class="row my-4 text-center mx-auto">
				<div class="col-lg-4 mt-4">
					<img class="img-fluid w-75" src="{{asset('img/user/EXCretwall.png')}}" alt="EXCretwall">
				</div>
				<div class="col-lg-4 text-center mx-auto">
					<img  class="img-fluid w-50" src="{{asset('img/user/EXCretwallPassivePress.png')}}" alt="EXCretwallPassivePress">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Ka =</th>
								<td id="ka"></td>
							</tr>
	
							<tr>
								<th>Ha =</th>
								<td id="ha"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-3 mt-4">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallRumus3.png')}}" alt="EXCretwallRumus3">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Pa =</th>
								<td id="pa"></td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		</section>	
		{{-- End --}}

		{{-- Wall Weight Calculation --}}
		<section>

			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Weight Calculation</h5>
				</div>
			</div>
	
			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-3 mt-4">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallWeight.png')}}" alt="EXCretwallWeight">
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-3">
					<p class="small text-center">Weight</p>
						<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>G1 =</th>
								<td id="g1"></td>
							</tr>
	
							<tr>
								<th>G2 =</th>
								<td id="g2"></td>
							</tr>
							<tr>
								<th>G3 =</th>
								<td id="g3"></td>
							</tr>
							<tr>
								<th>G4 =</th>
								<td id="g4"></td>
							</tr>
							<tr>
								<th>G5 =</th>
								<td id="g5"></td>
							</tr>
							<tr>
								<th>G6 =</th>
								<td id="g6"></td>
							</tr>
							<tr>
								<th>Nd =</th>
								<td id="nd"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-3">
					<p class="small text-center">Length</p>
						<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>m1 =</th>
								<td id="m1"></td>
							</tr>
							<tr>
								<th>m2 =</th>
								<td id="m2"></td> 
							</tr>
							<tr>
								<th>m3 =</th>
								<td id="m3"></td>
							</tr>
							<tr>
								<th>m4 =</th>
								<td id="m4"></td>
							</tr>
							<tr>
								<th>m5 =</th>
								<td id="m5"></td>
							</tr>
							<tr>
								<th>m6 =</th>
								<td id="m6"></td>
							</tr>
							<tr>
								<th>aN =</th>
								<td id="an"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		{{-- End Weight Calculation --}}
		{{-- Loads --}}
		<section>
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Loads</h5>
				</div>
			</div>	
			<div class="row my-4 text-center mx-auto">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallEarth.png')}}" alt="EXCretwallEarth">
				</div>
				<div class="col-lg-4">
					<p class="small text-center">Earthquake : </p>
					<table class="table small table-bordered">
						<tr>
							<th>Io =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='io' placeholder="...">
									<div class="input-group-append">
										<span class="input-group-text border-primary"></span>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>Ao =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='ao' placeholder="...">
									<div class="input-group-append">
										<span class="input-group-text border-primary"></span>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<div class="col-lg-14">
						<p class="small text-center">Point Load : </p>
						<table class="table small table-bordered">
							<tr>
								<th>P =</th>
								<td>
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='p' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary">kN</span>
										</div>
									</div>
								</td>
							</tr>
						</table>
						<div class="col-lg-14">
							<p class="small text-center">Surcharge : </p>
							<table class="table small table-bordered">
								<tr>
									<th>Qo =</th>
									<td>
										<div class="input-group">
											<input autocomplete="off" type="number" class="form-control border-primary" id='qo' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary">kN/m<sup>2</sup></span>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>	
					</div>
				</div>
			</div>	
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Kh =</th>
								<td id="kh"></td>
							</tr>
	
							<tr>
								<th>Kv =</th>
								<td id="kv"></td>
							</tr>
							<tr>
								<th>Ψ =</th>
								<td id="psi"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>		
			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-4 mt-2">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallRumus4.png')}}" alt="EXCretwallRumus4">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Kae =</th>
								<td id="kae"></td>
							</tr>
	
							<tr>
								<th>Kpe =</th>
								<td id="kpe"></td>
							</tr>
							<tr>
								<th>Kas =</th>
								<td id="kas"></td>
							</tr>
							<tr>
								<th>Kps =</th>
								<td id="kps"></td>
							</tr>
							<tr>
								<th>Pae =</th>
								<td id="pae"></td>
							</tr>
							<tr>
								<th>Ppe =</th>
								<td id="ppe"></td>
							</tr>
							<tr>
								<th>Qae =</th>
								<td id="qae"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>		
		</section>	
		{{-- End --}}
		{{-- Stability Controls --}}
		<section>
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Stability Controls</h5>
				</div>
			</div>	
			<div class="row my-4 mx-auto justify-content-center">
				<div class="col-lg-8 mt-2">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallStabillity.png')}}" alt="EXCretwallStabillity">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Qa =</th>
								<td id="qa"></td>
							</tr>
							<tr>
								<th>Qae =</th>
								<td id="qae"></td>
							</tr>
							<tr>
								<th>Pa =</th>
								<td id="pa"></td>
							</tr>
							<tr>
								<th>Pae =</th>
								<td id="pae"></td>
							</tr>
							<tr>
								<th>Ha =</th>
								<td id="Ha"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Pp =</th>
								<td id="pp"></td>
							</tr>
							<tr>
								<th>Ppe =</th>
								<td id="ppe"></td>
							</tr>
							<tr>
								<th>Hp =</th>
								<td id="hp"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>	
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<tr>
								<th>Nd =</th>
								<td id="Nd"></td>
							</tr>
							<tr>
								<th>Ndx =</th>
								<td id="ndx"></td>
							</tr>
							<tr>
								<th>xN =</th>
								<td id="xn"></td>
							</tr>
							<tr>
								<th>B =</th>
								<td id="b"></td>
							</tr>
							<tr>
								<th>e =</th>
								<td id="e"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row my-4 text-center mx-auto">
				<p class="small text-center">Check 1 : Slipping </p>
				<div class="col-lg-4">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallSlipping.png')}}" alt="EXCretwallSlipping">
				</div>
				<div class="col-lg-4">
					<table class="table small table-bordered">	
						<tr>
							<th>SF1 =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='sf1' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary"></span>
										</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>[P+] =</th>
							<td id="p+">kN</td>
						</tr>
						<tr>
							<th>[P-] =</th>
							<td id="p-">kN</td>
						</tr>
						<tr>
							<th>[P+]/[P-] =</th>
							<td id="hasilp+p-">kN</td>
						</tr>
					</table>
				</div>	
				
			<div class="row my-4 text-center mx-auto">
				<p class="small text-center">Check 2 : Overturning </p>
				<div class="col-lg-4">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallOver.png')}}" alt="EXCretwallOver">
				</div>
				<div class="col-lg-4">
					<table class="table small table-bordered">	
						<tr>
							<th>SF2 =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='sf2' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary"></span>
										</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>[M+] =</th>
							<td id="m+">kN</td>
						</tr>
						<tr>
							<th>[M-] =</th>
							<td id="m-">kN</td>
						</tr>
						<tr>
							<th>[M+]/[M-] =</th>
							<td id="hasil2">kN</td>
						</tr>
					</table>
				</div>
				
			<div class="row my-4 text-center mx-auto">
				<p class="small text-center">Check 3 : Base Pressure </p>
				<div class="col-lg-4">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallBase.png')}}" alt="EXCretwallBase">
				</div>
				<div class="col-lg-4">
					<table class="table small table-bordered">	
						<tr>
							<th>SF3 =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='sf3' placeholder="...">
										<div class="input-group-append">
											<span class="input-group-text border-primary"></span>
										</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>[Ϭmax] =</th>
							<td id="max">kN</td>
						</tr>
						<tr>
							<th>[Ϭmin] =</th>
							<td id="min">kN</td>
						</tr>
						<tr>
							<td id="hasil3">kN</td>
						</tr>
					</table>
				</div>
				
				<div class="row my-4 text-center mx-auto">
					<p class="small text-center">Check 4 : Dicplacement </p>
					<div class="col-lg-4">
						<img class="img-fluid" src="{{asset('img/user/EXCretwallDisplacement.png')}}" alt="EXCretwallDisplacement">
					</div>
					<div class="col-lg-4">
						<table class="table small table-bordered">	
							<tr>
								<th>SF4 =</th>
								<td>	
									<div class="input-group">
										<input autocomplete="off" type="number" class="form-control border-primary" id='sf4' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary"></span>
											</div>
									</div>
								</td>
							</tr>
							<tr>
								<th>[Ec] =</th>
								<td id="ec">kN</td>
							</tr>
							<tr>
								<th>[Ic] =</th>
								<td id="ic">kN</td>
							</tr>
							<tr>
								<th>[Δ] =</th>
								<td id="segitiga">kN</td>
							</tr>
						</table>
					</div>		
				</div>
			</div>	
		</section>
		{{-- End --}}
		{{-- Reinforced Concrete Design --}}
		<section>
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Reinforcen Concrete Design</h5>
				</div>
			</div>	
			<div class="row my-4 text-center mx-auto">
				<div class="col-lg-6">
					<img class="img-fluid" src="{{asset('img/user/EXCretwallConcrete.png')}}" alt="EXCretwallConcrete">
				</div>
				<div class="col-lg-4">
					<table class="table small table-bordered">
						<tr>
							<th>ø  =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='L' placeholder="...">
									<div class="input-group-append">
										<span class="input-group-text border-primary"></span>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>Load Factor =</th>
							<td>
								<div class="input-group">
									<input autocomplete="off" type="number" class="form-control border-primary" id='lf' placeholder="...">
									<div class="input-group-append">
										<span class="input-group-text border-primary"></span>
									</div>
								</div>
							</td>
						</tr>
						<tr>
							<th>Pmin =</th>
							<td id="pmin"></td>
						</tr>
						<tr>
							<th>Pmax =</th>
							<td id="pmax"></td>
						</tr>
					</table>
				</div>	
				<div class="row my-4 mx-auto justify-content-center">
					<div class="col-lg-6 mt-2">
						<img class="img-fluid" src="{{asset('img/user/EXCretwallRumus5.png')}}" alt="EXCretwallRumus5">
					</div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<div class="table-responsive">
						<table class="table small table-bordered">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col">Section 1</th>
									<th scope="col">Section 2</th>
									<th scope="col">Section 3</th>
									<th scope="col">Section 4</th>
									<th scope="col">Section 5</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>d1</td>
									<td>
										<div class="input-group">
											<input autocomplete="off" type="number" class="form-control border-primary" id='d1' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary">m</span>
											</div>
										</div>
									</td>
									<td>
										<div class="input-group">
											<input autocomplete="off" type="number" class="form-control border-primary" id='d1' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary">m</span>
											</div>
										</div>
									</td>
									<td>
										<div class="input-group">
											<input autocomplete="off" type="number" class="form-control border-primary" id='d1' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary">m</span>
											</div>
										</div>
									</td>
									<td>
										<div class="input-group">
											<input autocomplete="off" type="number" class="form-control border-primary" id='d1' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary">m</span>
											</div>
										</div>
									</td>
									<td>
										<div class="input-group">
											<input autocomplete="off" type="number" class="form-control border-primary" id='d1' placeholder="...">
											<div class="input-group-append">
												<span class="input-group-text border-primary">m</span>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td >B1</td>
									<td id="psmpa2"></td>
									<td id="pa2"></td>
									<td id="dist2"></td>
									<td id="ma2"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>H1</td>
									<td id="psmpa3"></td>
									<td id="pa3"></td>
									<td id="dist3"></td>
									<td id="ma3"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>M1</td>
									<td id="psmpa4"></td>
									<td id="pa4"></td>
									<td id="dist4"></td>
									<td id="ma4"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>Mu1</td>
									<td id="psmpa5"></td>
									<td id="pa5"></td>
									<td id="dist5"></td>
									<td id="ma5"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>Ku1</td>
									<td id="psmpa6"></td>
									<td id="pa6"></td>
									<td id="dist6"></td>
									<td id="ma6"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>Tu1</td>
									<td id="psmpa7"></td>
									<td id="pa7"></td>
									<td id="dist7"></td>
									<td id="ma7"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>pb<sup>1</sup></td>
									<td id="psmpa8"></td>
									<td id="pa8"></td>
									<td id="dist8"></td>
									<td id="ma8"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>p</td>
									<td id="psmpa9"></td>
									<td id="pa9"></td>
									<td id="dist9"></td>
									<td id="ma9"></td>
									<td id="dist1"></td>
								</tr>
								<tr>
									<td>As1	</td>
									<td id="psmpa10"></td>
									<td id="pa10"></td>
									<td id="dist10"></td>
									<td id="ma10"></td>
									<td id="dist1"></td>
								</tr>
							</tbody>	
						</table>
					</div>
				</div>
			</div>
		</section>		
		{{-- End --}}
		{{-- Bar Table --}}
		{{-- End --}}

		<div class="col-12 text-center display-application-none show-aplication-5">
			<hr>
			<a href="/aplikasi/EXCretwall" class="btn btn-danger btn-sm mx-auto">Resett</a>
		</div>
	</div>
</main>
@endsection

@section('scripts')
	<script src="{{asset('/js/user/application/EXCretwall.js')}}"></script>
@endsection
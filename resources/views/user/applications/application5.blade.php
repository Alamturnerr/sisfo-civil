@extends('user.applications.main-application')

@section('title', 'Aplikasi EXCretwall')

@section('header-aplikasi-5')
<h2 class="my-4 pt-3">Aplikasi EXCretwall</h2><hr>
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
                <div class="col-md-4 my-auto mx-auto">
                    <img class="img-fluid" src="{{asset('img/user/ExcretwallDrawing.jpg')}}" alt="ExcretwallDrawing">
                </div>
			</div>
            <br>
            <div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Soil Data</h5>
			    </div>
                <div class="col-md-4 my-auto mx-auto">
				<br>
                    <img class="img-fluid" src="{{asset('img/user/ExcretwallSoilData.jpg')}}" alt="ExcretwallSoilData">
                </div>
			</div>
            <div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
                            <tr>
							    <th>y3</th>
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
							    <th>y6</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="y6" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">m</span>
								        </div>
								    </div>
							    </td>
						    </tr>
                            <tr>
							    <th>x4</th>
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
							    <th>δ</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="del" placeholder="...">
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
									    <input autocomplete="off" type="number" class="form-control border-primary" id="bet" placeholder="...">
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
                    <div class="table-responsive">
						<table class="table small table-bordered">
                            <tr>
                                <th>ɣs</th>
							    <td>
								    <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="als" placeholder="...">
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
									    <input autocomplete="off" type="number" class="form-control border-primary" id="sis" placeholder="...">
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
									    <input autocomplete="off" type="number" class="form-control border-primary" id="cu" placeholder="...">
									    <div class="input-group-append">
										    <span class="input-group-text border-primary">KN/m<sup>2</sup></span>
									    </div>
								    </div>
							    </td>
                            </tr>
                            <tr>
                                <th>ϕ</th>
							    <td>
								    <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="alcon" placeholder="...">
									    <div class="input-group-append">
										    <span class="input-group-text border-primary">deg</span>
									    </div>
								    </div>
							    </td>
                            </tr>
							<tr>
								<th>θ</th>
								<td id="tet"></td>
							</tr>
                        </table>
                    </div>
                </div>
			</div>
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Wall Dimensions</h5>
			    </div>
                <div class="col-md-4 my-auto mx-auto">
				<br>
					<img class="img-fluid" src="{{asset('img/user/WallDimentions.jpg')}}" alt="WallDimentions">
                </div>
			</div>
			<div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
                            <tr>
							    <th>x1</th>
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
							    <th>x2</th>
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
							    <th>x3</th>
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
							    <th>x6</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="x6" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">m</span>
								        </div>
								    </div>
							    </td>
						    </tr>
							<tr>
							    <th>y2</th>
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
							    <th>x7</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="x7" placeholder="...">
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
							    <th>x8</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="x8" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">m</span>
								        </div>
								    </div>
							    </td>
						    </tr>
							<tr>
							    <th>y1</th>
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
							    <th>x5</th>
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
							    <th>y4</th>
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
							    <th>y5</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="y5" placeholder="...">
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
			<div class="row">
				<div class="col-md-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3">Wall Material</h5>
			    </div>
			</div>
			<div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered">
                            <tr>
							    <th>ɣc</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="alc" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">Kn/m<sup>3</sup></span>
								        </div>
								    </div>
							    </td>
						    </tr>
							<tr>
							    <th>Ec</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="ec" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">Kn/m<sup>3</sup></span>
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
							    <th>fc</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="fc" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">Kn/m<sup>2</sup></span>
								        </div>
								    </div>
							    </td>
						    </tr>
							<tr>
							    <th>fy</th>
							    <td>
							        <div class="input-group">
									    <input autocomplete="off" type="number" class="form-control border-primary" id="fy" placeholder="...">
								        <div class="input-group-append">
									        <span class="input-group-text border-primary">Kn/m<sup>2</sup></span>
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
					<p href="#" class="btn btn-success btn-application-1">Hitung</p>
				</div>
			</div>	
        </section> 
		<section class="display-application-non show-aplication-1">
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Active Pressure </h5>
				</div>
				<div class="col-md-4 my-auto mx-auto">
					<br>
					<img class="img-fluid" src="{{asset('img/user/ExcretwallRumus1.png')}}" alt="ExcretwallRumus1">
				</div>
				<div class="col-md-4 my-auto mx-auto">
					<img class="img-fluid" src="{{asset('img/user/ExcretwallRumus2.png')}}" alt="ExcretwallRumus2">
				</div>
			</div>
			<div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>Ka</th>
								<td id="ka"></td>
							</tr>
							<tr>
								<th>Ha</th>
								<td id="ha"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>Pa</th>
								<td id="pa"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Passive Pressure </h5>
				</div>
				<div class="col-lg-4 mt-4">
					<img class="img-fluid w-75" src="{{asset('img/user/EXCretwall.png')}}" alt="EXCretwall">
				</div>
				<div class="col-lg-4 text-center mx-auto">
					<img  class="img-fluid w-50" src="{{asset('img/user/EXCretwallPassivePress.png')}}" alt="EXCretwallPassivePress">
				</div>
			</div>
			<div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>Kp</th>
								<td id="kp"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>Hp</th>
								<td id="hp"></td>
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
			<div class="row my-4">
				<div class="col-lg-6 mx-auto">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>Pp</th>
								<td id="pp"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-lg-12 text-white text-center">
					<h5 class="my-auto bg-primary py-3"> Weight Calculator </h5>
				</div>
				<div class="col-lg-4 my-auto mx-auto">
					<img class="img-fluid w-75" src="{{asset('img/user/EXCretwallWeight.png')}}" alt="EXCretwallWeight">
				</div>
			</div>
			<div class="row my-4">
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>G1</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>G2</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>G3</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>G4</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>G5</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>G6</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>Nd</th>
								<td id="kp"></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table small table-bordered mx-auto">
							<tr>
								<th>m1</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>m2</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>m3</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>m4</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>m5</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>m6</th>
								<td id="kp"></td>
							</tr>
							<tr>
								<th>xN</th>
								<td id="kp"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		</section>       
    </div>
</main>
@endsection

@section('scripts')
	<script src="{{ asset('/js/user/application/excretwall.js') }}"></script>
@endsection
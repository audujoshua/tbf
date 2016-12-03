<?php include('header.php'); ?>

		<!-- Main Search Options -->
		<div style="background-image: url('https://hotels.ng/media/v52/img/jumbobitmap.jpg')">
			<div class='control bgc mini'>
				<div class="container">
					<div class='col-md-10 col-md-offset-1'>
						<form>
						  <div class="row closeform">
							  <div class="col-xs-3">
							    <div class="form-group">
								    <label class="sr-only" for="exampleInputEmail3">Email address</label>
								    <input type="email" class="form-control input-lg sharp-input-edge" id="exampleInputEmail3" placeholder="Email">
								</div>
							  </div>
							  <div class="col-xs-3">
							    <div class="form-group">
								    <label class="sr-only" for="exampleInputEmail3">Email address</label>
								    <input type="email" class="form-control input-lg sharp-input-edge" id="exampleInputEmail3" placeholder="Email">
								  </div>
							  </div>
							  <div class="col-xs-4">
							    <div class="form-group">
								    <label class="sr-only" for="exampleInputPassword3">Password</label>
								    <select class="form-control input-lg sharp-input-edge">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>
							  </div>
							  <div class="col-xs-2">
							    <input type='submit' class='btn btn-lg btn-danger action hollow' value='Search'>
							  </div>

						   </div>
						</form>
					</div>
				</div>
			</div>
		</div>

<br />
		<!-- Result -->
		<div class='container'>
			<div class='row'>

				<div class='col-md-4'>
					<div class='filterbox'>
						<form>
						  <div class="form-group">
						    <small>Start Date:</small>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <small>Departure Date:</small>
						    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
							<div class="row closeform">
							  <div class="col-md-6">
							    <div class="form-group">
								     <small>Class:</small>
								    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
								</div>
							  </div>
							  <div class="col-md-6">
							    <div class="form-group">
								    <small>Passengers:</small>
								    <select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								  </div>
							  </div>
						   </div>



						  <button type="submit" class="btn btn-danger btn-blk">Submit</button>
						</form>
					</div>

					<div class='filterbox'>
						<form>
						  <div class="form-group">
						    <small>Price:</small><br />
						    <b>€ 10</b> <input type="text" class="slider" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" > <b>€ 1000</b>
						  </div>
						</form>
					</div>

					<div class='filterbox'>
						<small>Flight:</small><br />
						<form>
						  <div class="checkbox"><label><input type="checkbox"> Arik</label></div>
						  <div class="checkbox"><label><input type="checkbox"> Belview</label></div>
						  <div class="checkbox"><label><input type="checkbox"> Air France</label></div>
						  <div class="checkbox"><label><input type="checkbox"> British Airways</label></div>
						</form>
					</div>
				</div>

				<div class='col-md-8'>
					<div class='result'>
						<div class='row flight'>
							<!-- Flight -->
							<div class='col-md-3'><img src='http://sparrow-html.weblionmedia.net/img/flyght-02.png' /></div>

							<!-- destination and duration -->
							<div class='col-md-7'>
								<div class='row'>
									<div class='col-md-4'>
										<small>LOS</small>
										<p><strong>10:00</strong></p>
									</div>
									<div class='col-md-3 time'>
										<i class='fa fa-clock-o'></i>
										<small>02h:30mm</small>
									</div>
									<div class='col-md-3 text-right'>
										<small>ABJ</small>
										<p><strong>10:00</strong></p>
									</div>
								</div>
								<div class='row meta'>
									<div class='col-md-10'>
										<ul class='list-inline'>
											<li>No Stops</li>
											<li>Economy</li>
											<li>6Kg/25Kg</li>
											<li><a href='#'>More Details <i class='fa fa-angle-down'></i></a></li>
										</ul>
									</div>
									<div class='col-md-2'></div>
								</div>
							</div>

							<!-- Amount -->
							<div class='col-md-2 amnt'>N22,000</div>
						</div>

						<div class='row flight'>
							<!-- Flight -->
							<div class='col-md-3'><img src='http://sparrow-html.weblionmedia.net/img/flyght-02.png' /></div>

							<!-- destination and duration -->
							<div class='col-md-7'>
								<div class='row'>
									<div class='col-md-4'>
										<small>LOS</small>
										<p><strong>10:00</strong></p>
									</div>
									<div class='col-md-3 time'>
										<i class='fa fa-clock-o'></i>
										<small>02h:30mm</small>
									</div>
									<div class='col-md-3 text-right'>
										<small>ABJ</small>
										<p><strong>10:00</strong></p>
									</div>
								</div>
								<div class='row meta'>
									<div class='col-md-10'>
										<ul class='list-inline'>
											<li>No Stops</li>
											<li>Economy</li>
											<li>6Kg/25Kg</li>
											<li><a href='#'>More Details <i class='fa fa-angle-down'></i></a></li>
										</ul>
									</div>
									<div class='col-md-2'></div>
								</div>
							</div>

							<!-- Amount -->
							<div class='col-md-2 amnt'>N22,000</div>
						</div>

						<div class='row flight'>
							<!-- Flight -->
							<div class='col-md-3'><img src='http://sparrow-html.weblionmedia.net/img/flyght-02.png' /></div>

							<!-- destination and duration -->
							<div class='col-md-7'>
								<div class='row'>
									<div class='col-md-4'>
										<small>LOS</small>
										<p><strong>10:00</strong></p>
									</div>
									<div class='col-md-3 time'>
										<i class='fa fa-clock-o'></i>
										<small>02h:30mm</small>
									</div>
									<div class='col-md-3 text-right'>
										<small>ABJ</small>
										<p><strong>10:00</strong></p>
									</div>
								</div>
								<div class='row meta'>
									<div class='col-md-10'>
										<ul class='list-inline'>
											<li>No Stops</li>
											<li>Economy</li>
											<li>6Kg/25Kg</li>
											<li><a href='#'>More Details <i class='fa fa-angle-down'></i></a></li>
										</ul>
									</div>
									<div class='col-md-2'></div>
								</div>
							</div>

							<!-- Amount -->
							<div class='col-md-2 amnt'>N22,000</div>
						</div>

					</div>
				</div>

			</div>
		</div>
<br />

<?php include('footer.php') ?>
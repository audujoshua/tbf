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
						<p class='h4'><strong>Order Summary</strong></p><br />
						<form>
							 <table class="table table-bordered">
		                          <tr>
		                              <td>$40k x 4 months</td>
		                              <td>$160,000</td>
		                          </tr>
		                          <tr>
		                              <td>Service charge</td>
		                              <td>$20,000</td>
		                          </tr>
		                          <tr>
		                              <td>Processing fee</td>
		                              <td>$1,000</td>
		                          </tr>
		                      </table>

						   <hr /><button type="submit" class="btn btn-success btn-block">Pay with card.</button><hr />

						  <p><a href='#' class='text-sm'>Terms and Conditions apply.</a></p>
						</form>
					</div>
				</div>

				<div class='col-md-8'>
					<h2 class='h3'><strong>Invoice</strong></h2>
					<p>An invoice has been generated for the service you requested.</p>
					<p>The amount due is ...</p>

					
				</div>

			</div>
		</div>
<br />

<?php include('footer.php') ?>
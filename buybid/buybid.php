<?php
$title = "Get Buy Bid | CARWAVE";
include('../head.php');
include('../nav-user.php');
include('buybid-modal.php');
?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">Get Buy Bid</h4>
      </div>
    </div>
  </div>
</div>

<br>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="buybid-form">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
			        <div class="col-md-6">
			        	<div class="form-group">
			            <label for="firstname">Choose your dealership:</label>
			            <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Select Dealership <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Toyota of Vacaville</a></li>
									    <li><a href="javascript:;">Mazda of Vacaville</a></li>
									    <li><a href="javascript:;">Nisaan of Vacaville</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">VIN:</label>
			            <div class="input-group">
							      <input type="text" class="form-control" placeholder="Enter VIN">
							      <span class="input-group-btn">
							        <button class="btn btn-default" type="button">Decode VIN</button>
							      </span>
							    </div><!-- /input-group -->

			          </div>
			        </div>
			        <div class="col-md-6">
			          
			        </div>
			      </div>
			      <div class="row">
			        <div class="col-md-6">
			          <div class="form-group">
			            <label for="firstname">Year:</label>
			            <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Select Year <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">1990</a></li>
									    <li><a href="javascript:;">1991</a></li>
									    <li><a href="javascript:;">1992</a></li>
											<li><a href="javascript:;">1993</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">Make:</label>
			            <div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    Select Make <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Acura</a></li>
									    <li><a href="javascript:;">Audi</a></li>
									    <li><a href="javascript:;">Aston Martin</a></li>
									    <li><a href="javascript:;">Bentley</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">Model:</label>
			            <div class="btn-group">
									  <button type="button" disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Models<span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Model 1</a></li>
									    <li><a href="javascript:;">Model 2</a></li>
									    <li><a href="javascript:;">Model 3</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">Trim:</label>
			            <div class="btn-group">
									  <button type="button" disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Trim <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Action</a></li>
									    <li><a href="javascript:;">Another action</a></li>
									    <li><a href="javascript:;">Something else here</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="javascript:;">Separated link</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">Engine:</label>
			            <div class="btn-group">
									  <button type="button" disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Engine <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Action</a></li>
									    <li><a href="javascript:;">Another action</a></li>
									    <li><a href="javascript:;">Something else here</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="javascript:;">Separated link</a></li>
									  </ul>
									</div>
			          </div>

			        </div>
			        <div class="col-md-6">
			        	<div class="form-group">
			            <label for="firstname">Transmission:</label>
			            <div class="btn-group">
									  <button type="button"  disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Engine <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Action</a></li>
									    <li><a href="javascript:;">Another action</a></li>
									    <li><a href="javascript:;">Something else here</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="javascript:;">Separated link</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">Drive Train:</label>
			            <div class="btn-group">
									  <button type="button" disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Drive Train <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Action</a></li>
									    <li><a href="javascript:;">Another action</a></li>
									    <li><a href="javascript:;">Something else here</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="javascript:;">Separated link</a></li>
									  </ul>
									</div>
			          </div>

			          <div class="form-group">
			            <label for="firstname">Mileage:</label>
							    <input type="text" class="form-control" placeholder="Enter Mileage">
			          </div>
			          <div class="form-group">
			            <label for="firstname">Exterior Color:</label>
			            <div class="btn-group">
									  <button type="button" disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Colors <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Action</a></li>
									    <li><a href="javascript:;">Another action</a></li>
									    <li><a href="javascript:;">Something else here</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="javascript:;">Separated link</a></li>
									  </ul>
									</div>
			          </div>
			          <div class="form-group">
			            <label for="firstname">Interior Color:</label>
			            <div class="btn-group">
									  <button type="button" disabled="disabled" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    All Colors <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu">
									    <li><a href="javascript:;">Action</a></li>
									    <li><a href="javascript:;">Another action</a></li>
									    <li><a href="javascript:;">Something else here</a></li>
									    <li role="separator" class="divider"></li>
									    <li><a href="javascript:;">Separated link</a></li>
									  </ul>
									</div>
			          </div>
			        </div>
			      </div>
					</div>

					<div class="col-md-4"></div>
				</div>

				<br>

				<div class="row">
					<div class="col-md-4">
						<div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-1">
	            <label for="checkbox-1"><span class="check">XL</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-2">
	            <label for="checkbox-2"><span class="check">ABS (4-Wheel)</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-3">
	            <label for="checkbox-3"><span class="check">Air Conditioning</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-4">
	            <label for="checkbox-4"><span class="check">Sliding Rear Window</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-5">
	            <label for="checkbox-5"><span class="check">Power Sliding Rear Window</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-6">
	            <label for="checkbox-6"><span class="check">Power Windows</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-7">
	            <label for="checkbox-7"><span class="check">Power Door Locks</span></label>
	          </div>
					</div>

					<div class="col-md-4">
						<div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-8">
	            <label for="checkbox-8"><span class="check">Cruise Control</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-9">
	            <label for="checkbox-9"><span class="check">Power Steering</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-10">
	            <label for="checkbox-10"><span class="check">Tilt Wheel</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-11">
	            <label for="checkbox-11"><span class="check">AM/FM Stereo</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-12">
	            <label for="checkbox-12"><span class="check">Cassette</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-13">
	            <label for="checkbox-13"><span class="check">CD/MP3 (Single Disc)</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-14">
	            <label for="checkbox-14"><span class="check">CD/MP3 (Multi Disc)</span></label>
	          </div>
					</div>


					<div class="col-md-4">
						<div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-15">
	            <label for="checkbox-15"><span class="check">Premium Sound</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-16">
	            <label for="checkbox-16"><span class="check">Power Seat</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-17">
	            <label for="checkbox-17"><span class="check">Dual Power Seats</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-18">
	            <label for="checkbox-18"><span class="check">Leather</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-19">
	            <label for="checkbox-19"><span class="check">Sun Roof (Flip-Up)</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-20">
	            <label for="checkbox-20"><span class="check">Sun Roof (Sliding)</span></label>
	          </div>

	          <div class="checkbox">
	            <input type="checkbox" name="equip" id="checkbox-21">
	            <label for="checkbox-21"><span class="check">Moon Roof</span></label>
	          </div>
					</div>


				</div><!-- row -->

				<br>

				<div class="row">
					<div class="col-md-3">
						<br>
						<button class="btn btn-lg btn-block btn-primary" onclick="$('.buybid-form').hide(); $('.vi-kbb').fadeIn(); $('.buybid-result').fadeIn();">Get KBB</button>
					</div>
				</div>
			</div>

			<br><br>

			<!-- KBB -->
			<div class="row">
				<div class="col-sm-8">
					<div class="vi-kbb" style="display: none;">
						<div class="panel panel-default">
							<button class="pull-right btn btn-default btn-sm" onclick="$('.vi-kbb').hide(); $('.buybid-result').hide(); $('.buybid-form').fadeIn();"><i class="fa fa-pencil-alt"></i></button>
							<h4 class="text-center">Wholesale Lending/Retail Breakdown <br> Kelley Blue Book</h4>
							<h5 class="text-center">Effective dates: 06/22/2018 -06/28/2018</h5>
							<br>
							<p class="text-center">Zip Code 92111 </p>
							<p class="text-center"> 2018 Kia Forte LX Sedan 4D	$14,744/$17,479</p>
							<br>
							<div class="kbb-details">
								<div class="row">
									<div class="col-xs-8">
										<p>4-Cyl, 2.0 Liter</p>
										<p>Automatic, 6-Spd w/Sportmatic</p>
										<p>FWD</p>
									</div>
									<div class="col-xs-4">
										<p>Included</p>
										<p>Included</p>
										<p>Included</p>
									</div>
								</div>
							</div><!-- kbb-details -->
							<br>

							<div class="kbb-details2">
								<div class="row">
									<div class="col-sm-6 col-print-6">
										<div class="row">
											<div class="col-xs-8">
												<p>Hill Start Assist Control</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Traction Control</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Electronic Stability Control</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>ABS (4-Wheel)</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Keyless Entry</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Air Conditioning</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Power Windows</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Power Door Locks</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Cruise Control</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Power Steering</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Power Door Locks</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Cruise Control</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Power Steering</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Cruise Control</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Power Steering</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>

									</div><!--col-sm-6-->

									<div class="col-sm-6 col-print-6">

										<div class="row">
											<div class="col-xs-8">
												<p>Tilt & Telescoping Wheel</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>AM/FM Stereo</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>CD/MP3 (Single Disc)</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>SiriusXM Satellite</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Bluetooth Wireless</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>	Backup Camera</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>140/177</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Dual Air Bags</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Side Air Bags</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>F&R Head Curtain Air Bags</p>
											</div><!--col-sm-6-->
											<div class="col-sm-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Steel Wheels</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Dual Air Bags</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Side Air Bags</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>F&R Head Curtain Air Bags</p>
											</div><!--col-sm-6-->
											<div class="col-sm-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>
										<div class="row">
											<div class="col-xs-8">
												<p>Steel Wheels</p>
											</div><!--col-sm-6-->
											<div class="col-xs-4 text-right">
												<p>Included</p>
											</div><!--col-sm-6-->
										</div>

									</div><!--col-sm-6-->
								</div>
							</div><!-- kbb-details-2 -->
							<br><br>
							<div class="kbb-details2">
								<div class="row">
									<div class="col-xs-8">
										<p>Total Value without mileage</p>
									</div>
									<div class="col-xs-4 text-right">
										<p>$14,884/$17,656</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<p>Mileage Adjustment(16,865 miles)</p>
									</div>
									<div class="col-xs-4 text-right">
										<p>($298)</p>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<p>***Total Wholesale Lending/Retail Value</p>
									</div>
									<div class="col-xs-4 text-right">
										<p><strong>$14,586/$17,358</strong></p>
									</div>
								</div>
							</div> <!-- kbb-details-2 -->

							<div class="kbb-footnote">
								<p>Kelley Blue Book® KARPOWER Online's® values for .Values are subjective opinions. Kelley Blue Book assumes no liability for errors oromissions as to values, manufacturer or dealer information.©Copyright Kelley Blue Book 2015. All rights reserved.</p>
							</div>

						</div>
					</div>
				</div><!--col-sm-12-->
			</div><!-- row -->
			<!-- KBB -->
			<br><br>
			
			<div class="buybid-result" style="display: none;">
				<div class="row">
					<div class="col-lg-12">
						<h4>Dealers looking for your vehicle:</h4>
						<p>Please select Dealers and send email or text message:</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="table-responsive">
								<table class="table table-buybid">
									<thead>
										<tr>
											<th width="70">
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-22">
							            <label for="checkbox-22"><span class="check">All</span></label>
							          </div>
											</th>
											<th>Dealer</th>
											<th>Dealership</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Brett Norberry</a></td>
											<td>Folsom Lake Toyota</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Adam Harris</a></td>
											<td>Folsom Lake Toyota, Dealership 456, Dealership 763</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Ryan Farina</a></td>
											<td>Folsom Lake Toyota, Dealership 2, Dealership 3</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Alejandra Delgado</a></td>
											<td>Folsom Lake Toyota</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Marshia Young</a></td>
											<td>Folsom Lake Toyota</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Bretman Rock</a></td>
											<td>Folsom Lake Toyota</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Ryan Higa</a></td>
											<td>Folsom Lake Toyota</td>
										</tr>
										<tr>
											<td>
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-23">
							            <label for="checkbox-23"><span class="check">&nbsp;</span></label>
							          </div>
											</td>
											<td><a href="users/userprofile.php" target="_blank">Chester See</a></td>
											<td>Folsom Lake Toyota</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#buybid-send">Send Buy Bid Request</button>
						<br>
						<br>
					</div>
				</div>



				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="table-responsive">
								<table class="table table-buybid">
									<thead>
										<tr>
											<th width="70">
												<div class="checkbox">
							            <input type="checkbox" name="equip" id="checkbox-22">
							            <label for="checkbox-22"><span class="check">All</span></label>
							          </div>
											</th>
											<th>Dealer</th>
											<th>Dealership</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="3" class="text-center" style="padding: 20px 0;">
												<em class="text-light">No results found. <br>Try a different vehicle.</em>
											</td>

										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
						
						<button class="btn btn-lg btn-primary" disabled="disabled" data-toggle="modal" data-target="#buybid-send">Send Buy Bid Request</button>
						<br>
						<br>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<?php include('../footer.php');?>
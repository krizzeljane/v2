<?php
$title = "Reports | CARWAVE";
include('head.php');
include('header.php');
?>

<div class="nav-blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-6">
				<h4 class="page-title">Reports</h4>
			</div>
		</div>
	</div>
</div>

<br>

<div class="page-container">
	<div class="container">

		<div class="panel panel-default">
			<div class="panel-body reports">
				<h4>Admin Reports</h4>
				<br>
				<form class="form-inline">
					<div class="form-group"> 
						<select class="form-control" id="reports-cw">
							<option value="0" disabled="disabled" selected="selected">Select Report</option>
							<option value="report1">Cars Ran in Auction Report</option>
							<option value="report2">Dealer Direct Offers Report</option>
							<option value="report3">Frontline Auction Second Chance Report</option>
							<option value="report4">Cars For Sale Pricing (As is)</option>
							<option value="report5">Hot Seller Listing</option>
						</select>
					</div>

					<div class="form-group report-filter report2">
						<select class="form-control">
							<option>Today</option>
							<!-- <option>Last 2 Days</option> -->
							<option selected="selected">Last 7 Days</option>
							<option>Last 14 Days</option>
							<!-- <option>All Time</option> -->
							<option>Custom</option>
						</select>
					</div>

					<div class="form-group report-filter report1 report3">
						<select class="form-control">
							<option>Select Auction</option>
							<option>All Frontline Auctions</option>
							<option>CARWAVE Frontline Auction</option>
							<option>San Diego Frontlines</option>
							<option>Texas Frontlines</option>
							<option>Fresh Trades Auction</option>
						</select>
					</div>

					<div class="form-group report-filter report3">
						<select class="form-control">
							<option selected="selected" value="1">474 Feb 19 2019 4:00PM</option>
							<option value="2">473 Feb 12 2019 4:00PM</option>
							<option value="3">472 Feb 5  2019 4:00PM</option>
							<option value="4">471 Jan 29 2019 4:00PM</option>
							<option value="5">470 Jan 22 2019 4:00PM</option>
							<option value="6">469 Jan 15 2019 4:00PM</option>
							<option value="7">468 Jan 8 2019 4:00PM</option>
							<option value="8">467 Jan 1 2019 4:00PM</option>
							<option value="9">466 Jan 2 2019 4:00PM</option>
							<option value="10">465 Dec 26 2018 4:00PM</option>
							<option value="11">464 Dec 18 2018 4:00PM</option>
							<option value="12">463 Dec 11 2018 4:00PM</option>
							<option value="13">462 Dec 4 2018 4:00PM</option>
							<option value="14">461 Nov 27 2018 4:00PM</option>
						</select>
					</div>

					<div class="form-group report-filter report1">
						<select class="form-control" id="date">
							<option value="customdate">Custom...</option>
							<option selected="selected" value="1">474 Feb 19 2019 4:00PM</option>
							<option value="2">473 Feb 12 2019 4:00PM</option>
							<option value="3">472 Feb 5  2019 4:00PM</option>
							<option value="4">471 Jan 29 2019 4:00PM</option>
							<option value="5">470 Jan 22 2019 4:00PM</option>
							<option value="6">469 Jan 15 2019 4:00PM</option>
							<option value="7">468 Jan 8 2019 4:00PM</option>
							<option value="8">467 Jan 1 2019 4:00PM</option>
							<option value="9">466 Jan 2 2019 4:00PM</option>
							<option value="10">465 Dec 26 2018 4:00PM</option>
							<option value="11">464 Dec 18 2018 4:00PM</option>
							<option value="12">463 Dec 11 2018 4:00PM</option>
							<option value="13">462 Dec 4 2018 4:00PM</option>
							<option value="14">461 Nov 27 2018 4:00PM</option>
						</select>
					</div>

					<div class="customdate form-group" style="display: none;">
						<div class="form-group has-feedback">
					    <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" placeholder="From">
					    <span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
					    <span id="inputSuccess3Status" class="sr-only">(success)</span>
					  </div>
					  <div class="form-group has-feedback">
					    <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status"  placeholder="To">
					    <span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
					    <span id="inputSuccess3Status" class="sr-only">(success)</span>
					  </div>
					</div>

					<button type="submit" class="btn btn-default reports-csv">Export to CSV</button>
				</form>
				<br>

			</div>
		</div>
	</div>
</div>

<?php include("footer.php") ?>


<script type="text/javascript">
  $(document).ready(function(){
    $('#reports-cw').change(function(){
      $('.report-filter').hide();
      $('.' + $(this).val()).css('display', 'inline-block');
    });

    $('#date').change(function(){
      $('.customdate').hide();
      $('.' + $(this).val()).css('display', 'inline-block');
    });
  });
</script>
  

<div class="vi-qc-edit sticky">
	<div class="container">
		<form class="form-inline">
		  <div class="form-group">
		    <label for="exampleInputName2">Grade:</label>
		    <input type="text" style="width: 70px;" class="form-control input-sm" id="exampleInputName2" placeholder="0.0">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail2">MMR:</label>
		    <input type="email" style="width: 70px;" class="form-control text-right input-sm" id="exampleInputEmail2" placeholder="$0">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail2">Starting Price:</label>
		    <input type="email" style="width: 70px;" class="form-control text-right input-sm" id="exampleInputEmail2" placeholder="$0">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail2">Reserve Price:</label>
		    <input type="email" style="width: 70px;" class="form-control text-right input-sm" id="exampleInputEmail2" placeholder="$0">
		  </div>
		  

		  <div class="form-group">
		    <label for="exampleInputEmail2">Approved:</label>
		    <input type="checkbox" data-toggle="toggle" data-size="mini" data-on="Yes" data-off="No">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail2">Auction:</label>
		    <div class="btn-group">
				  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Not in Auction <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Trade-in Auction 1</a></li>
				    <li><a href="#">Trade-in Auction 2</a></li>
				    <li><a href="#">Trade-in Auction 3</a></li>
				  </ul>
				</div>
		  </div>
		  <div class="pull-right">
		  	<button type="button" class="btn btn-default btn-sm">Edit Disclosures</button>
		  	<button type="button" class="btn btn-primary btn-sm" disabled="disabled">Save Changes</button>
		  </div>
		</form>
	</div>
</div>
<br>
<div class="container">
	<div class="vi-header">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				
				<h4>2018 Kia Forte LX Sedan 4D <!-- <span>$18,000</span> --></h4>
				<h5><span>FWD 4-Cyl, 2.0 Liter</span> <span>16,865 miles</span> <span>Silver/Gray</span> <span>3KPFL4A70JE165060</span></h5>

			</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function(){
$(".hide-btn > span").click(function () {
$(this).text(function(i, text){
return text === "Hide" ? "Unhide" : "Hide";
})
});

$(".watch-btn > span").click(function () {
$(this).text(function(i, text){
return text === "Add to Watchlist" ? "Remove from Watchlist" : "Add to Watchlist";
})
});

$(".hide-btn, .watch-btn").click(function () {
$(this).toggleClass('text-primary-two');
});

});
	</script>
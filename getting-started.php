<?php
$title = "Getting Started | CARWAVE - Your Trusted Car Dealership Network";
?>

<?php include('head.php')?>
<?php include('nav-user.php')?>
<!-- <div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">Getting Started</h4>
      </div>
    </div>
  </div>
</div>
<br> -->

<div class="modal fade video-modal" id="youtubeVideo" tabindex="-1" role="dialog" aria-labelledby="youtubeVideo" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">
				<iframe id="video-placeholder" width="100%" height="100%" src="https://www.youtube.com/embed/8wDCtkkZ8xU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<section class="gs-banner">
	<div class="gs-banner-inner">
		<div class="container">
			<p class="gs-heading text-center">Giving you a better buying and selling experience</p>
			<p class="gs-p text-center text-md text-muted">An overview of CARWAVE, how to buy and sell cars, basic actions, and more.</p>
		</div>
	</div>
</section>


<div class="container">
	
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="gs-intro text-center">
				<iframe id="video-placeholder" width="100%" height="470" src="https://www.youtube.com/embed/8wDCtkkZ8xU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<br><br>
			<div class="row">
			  <div class="col-sm-6 col-md-4">

			    <div class="thumbnail hvr-grow ">
			      <a href="#" class="thumb-vid" data-toggle="modal" data-target="#youtubeVideo">
			      	<span>How to buy a vehicle <br><small><i class="fa fa-play"></i> Play video</small></span><br>
			      </a>
			    </div>

			  </div>

			  <div class="col-sm-6 col-md-4 ">
			    <div class="thumbnail hvr-grow">
			      <a href="#" class="thumb-vid" data-toggle="modal" data-target="#youtubeVideo">
			      	<span>How to sell a vehicle <br><small><i class="fa fa-play"></i> Play video</small></span><br>
			      </a>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail hvr-grow ">
			      <a href="#" class="thumb-vid" data-toggle="modal" data-target="#youtubeVideo">
			      	<span>How to find and print invoices <br><small><i class="fa fa-play"></i> Play video</small></span><br>
			      </a>
			    </div>
			  </div>
			</div>


			<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail hvr-grow ">
			      <a href="#" class="thumb-vid" data-toggle="modal" data-target="#youtubeVideo">
			      	<span>Get Buy Bid <br><small><i class="fa fa-play"></i> Play video</small></span><br>
			      </a>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail hvr-grow ">
			      <a href="#" class="thumb-vid" data-toggle="modal" data-target="#youtubeVideo">
			      	<span>How to search for dealers<br><small><i class="fa fa-play"></i> Play video</small></span><br>
			      </a>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail hvr-grow ">
			      <a href="#" class="thumb-vid" data-toggle="modal" data-target="#youtubeVideo">
			      	<span>Adjustments and Arbitrations <br><small><i class="fa fa-play"></i> Play video</small></span><br>
			      </a>
			    </div>
			  </div>
			</div>

		</div>
	</div>


</div>
<br><br>
<?php include('footer.php')?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.video-modal').on('hide.bs.modal', function(e) { 
	    var $if = $(e.delegateTarget).find('iframe');
	    var src = $if.attr("src");
	    $if.attr("src", '/empty.html');
	    $if.attr("src", src);
		});

	});


</script>
</body>
</html>

<?php include ('../head.php')?>

<?php include('../home-nav.php') ?>

<div class="new-home">
	<!-- banner -->
<div class="banner_top" id="home">
	<div data-vide-bg ="home/video/divining">
		<div class="center-container">

			<div class="background-carousel" id="background-carousel">
				<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
					<div class=" carousel-inner">
						<div class="item slide-1 active">
							<div class="container">
								<h1 class="slider-texts slider-text-1">
									CALIFORNIA’S <br> LARGEST <br><span class="text-yellow">DEALER DIRECT</span><br>
									NETWORK<br>
								</h1>
							</div>
						</div>
						<div class="item slide-2">
							<div class="container">
								<h1 class="slider-texts slider-text-1">
									NOW <span class="text-yellow">EXPANDING</span><br>
									TO ARIZONA!
								</h1>
							</div>
						</div>
						<div class="item slide-3">
							<div class="container">
								<h1 class="slider-texts slider-text-1">
									YOUR <span class="text-yellow">TRUSTED</span><br>
									NETWORK OF <br>
									FRANCHISE DEALERS
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--banner Slider starts Here-->

    </div>
  </div>
</div>
<!-- //banner -->

<section class="banner home">
	<div class="banner-inner">
		<div class="container">
			<div class="row banner-content text-center">
				<div class="col-md-7">
				</div>
				<div class="col-md-4">
					<div class="login-container">
						<h4>Log in</h4>
						<div class="form-group">
							<input type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email">
						</div>

						<div class="form-group">
							<input type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
						</div>

						<div class="checkbox text-left">
							<input type="checkbox" name="group2" id="checkbox-1">
							<label for="checkbox-1"><span class="check">Keep me signed in</span></label>
						</div>

						<div class="text-center">
							<a  href="home.php" class="btn btn-lg btn-primary text-center btn-block">LOG IN</a>
						</div>
						<br>
						<div class="text-center">
							<a href="#" class="btn-link">Having trouble logging in?</a>
							<p class="">Don't have an account yet? <a class="btn-link" href="#">Request a Demo</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="home-section two home">
	<div class="container">
		<div class="customer-logos slider">
			<div class="slide slick-slide"><img src="images/logo-valencia.jpg"></div>
			<div class="slide"><img src="images/dship1.jpeg"></div>
			<div class="slide"><img src="images/dship2.jpeg"></div>
			<div class="slide"><img src="images/logo-volks.png"></div>
			<div class="slide"><img src="images/logo-lb.png"></div>
			<div class="slide"><img src="images/logo-sa.png"></div>
			<div class="slide"><img src="images/logo-alham.png"></div>
			<div class="slide"><img src="images/logo-penske.jpg"></div>
			<div class="slide"><img src="images/logo-valencia.jpg"></div>
			<div class="slide"><img src="images/logo-volks.png"></div>
		</div>
	</div>
</section>


</div>



	<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- menu -->

<!-- //menu -->
<script src="js/jquery.vide.min.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 3
				}
			}]
		});
	});
</script>
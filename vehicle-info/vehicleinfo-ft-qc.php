<?php
$title = "2014 Audi Q5 TDI Premium Plus Sport Utility 4D - Vehicle Info | CARWAVE";
include('../head.php');
include('../header.php');
include('modal-test.php');
include('bid-modal-bid.php');
include('bid-modal-autobid.php');
?>
<!--MODALS-->

<!--MODALS END-->

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <h4 class="page-title"><a href="javascript:;" style="color: white;">Trade-in Auction</a> <i class="fa fa-angle-right"></i> 2018 Kia Forte LX Sedan 4D</h4>
      </div>
    </div>
  </div>
</div>


<div class="page-container animated fadeIn vi-page" id="printVI">
  <div class="vi-page-wm" style="display: none;">
    <!-- <img src="images/tdf.png" class="img-responsive"> -->
  </div>

  <?php include("vitqc-header.php") ?>

  <div class="container">
    <!-- Tab panes -->
    <div class="row">
      <div class="col-lg-6 col-print-6 padding-right-md">
        <?php include("vehicleinfo-ft-row1.php") ?>
      </div><!--col-md-6-->
       <div class="col-lg-6 col-print-6 padding-left-md">
        <?php include("vehicleinfo-ft-qc-row2.php") ?>    
      </div><!--col-md-6-->
    </div><!--row-->
  </div>
</div>


<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="slider/demo/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 100,
        itemMargin: 5,
        asNavFor: '#slider',
        prevText: "",
        nextText: ""
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>



<?php include("../footer.php") ?>
<?php
$title = "2014 Audi Q5 TDI Premium Plus Sport Utility 4D - Vehicle Info | CARWAVE";
include('../head.php');
include('../nav-user.php');
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

  <?php include("vi-header.php") ?>

  <div class="container">
    <!-- Tab panes -->
    <div class="row">
      <div class="col-lg-6 col-print-6 padding-right-md">
        <?php include("vehicleinfo-ft-row1.php") ?>
      </div><!--col-md-6-->
       <div class="col-lg-6 col-print-6 padding-left-md">
        <?php include("vehicleinfo-ft-row2.php") ?>    
      </div><!--col-md-6-->
    </div><!--row-->
  </div>
</div>



<div class="ua-list">
<div class="ua-list-list" style="display: none;">
<ul class="list-unstyled">
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.one').show();">1. Trade-in Auction (Viewing Time) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.two').show();">2. Trade-in Auction (Auction Start - No Bids yet) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.three').show();">3. Trade-in Auction (Auction Start - Current Bid) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.four').show();">4. Trade-in Auction (Auction Start - Outbid) Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.five').show();">5. Trade-in Auction (Auction Start - Leader) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.six').show();">6. Trade-in Auction (Extension Time) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.seven').show();">7. Trade-in Auction (Auction End - Won) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.eight').show();">8. Trade-in Auction (Auction End - Sold) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.nine').show();">9. Trade-in Auction (Auction End - Lost) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.ten').show();">10. Trade-in Auction (Auction End - On Offer) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.eleven').show();">11. Trade-in Auction (Withdrawn) - Buyer View</a></li>
<hr>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twelve').show();">12. Trade-in Auction (Viewing Time) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onethree').show();">13. Trade-in Auction (Auction Start - No Bids yet) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onefour').show();">14. Trade-in Auction (Auction Start - Current Bid) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onefive').show();">15. Trade-in Auction (Extension Time) - Seller</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onesix').show();">16. Trade-in Auction (Auction End - Sold) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.oneseven').show();">17. Trade-in Auction (Auction End - On Offer) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.oneeight').show();">18. Trade-in Auction (Purchased) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onenine').show();">19. Trade-in Auction (Sold) - Buyer/Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twozero').show();">20. Undergoing Quality Control</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twoone').show();">21. Ready for Sale</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twotwo').show();">22. SOLD - Seller View</a></li>
</ul>
</div>
<div class="ua-list-trigger">
<a href="javascript:;" onclick="$('.ua-list-list').slideToggle();">
List 
</a>
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
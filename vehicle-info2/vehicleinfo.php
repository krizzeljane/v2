<?php
$title = "2018 Kia Forte LX Sedan 4D";
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
      <div class="col-sm-12 col-xs-12">
        <h4 class="page-title"><a href="javascript:;" style="color: white;">Frontline Auction</a> <i class="fa fa-angle-right"></i> 2018 Kia Forte LX Sedan 4D</h4>
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
      <div class="col-md-6 col-print-6 padding-right-md">
        <?php include("vi-1.php") ?>

        <!-- include("vehicleinfo-row1.php") -->
      </div><!--col-md-6-->
      <div class="col-md-6 col-print-6 padding-left-md">
        <?php include("vi-2.php") ?>
        <!-- <div id="main-content" class="main"> -->
    
      </div><!--col-md-6-->
    </div><!--row-->
  </div>
</div>




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

     $("#vi-header").sticky({ 
      topSpacing: 0,
      getWidthFrom: '',
      //widthFromWrapper: true, // works only when .getWidthFrom is empty
      responsiveWidth: false, 
    });
  });


  // When the user scrolls down 50px from the top of the document, resize the header's font size
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.getElementById("header").style.fontSize = "30px";
    } else {
      document.getElementById("header").style.fontSize = "90px";
    }
  }

</script>

<!-- <script>
    $(window).load(function(){
     
    });
  </script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow201.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();
jQuery(document).ready(function($){ 
  if (localStorage.getItem('advertOnce') !== 'true') {
    $('body').append('<div id="advert-once" style="position:fixed; bottom: 10px; left: 10px;"><div class="advert-button"></div></div>')
    localStorage.setItem('advertOnce','true');
  } 
  $('#advert-once .advert-button').on('click',function(){
    $('#advert-once').hide();
  }); 
});
</script> -->



<div class="ua-list">
<div class="ua-list-list" style="display: none;">
<ul class="list-unstyled">
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.one').show();">1. Dealer Direct (Make Offer only) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.two').show();">2. Dealer Direct (Make Offer and Buy Now) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.three').show();">3. Dealer Direct (Offer Made) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.threehalf').show();">3.5. Dealer Direct (Offer Made) (Buy now disabled) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.four').show();">4. Dealer Direct (Purchased) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.five').show();">5. Dealer Direct (Sold - Buy Now) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.six').show();">6. Dealer Direct (Make Offer only) -Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.seven').show();">7. Dealer Direct (Make Offer and Buy Now) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.eight').show();">8. Dealer Direct (Sold - Buy Now) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.nine').show();">9. Dealer Direct (Car no longer available) - Seller View</a></li>
<hr>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.ten').show();">10. Frontline Auction (Viewing Time - Starting Bid - With Buy Now) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.eleven').show();">11. Frontline Auction (Viewing Time - Starting Bid - No Buy Now) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twelve').show();">12. Frontline Auction (Viewing Time - Starting Bid - Offer Made) - Buyer View</a></li>

<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twelvehalf').show();">12.5 Frontline Auction (Auction Start - Starting Bid - No bids yet) - Buyer View - BUY NOW DISABLED</a></li>

<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twelvesix').show();">12.6 Frontline Auction (Auction Start - Starting Bid - No bids yet) - Buyer View - BUY NOW ENABLED</a></li>

<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onethree').show();">13. Frontline Auction (Auction Start - Current Bid) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onefour').show();">14. Frontline Auction (Auction Start - Outbid) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onefive').show();">15. Frontline Auction (Auction Start - Leader) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onesix').show();">16. Frontline Auction (Extension Time) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.oneseven').show();">17. Frontline Auction (Auction End - Won) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.oneeight').show();">18. Frontline Auction (Auction End - Sold) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.onenine').show();">19. Frontline Auction (Auction End - Lost) - Buyer View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twozero').show();">20. Frontline Auction (Auction End - On Offer) - Buyer View </a></li>

<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twoone').show();">21. Frontline Auction (Viewing Time - Starting Bid) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twotwo').show();">22. Frontline Auction (Auction Start - Current Bid) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twothree').show();">23. Frontline Auction (Extension Time) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twofour').show();">24. Frontline Auction (Auction End - Sold) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twofive').show();">25. Frontline Auction (Auction End - On Offer) - Seller View</a></li>
<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twosix').show();">26. Frontline Auction (Withdrawn)</a></li>

<li><a href="javascript:;" onclick="$('.vi-section-ua').hide();$('.twoseven').show();">27. Listed in Auction, No Offers - Seller View</a></li>
</ul>
</div>
<div class="ua-list-trigger">
<a href="javascript:;" onclick="$('.ua-list-list').slideToggle();">
List 
</a>
</div>
</div>


<?php include("../footer.php") ?>
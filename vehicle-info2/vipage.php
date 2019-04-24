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
      <div class="col-sm-6 col-xs-12">
        <h4 class="page-title"><a href="javascript:;" style="color: white;">Frontline Auction</a> <i class="fa fa-angle-right"></i> 2018 Kia Forte LX Sedan 4D</h4>
      </div>
      <!-- <div class="col-sm-6 col-xs-6 text-right" style="margin-top: 10px;">
        <button class="btn btn-default btn-sm">Print this page &nbsp;&nbsp;<i class="fa fa-print"></i></button>
        <button class="btn btn-default btn-sm">Email this page &nbsp;&nbsp;<i class="fa fa-envelope"></i></button>
      </div> -->
    </div>
  </div>
</div>
<br>
<div class="page-container animated fadeIn">

  <div class="container">
    <!-- Tab panes -->
    <div class="row">
      <div class="col-md-6 padding-right-md">
        <?php include("vehicleinfo-row1.php") ?>
        <!-- include("vehicleinfo-row1.php") -->
      </div><!--col-md-6-->
       <div class="col-md-6 padding-left-md">
        <?php include("vehicleinfo-row2.php") ?>
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
  });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</script>




<?php include("../footer.php") ?>
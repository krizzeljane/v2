<?php include('ourteam-modal.php')?>
<?php include('taa.php')?>

<footer class="footer footer-public">
<!--    include('contact-banner.php')?> -->
  <div class="footer-content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="images/cw-logo-w.png" class="img-responsive">
          <br>
          <p class="text-xs">Copyright @ 2019 Version 2.4.7</p>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-unstyled text-left">
                <li><a class="" href="about-us-seller.php">About Us (Sellers)</a></li>
                <li><a class="" href="about-us-buyer.php">About Us (Buyers)</a></li>
                <li><a class="" href="javascript:;" data-toggle="modal" data-target="#taa">Terms and Agreements</a></li>
                <li><a href="http://www.carwave.com/carwave-privacy-policy.html" target="_blank">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="list-unstyled text-left">
                <li><a href="javascript:;">Arbitration Policy</a></li>
                <li><a href="javascript:;" data-toggle="modal" data-target="#our-team">Our Team</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="">
            <a href=""><i class="fa fa-phone"></i>(844)428-9638</a><br>
            <a href=""><i class="fa fa-envelope"></i> support@carwave.com</a>
          </div>
          <br>
          <div class="">
            <a class="" href="javascript:;"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="javascript:;"><i class="fab fa-youtube-square fa-2x"></i></a>
            <a class="" href="javascript:;"><i class="fab fa-twitter-square fa-2x"></i></a>
            <a href="javascript:;"><i class="fab fa-linkedin fa-2x"></i></a>
          </div>
        </div>
      </div>
    </div>
</footer>


<!-- Syntax Highlighter -->

  <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
  <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
  <script src="https://sachinchoolur.github.io/lightgallery.js/lightgallery/js/lg-thumbnail.js"></script>

  <script>
    lightGallery(document.getElementById('lightgallery'));
    lightGallery(document.getElementById('aniimated-thumbnails'), {
      thumbnail: true,
      animateThumb: true,
      showThumbByDefault: true
    }); 
  </script>

<!--   <script type="text/javascript">
    $(window).load(function(){
       $(".trans-v-row").mouseenter(function () {
          $(this).find('a.vrow-edit').fadeIn(300);
          $(this).addClass('primary-hover').fadeIn(300);
       });
       $(".trans-v-row").mouseleave(function () {
          $(this).find('a.vrow-edit').fadeOut(300);
          $(this).removeClass('primary-hover').fadeIn(300);
       }); 
       $(function () {
          $('[data-toggle="popover"]').popover()
        })     
    });
  </script> -->




<script src='js/autosize.min.js'></script>
<script>
  autosize(document.querySelectorAll('textarea'));
</script>



  <!-- <script type="text/javascript" src="slider/demo/js/shCore.js"></script>
  <script type="text/javascript" src="slider/demo/js/shBrushXml.js"></script>
  <script type="text/javascript" src="slider/demo/js/shBrushJScript.js"></script> -->

  <!-- Optional FlexSlider Additions -->
  <script src="slider/demo/js/jquery.easing.js"></script>
  <script src="slider/demo/js/jquery.mousewheel.js"></script>
  <script defer src="slider/demo//demo.js"></script>
  <script src="js/fixedTable.js"></script>
<!--  <script src="js/printThis.js"></script> -->

  <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

  <script type="text/javascript">
    $('.direct-modal').on('shown.bs.modal', function(event) {
      // reset the scroll to top
      $('.direct-modal .modal-body').scrollTop(0);
      // get the section using data
      var section = $(event.relatedTarget).data('section');
      // get the div position
      var sectionOffset = $('.' + section).offset();
      //scroll the container
      $('.direct-modal .modal-body').animate({
        scrollTop: sectionOffset.top - 30
      }, "1000");
    });

    $('[data-toggle="slide-collapse"]').on('click', function() {
      $navMenuCont = $($(this).data('target'));
      $navMenuCont.animate({
        'width': 'toggle'
      }, 350);
      $(".menu-overlay").fadeIn(500);

    });
    $(".menu-overlay").click(function(event) {
      $(".navbar-toggle").trigger("click");
      $(".menu-overlay").fadeOut(500);
    });

  </script>

  <script type="text/javascript" data-cfasync="false">
    (function(W,i,s,e,P,o,p){W['WisePopsObject']=P;W[P]=W[P]||function(){
    (W[P].q=W[P].q||[]).push(arguments)},W[P].l=1*new Date();o=i.createElement(s),
    p=i.getElementsByTagName(s)[0];o.async=1;o.src=e;p.parentNode.insertBefore(o,p)
    })(window,document,'script','//loader.wisepops.com/get-loader.js?v=1&site=kprbM7ySu7','wisepops');
  </script>
  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5729803.js"></script>
  <!-- End of HubSpot Embed Code -->
  <script defer src="//www.iorad.com/widgets/live/37161"></script>

</body>
</html>
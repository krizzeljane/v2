<?php
    $title = "Register New Staff";
    include('../head.php');
    include('../header.php');
?>


      <div class="nav-blue">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-xs-6">
              <h4 class="page-title">Users > Staff > Register New Staff</h4>
            </div>
          </div>
        </div>
      </div>


      <div class="page-container">
        <div class="container">
          <div class="page-bg">

            <div class="new-dealer-form">
              <h4>Register New Staff</h4>
              <br>
              
              <?php include('staff_new_form.php') ?>

            <br><br>
            <div class="row">
              <div class="col-sm-12 text-center">
                <a href="staff.php" class="btn btn-lg btn-default">Cancel</a>&nbsp;&nbsp;&nbsp;
                <a href="staff.php" class="btn btn-lg btn-primary">Register Staff</a>
              </div>
            </div>

            <br>
            <br>

          </div><!--page-bg-->
        </div><!--container-->
      </div><!--page-container-->



      <script type="text/javascript">
       $(function () {
        $('[data-toggle="popover"]').popover()
      })
       $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })

       $('.table > tbody > td').hover(function() {
        $('.table > tbody > tr > td > i').show();
      })
    </script>
    <script>



    </script>

<?php include("footer.php") ?>
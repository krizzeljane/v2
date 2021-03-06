<?php
    $title = "Register New Dealer";
    include('../head.php');
    include('../header.php');
?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">Users > Accounts > Register New User</h4>
      </div>
    </div>
  </div>
</div>

<div class="page-container">
  <div class="container">
    <div class="page-bg">

      <div class="new-dealer-form">
        <h4>Register New User</h4>
        <br>
        <?php include ('newDealerForm.php')?>
      </div>

      <br><br><br>
        <div class="row">
          <div class="col-sm-12 text-center">
            <a href="users/accounts.php" class="btn btn-lg btn-default">Cancel</a>&nbsp;&nbsp;&nbsp;
            <a href="users/accounts.php" class="btn btn-lg btn-primary">Register User</a>
          </div>
        </div>
        <br>
      <br>
      </div><!--new-dealer-form-->


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


<?php include("footer.php") ?>
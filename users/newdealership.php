<?php
$title = "Register New Dealership";
include('../head.php');
include('../header.php');
?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">Users > Accounts > Register New Dealership</h4>
      </div>
    </div>
  </div>
</div>

<div class="page-container">
  <div class="container">
    <div class="page-bg">

      <div class="new-dealer-form">
        <h4>Register New Dealership</h4>
        <br>

        <?php include('newDealershipForm.php')?>
        
      </div>

      <br>
  <!-- <div class="new-dealer-form">
    <h4>User(s)</h4>
    <br>
    <div class="row">
      <div class="col-sm-6">
        <div class="dropdown element">
          <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select User(s)
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="javascript:;" type="button" onclick="$('.newDealerform').fadeIn();"><i class="fa fa-plus"></i> &nbsp;Add New Dealer</a></li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Alexander Wang</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Jason Mosk</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Christopher Ross</span></label>
                </div>
              </a>
            </li>   
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Jennifer Mendoza</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Mike Harris</span></label>
                </div>
              </a>
            </li>                                
          </ul>
        </div>
      </div>
    </div>
    <br>
    <span class="tag label label-secondary">
      <span>Jennifer Mendoza</span>
      <a><i class="fa fa-times"></i></a> 
    </span>
    <span class="tag label label-secondary">
      <span>Mike Harris</span>
      <a><i class="fa fa-times"></i></a> 
    </span>
    <div class="newFormContainer newDealerform">
      <div class="row">
        <div class="col-md-9"><h4>Register New Dealer</h4></div>
        <div class="col-md-3 text-right">
          <button class="btn btn-sm btn-default" type="button" onclick="$('.newDealerform').hide();">Cancel</button>
        </div>
      </div>



      <div class="row">
        <div class="col-md-12 text-right">
          <button class="btn btn-sm btn-default" type="button" onclick="$('.newDealerform').hide();">Cancel</button>
        </div>
      </div>
    </div>  --><!--newDshipForm-->

    <br><br><br>
    <div class="row">
      <div class="col-sm-12 text-center">
        <a href="accounts.php" class="btn btn-lg btn-default">Cancel</a>&nbsp;&nbsp;&nbsp;
        <a href="accounts.php" class="btn btn-lg btn-primary">Register Dealership</a>
      </div>
    </div>
  </div><!--new-dealer-form-->
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
 $(document).ready(function(){
  $('input[type="checkbox"]').click(function(){
    var rel = $(this).attr("data-rel");
    $("." + rel).toggle();
  });
});
</script>

<?php include("footer.php") ?>
<?php
$title = "Create New Group";
include('../head.php');
include('../header.php');
?>


<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <h4 class="page-title">Users > Accounts > Create New Group</h4>
      </div>
    </div>
  </div>
</div>


<div class="page-container">
  <div class="container">
    <div class="page-bg">

      <div class="new-dealer-form">
        <h4>Create New Group</h4>
        <br>

        <?php include('group_new_form.php') ?>

        <div class="new-dealer-form">
          <!-- <div class="row">
            <div class="col-sm-6">
              <div class="dropdown element">
                <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Select Dealership(s)
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li>
                    <a href="javascript:;">
                      <div class="checkbox">
                        <input type="checkbox" name="group2" id="checkbox-1">
                        <label for="checkbox-1"><span class="check">Pacific Honda</span></label>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="checkbox">
                        <input type="checkbox" name="group2" id="checkbox-1">
                        <label for="checkbox-1"><span class="check">Gosch Ford Temecula</span></label>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="checkbox">
                        <input type="checkbox" name="group2" id="checkbox-1">
                        <label for="checkbox-1"><span class="check">Ross Nissan</span></label>
                      </div>
                    </a>
                  </li>                                
                </ul>
              </div>
              <br>
              <span class="tag label label-secondary">
                <span>Gosch Nissan Temecula</span>
                <a><i class="fa fa-times"></i></a> 
              </span>
              <span class="tag label label-secondary">
                <span>Gosch Ford Temecula</span>
                <a><i class="fa fa-times"></i></a> 
              </span>
            </div>
            
          </div> -->
          <br>
          <br>
          <br>

          <div class="row">
            <div class="col-sm-12 text-center">
              <a href="users/accounts.php" class="btn btn-lg btn-default">Cancel</a>&nbsp;&nbsp;&nbsp;
              <a href="users/accounts.php" class="btn btn-lg btn-primary">Create Group</a>
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
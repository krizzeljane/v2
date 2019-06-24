<?php
$title = "My Account | Settings";
include('../head.php');
include('../nav.php');
include('staff_edit_modal.php');

?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">My Account</h4>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container userprofile">
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default sticky">
        <div class="panel-heading">
          <h5>Profile Information
            <div class="pull-right">
              <button class="btn btn-default btn-sm profile-edit" data-toggle="modal" data-target="#editStaff"><i class="fa fa-pencil-alt"></i></button>
            </div>
          </h5>
          
        </div>
        <div class="">
          <div class="photo-cont text-center">
            <div class="profile-photo">
              <a href="javascript:;"><img src="images/robin.jpg" class="img-responsive"></a>
            </div>
          </div>
          <div class="profile-row profile-name">
            <h4 class="text-center">Robin Arellano</h4>
            <p class="text-center">Senior Account Executive</p>
          </div>

          <div class="profile-row">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-4 control-label">Email Address</label>
                <div class="col-sm-8">
                  <p class="form-control-static">robin@carwave.com</p>
                </div>
              </div>
            </form>
          </div>

          <div class="profile-row">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-4 control-label">Password</label>
                <div class="col-sm-8">
                  <p class="form-control-static">•••••••••</p>
                </div>
              </div>
            </form>
          </div>

          <div class="profile-row">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-4 control-label">Contact Details</label>
                <div class="col-sm-8">
                  <p class="form-control-static"><span class="text-light">Mobile</span> 987-746-3452</p>
                  <p class="form-control-static"><span class="text-light">Office</span> 987-746-3452</p>
                </div>
              </div>
            </form>
          </div>

          
        </div>

      </div>
    </div><!--col-md-6-->
    
  </div><!--row-->

</div>
<br><br><br>


<?php include("../footer.php") ?>
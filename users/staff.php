<?php
$title = "Staff";
include('../head.php');
include('../header.php');
?>

<?php include("lock_staff_modal.php") ?>
<?php include("staff_edit_modal.php") ?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <h4 class="page-title">Users > Staff</h4>
      </div>
    </div>
  </div>
</div>

<div class="page-container">
  <div class="container">

    <div class="page-actions">
      <div class="row">
        <div class="col-md-6">
          <a href="users/staff_new.php" class="btn btn-yellow" type="button">
            Register New Staff <i class="fa fa-plus"></i>
          </a>
        </div>
        <div class="col-md-6">
          <nav aria-label="Page navigation" class="element right">
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#">20</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
              </li>
            </ul>
          </nav>
          <div class="element right">
            <div class="form-group has-feedback">
              <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
              <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Name, Email Account Executive">
              <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
              <span id="inputSuccess5Status" class="sr-only">(success)</span>
            </div>
          </div><!--element-right-->
        </div><!--col-->
      </div><!--row-->          
    </div><!--page-actions-->

    <div class="page-content">
      <div class="table-con-header">
        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th>First Name</th>                  
              <th>Last Name</th>
              <th>Job Title</th>
              <th>Email Address</th>
              <th>Contact Number</th>
              <th>User Roles</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
           <tr class="account-active">
            <td class="account-icon"><img data-toggle="tooltip" data-placement="top" title="User Locked" src="images/judy.jpg" class="table-icon">
              <i class="fa fa-lock"></i>
            </td>
            <td>Therese</td>   
            <td>Johan</td>
            <td>Account Executive</td>
            <td>t.johan@rossnissan.com</td>
            <td>890-656-8765</td>
            <td>Backoffice</td>
            <td>
              <div class="table-action-container">
                <a href="javascript:;" class="btn-link-default editStaff" data-toggle="modal" data-target="#editStaff"><i class="fa fa-pencil-alt"></i></a>
                <a href="javascript:;" class="btn-link-default lockDealer" data-toggle="modal" data-target="#lockStaff"><i class="fa fa-lock"></i></a>
                <a href="javascript:;" class="btn-link-default unlockDealer"><i class="fa fa-lock-open" onclick="$('.account-lock').removeClass('account-lock').addClass('account-active'); $('.unlockDealer').hide();$('.lockDealer').show();"></i></a>
                <a href="javascript:;" class="btn-link-default deleteDealer" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="images/judy.jpg" class="table-icon"></td>
            <td>Therese</td>   
            <td>Johan</td>
            <td>Account Executive</td>
            <td>t.johan@rossnissan.com</td>
            <td>890-656-8765</td>
            <td>Sales Manager</td>
            <td>
              <div class="table-action-container">
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-pencil-alt"></i></a>
                <a href="javascript:;" class="btn-link-default" data-toggle="tooltip" data-placement="top" title="Lock User"><i class="fa fa-lock"></i></a>
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="images/judy.jpg" class="table-icon"></td>
            <td>Therese</td>   
            <td>Johan</td>
            <td>Account Executive</td>
            <td>t.johan@rossnissan.com</td>
            <td>890-656-8765</td>
            <td>Account Executive</td>
            <td>
              <div class="table-action-container">
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-pencil-alt"></i></a>
                <a href="javascript:;" class="btn-link-default" data-toggle="tooltip" data-placement="top" title="Lock User"><i class="fa fa-lock"></i></a>
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img src="images/judy.jpg" class="table-icon"></td>
            <td>Therese</td>   
            <td>Johan</td>
            <td>Account Executive</td>
            <td>t.johan@rossnissan.com</td>
            <td>890-656-8765</td>
            <td>Superadmin</td>
            <td>
              <div class="table-action-container">
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-pencil-alt"></i></a>
                <a href="javascript:;" class="btn-link-default" data-toggle="tooltip" data-placement="top" title="Lock User"><i class="fa fa-lock"></i></a>
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


</div>
</div>





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
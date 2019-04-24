<?php
$title = "Accounts";
include('../head.php');
include('../header.php');
?>
<!--MODALS-->

<?php include("accounts_edit_dealer_modal.php") ?>
<?php include("accounts_delete_dealer_modal.php") ?>
<?php include("accounts_lock_dealer_modal.php") ?>
<?php include("accounts_edit_dealership_modal.php") ?>
<?php include("lock_staff_modal.php") ?>
<?php include("staff_edit_modal.php") ?>

<!--MODALS END-->

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <h4 class="page-title">Users > Accounts</h4>
      </div>
    </div>
  </div>
</div>

<div class="tab-container">
  <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
      <li role="presentation"><a href="#dealership" aria-controls="dealership" role="tab" data-toggle="tab">Dealerships</a></li>
      <li role="presentation"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab">Groups</a></li>
      <li role="presentation"><a href="#staff" aria-controls="staff" role="tab" data-toggle="tab">Staff</a></li>
    </ul>
  </div>
</div>

<div class="page-container">
  <div class="container">
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="users">

        <div class="page-actions">
          <div class="row">
            <div class="col-md-6">
              <div class="dropdown element">
                <button class="btn btn-yellow dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Add New User
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="users/newdealer.php">Add New User</a></li>
                  <li><a href="users/dmv_new.php">Add New DMV Clerk</a></li>
                  <li><a href="users/dmv_new.php">Add New Staff</a></li>
                </ul>
              </div>
              <div class="dropdown element">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  All Users
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">All Users</a></li>
                  <li><a href="#">Dealers</a></li>
                  <li><a href="#">DMV Clerks</a></li>
                </ul>
              </div>
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
                  <th>Nickname</th>
                  <th>Last Name</th>
                  <th>Email Address</th>
                  <th>Contact Number</th>
                  <th>Dealership</th>
                  <th>Account Executive</th>
                  <th>User Type</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="account-active">
                  <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                    <i class="fa fa-lock"></i>
                  </td>
                  <td>Therese</td>
                  <td>Terry</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan</td>
                  <td>Robin Arellano</td>
                  <td>Dealer</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default editDealer" data-toggle="modal" data-target="#editDealer"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default lockDealer" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default unlockDealer"><i class="fa fa-lock-open" onclick="$('.account-lock').removeClass('account-lock').addClass('account-active'); $('.unlockDealer').hide();$('.lockDealer').show();"></i></a>
                      <a href="javascript:;" class="btn-link-default deleteDealer" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="images/judy.jpg" class="table-icon"></td>
                  <td>Therese</td>
                  <td>Terry</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan</td>
                  <td>Robin Arellano</td>
                  <td>Dealer</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealer"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="images/judy.jpg" class="table-icon"></td>
                  <td>Therese</td>
                  <td>Terry</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan</td>
                  <td>Robin Arellano</td>
                  <td>Dealer</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealer"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td><img src="images/judy.jpg" class="table-icon"></td>
                  <td>Therese</td>
                  <td>Terry</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan</td>
                  <td>Robin Arellano</td>
                  <td>DMV Clerk</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealer"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="images/judy.jpg" class="table-icon"></td>
                  <td>Therese</td>
                  <td>Terry</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan</td>
                  <td>Robin Arellano</td>
                  <td>DMV Clerk</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealer"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


      </div><!--tab-pane-->



      <div role="tabpanel" class="tab-pane fade" id="dealership">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-6">
              <div class="dropdown element">
                <a href="users/newdealership.php" class="btn btn-yellow" type="button">
                  Register New Dealership <i class="fa fa-plus"></i>
                </a>
              </div>

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
                  <th>Dealership</th>
                  <th>LIC</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Contact Number</th>
                  <th>Dealers</th>
                  <th>DMV Clerk</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="images/pacifichonda.jpg" class="table-icon"></td>
                  <td>Pacific Honda</td>
                  <td>1573542</td>
                  <td>San Diego</td>
                  <td>CA</td>
                  <td>890-656-8765</td>
                  <td>Adam Harris</td>
                  <td>Yosemite Sam</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="images/pacifichonda.jpg" class="table-icon"></td>
                  <td>Pacific Honda</td>
                  <td>1573542</td>
                  <td>San Diego</td>
                  <td>CA</td>
                  <td>890-656-8765</td>
                  <td>Adam Harris</td>
                  <td>Yosemite Sam</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="images/pacifichonda.jpg" class="table-icon"></td>
                  <td>Pacific Honda</td>
                  <td>1573542</td>
                  <td>San Diego</td>
                  <td>CA</td>
                  <td>890-656-8765</td>
                  <td>Adam Harris</td>
                  <td>Yosemite Sam</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


      </div>




      <div role="tabpanel" class="tab-pane fade" id="groups">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-4">
              <div class="dropdown element">
                <a href="users/group_new.php" class="btn btn-yellow" type="button">
                  Create New Group <i class="fa fa-plus"></i>
                </a>
              </div>

            </div>
            <div class="col-md-8">
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
                  <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Group Name, Dealership">
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
                  <th width="300">Group Name</th>
                  <th>Dealerships</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Gosch Auto Group, Inc.</td>
                  <td>
                    Gosch Ford Temecula<br>
                    Gosch Nissan Temecula
                  </td>
                  
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Penske Auto Group, Inc.</td>
                  <td>
                    Penske of San Diego<br>
                    Penske of Los Angeles <br>
                    Penske of San Francisco
                  </td>
                  
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Vacaville Dealership Group, Inc.</td>
                  <td>
                    Mazda of Vacaville<br>
                    Nissan of Vacaville<br>
                    GMC of Vacaville<br>
                    Ford of Vacaville
                  </td>
                  
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>


      </div><!-- #groups -->






      <div role="tabpanel" class="tab-pane fade" id="staff">
        

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


      </div> <!-- #staff -->



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


<?php include("../footer.php") ?>
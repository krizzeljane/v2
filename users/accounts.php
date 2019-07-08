<?php
$title = "Accounts";
include('../head.php');
include('../nav.php');
?>
<!--MODALS-->

<?php include("accounts_edit_dealer_modal.php") ?>
<?php include("accounts_delete_dealer_modal.php") ?>
<?php include("accounts_lock_dealer_modal.php") ?>
<?php include("accounts_edit_dealership_modal.php") ?>
<?php include("lock_staff_modal.php") ?>
<?php include("staff_edit_modal.php") ?>
<?php include("editDMV-modal.php") ?>
<?php include("editGroup-modal.php") ?>
<?php include("editDealer-modal.php") ?>

<?php include("add_user.php") ?>
<?php include("add_dmv.php") ?>
<?php include("add_dealership.php") ?>
<?php include("add_group.php") ?>
<?php include("add_staff.php") ?>


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
      <li role="presentation" class="active"><a href="#dealership" aria-controls="dealership" role="tab" data-toggle="tab">Dealerships</a></li>
      <li role="presentation"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Users</a></li>
      <li role="presentation"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab">Groups</a></li>
      <li role="presentation"><a href="#staff" aria-controls="staff" role="tab" data-toggle="tab">Staff</a></li>
      <li role="presentation"><a href="#dmv_2" aria-controls="dmv_2" role="tab" data-toggle="tab">DMV Clerks</a></li>
    </ul>
  </div>
</div>

<div class="page-container">
  <div class="container">
    <!-- Tab panes -->
    <div class="tab-content">


      <div role="tabpanel" class="tab-pane fade in active" id="dealership">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-12">
              <div class="dropdown element">
                <a href="#"  data-toggle="modal" data-target="#add-dealership" class="btn btn-yellow" type="button">
                  Add New Dealership <i class="fa fa-plus"></i>
                </a>
              </div>
              <div class="form-group element has-feedback">
                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Name, Email, Account Executive">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess5Status" class="sr-only">(success)</span>
              </div>
            </div>
            <!-- <div class="col-md-6">
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
              </div>
            </div> --><!--col-->
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
                  <th>Users</th>
                  <th>Account Executive</th>
                  <!-- <th>DMV Clerk</th> -->
                  <th width="110"></th>
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
                  <td>Robin Arellano<br> Judy Guzman</td>
                  <!-- <td>Yosemite Sam</td> -->
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
                  <td>Robin Arellano<br> Judy Guzman</td>
                  <!-- <td>Yosemite Sam</td> -->
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
                  <td>Robin Arellano<br> Judy Guzman</td>
                  <!-- <td>Yosemite Sam</td> -->
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealership"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">250 of 1,000</td>
                  <td colspan="8">
                    <nav class="table-footer-page">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">20</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>



      <div role="tabpanel" class="tab-pane fade" id="users">

        <div class="page-actions">
          <div class="row">

            <div class="col-md-12">
              <div class="element">
                <button type="button" class="btn btn-yellow" data-toggle="modal" data-target="#add-user">Add New User <i class="fa fa-plus"></i></button>
              </div>
              <!-- <div class="dropdown element">
                <button class="btn btn-yellow dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Add New User
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#"  data-toggle="modal" data-target="#add-user">Add New User</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#add-dmv">Add New DMV Clerk</a></li>
                </ul>
              </div> -->
              <div class="form-group element has-feedback">
                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Name, Email, Account Executive">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess5Status" class="sr-only">(success)</span>
              </div>
            </div>
            <!-- <div class="col-md-6">
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
              </div>
            </div> -->
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
                  <th width="110"></th>
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
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default editDealer" data-toggle="modal" data-target="#editDealer-profile"><i class="fa fa-pencil-alt"></i></a>
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
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealer-profile"><i class="fa fa-pencil-alt"></i></a>
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
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDealer-profile"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">250 of 1,000</td>
                  <td colspan="8">
                    <nav class="table-footer-page">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">20</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>


      </div><!--tab-pane-->




      <div role="tabpanel" class="tab-pane fade" id="groups">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-12">
              <div class="dropdown element">
                <a href="#"  data-toggle="modal" data-target="#add-group" class="btn btn-yellow" type="button">
                  Add New Group <i class="fa fa-plus"></i>
                </a>
              </div>
              <div class="form-group element has-feedback">
                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Name, Email, Account Executive">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess5Status" class="sr-only">(success)</span>
              </div>
            </div>
            <!-- <div class="col-md-4">
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
              </div>
            </div> --><!--col-->
          </div><!--row-->          
        </div><!--page-actions-->


        <div class="page-content">
          <div class="table-con-header">
            <table class="table">
              <thead>
                <tr>
                  <th width="300">Group Name</th>
                  <th>Dealerships</th>
                  <th width="110"></th>
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
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editGroup-modal"><i class="fa fa-pencil-alt"></i></a>
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
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editGroup-modal"><i class="fa fa-pencil-alt"></i></a>
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
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editGroup-modal"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="1">250 of 1,000</td>
                  <td colspan="2">
                    <nav class="table-footer-page">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">20</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>


      </div><!-- #groups -->






      <div role="tabpanel" class="tab-pane fade" id="staff">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-12">
              <a href="#" data-toggle="modal" data-target="#add-staff" class="btn btn-yellow" type="button">
                Add New Staff <i class="fa fa-plus"></i>
              </a>
              <div class="form-group element has-feedback">
                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Name, Email, Account Executive">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess5Status" class="sr-only">(success)</span>
              </div>
            </div>
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
                  <th width="110"></th>
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
            <tfoot>
              <tr>
                <td colspan="2">250 of 1,000</td>
                <td colspan="8">
                  <nav class="table-footer-page">
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                        </a>
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">...</a></li>
                      <li><a href="#">20</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div> <!-- #staff -->


      <div role="tabpanel" class="tab-pane fade" id="dmv_2">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-12">
              <div class="element">
                <button type="button" class="btn btn-yellow" data-toggle="modal" data-target="#add-dmv">Add New DMV Clerk <i class="fa fa-plus"></i></button>
              </div>
              <div class="form-group element has-feedback">
                <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Name, Email, Account Executive">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                <span id="inputSuccess5Status" class="sr-only">(success)</span>
              </div>
            </div>
            
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
                  <th>Email Address</th>
                  <th>Contact Number</th>
                  <th>Dealerships</th>
                  <th width="110"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="images/judy.jpg" class="table-icon"></td>
                  <td>Therese</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan<br>
                    Ross Mazda<br>
                  Ross Kia</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDMV-profile"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><img src="images/judy.jpg" class="table-icon"></td>
                  <td>Therese</td>
                  <td>Johan</td>
                  <td>t.johan@rossnissan.com</td>
                  <td>890-656-8765</td>
                  <td>Ross Nissan<br>
                  Ross Mazda</td>
                  <td>
                    <div class="table-action-container">
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#editDMV-profile"><i class="fa fa-pencil-alt"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#lockDealer"><i class="fa fa-lock"></i></a>
                      <a href="javascript:;" class="btn-link-default" data-toggle="modal" data-target="#deleteDealer"><i class="fa fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">250 of 1,000</td>
                  <td colspan="8">
                    <nav class="table-footer-page">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">20</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div><!--tab-pane-->

      <!-- #dmv -->
      
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


<?php include("../footer.php") ?>
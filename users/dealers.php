<?php
$title = "Dealers";
include('../head.php');
include('../header-user.php');
?>
<!--MODALS-->

<?php include("accounts_edit_dealer_modal.php") ?>
<?php include("accounts_delete_dealer_modal.php") ?>
<?php include("accounts_lock_dealer_modal.php") ?>
<?php include("accounts_edit_dealership_modal.php") ?>

<!--MODALS END-->

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <h4 class="page-title">Dealers</h4>
      </div>
    </div>
  </div>
</div>

<div class="page-container">
  <div class="container">
    <div class="page-actions">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="dropdown element">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              All Users
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="#">All Users</a></li>
              <li><a href="#">Dealers</a></li>
              <li><a href="#">DMV Clerks</a></li>
            </ul>
          </div> -->
          <div class="form-group has-feedback pull-left" style="width: 30%;">
            <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
            <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search Make, Name or Dealership">
            <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess5Status" class="sr-only">(success)</span>
          </div> 








           &nbsp;
          <!-- <div class="btn-group pull-right pull-left">
            <button type="button" class="btn btn-default dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              All Makes &nbsp;&nbsp;&nbsp;<span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Action</a></li>
              <li><a href="javascript:;">Another action</a></li>
              <li><a href="javascript:;">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="javascript:;">Separated link</a></li>
            </ul>
          </div> -->

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

          </div>
        </div> --><!--col-->
      </div><!--row-->          
    </div><!--page-actions-->


    <div class="page-content">
      <div class="table-con-header">
        <table class="table hidden-xs">
          <thead>
            <tr>
              <th width="30"></th>
              <th>Name</th>
              <th>Cell/Text Number</th>
              <th>Email Address</th>
              <th>Dealership(s)</th>
              <th>Rating</th>
            </tr>
          </thead>
          <tbody>
            <tr class="account-active" onclick="window.location.href='users/userprofile.php'">
              <td class="account-icon"><img src="images/markc.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Carlos Tabares</td>
              <td>890-656-8765</td>
              <td>c.tabares@penskegroup.com</td>
              <td>Penske Cadillac Private<br>Penske Buick GMC of Cerritos<br>Penske Cadillac Buick GMC<br>Penske Ford<br>Penske of Chula Vista<br>Penske of Ontario<br>Penske Hyundai</td>
              <td><i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>
            <tr class="account-active">
              <td class="account-icon"><img src="images/ryan.png" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Ryan Ry Farina</td>
              <td>890-656-8765</td>
              <td>r.Farina@vacavillegroup.com</td>
              <td>Nissan of Vacaville<br>Mazda of Vacaville<br>Dodge Chrysler Jeep RAM of Vacaville<br>Yuba City Nissan<br>Nissan of Sacramento</td>
              <td><i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>
            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan</td>
              <td>890-656-8765</td>
              <td>t.johan@rossnissan.com</td>
              <td>Ross Nissan<br>Ross Audi<br>Ross Mazda</td>
              <td><i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>

            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan</td>
              <td>890-656-8765</td>
              <td>t.johan@rossnissan.com</td>
              <td>Ross Nissan<br>Ross Audi<br>Ross Mazda</td>
              <td><i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>
            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan</td>
              <td>890-656-8765</td>
              <td>t.johan@rossnissan.com</td>
              <td>Ross Nissan<br>Ross Audi<br>Ross Mazda</td>
              <td><p><i class="fas fa-star text-yellow"></i> 4.5</p></td>
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


        <table class="table visible-xs">
          <thead>
            <tr>
              <th width="30"></th>
              <th>Dealers</th>
            </tr>
          </thead>
          <tbody>
            <tr class="account-active" onclick="window.location.href='users/userprofile.php'">
              <td class="account-icon"><img src="images/markc.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Carlos Tabares<br>
              890-656-8765<br>
              c.tabares@penskegroup.com<br>
              Penske Cadillac Private<br>
              Penske Buick GMC of Cerritos<br>
              Penske Cadillac Buick GMC<br>
              Penske Ford<br>
              Penske of Chula Vista<br>
              Penske of Ontario<br>
              Penske Hyundai<br>
              <i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>
            <tr class="account-active">
              <td class="account-icon"><img src="images/ryan.png" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Ryan Ry Farina<br>
              890-656-8765<br>
              r.Farina@vacavillegroup.com<br>
              Nissan of Vacaville<br>
              Mazda of Vacaville<br>
              Dodge Chrysler Jeep RAM of Vacaville<br>
              Yuba City Nissan<br>
              Nissan of Sacramento<br>
              <i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>

            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan<br>
                890-656-8765<br>
                t.johan@rossnissan.com<br>
                Ross Nissan<br>
                Ross Audi<br>
                Ross Mazda<br>
                <i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>

            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan<br>
                890-656-8765<br>
                t.johan@rossnissan.com<br>
                Ross Nissan<br>
                Ross Audi<br>
                Ross Mazda<br>
                <i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>

            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan<br>
                890-656-8765<br>
                t.johan@rossnissan.com<br>
                Ross Nissan<br>
                Ross Audi<br>
                Ross Mazda<br>
                <i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>

            <tr class="account-active">
              <td class="account-icon"><img src="images/judy.jpg" class="table-icon">
                <i class="fa fa-lock"></i>
              </td>
              <td>Therese Terry Johan<br>
                890-656-8765<br>
                t.johan@rossnissan.com<br>
                Ross Nissan<br>
                Ross Audi<br>
                Ross Mazda<br>
                <i class="fas fa-star text-yellow"></i> 4.5</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td class="text-center" colspan="2">250 of 1,000</td>
            </tr>
            <tr>
              <td class="text-center" colspan="2">
                <nav class="table-footer-page text-center">
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
<?php include('footer.php')?>

<!--?php include("../footer.php") ?-->
<?php
$title = "Cars I Bought";
include('../head.php');
include('../header-user.php');
include('arb-modal.php');
include('direct-modal.php');
include('invoice-franchise-seller.php');
include('invoice-franchise-buyer.php');
include('invoice-franchise-buyer-tdf.php');
include('invoice-franchise-buyer-norwalk.php');
include('invoice-ti-buyer.php');
include('invoice-ti-buyer-ach.php');
include('transport-details.php');
?>

<!--MODALS-->

<!--MODALS END-->

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-xs-6">
        <h4 class="page-title">Cars I Bought</h4>
      </div>
    </div>
  </div>
</div>

<div class="tab-container">
  <div class="container">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#cib-f" aria-controls="cib-f" role="tab" data-toggle="tab">Frontlines (20)</a></li>
      <li role="presentation"><a href="#cib-t" aria-controls="cib-t" role="tab" data-toggle="tab">Trade-ins (10)</a></li>
      <li role="presentation"><a href="#cib-d" aria-controls="cib-d" role="tab" data-toggle="tab">Deleted (5)</a></li>
    </ul>
  </div>
</div>



<div class="page-container">
  <div class="container">

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="cib-f">
        
        <div class="page-actions">
          <div class="row">
            <div class="col-md-6">
              
              <div class="dropdown element">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  All my Dealerships &nbsp;
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="javascript:;">All my Dealerships</a></li>
                  <li><a href="javascript:;">Mazda of Vacaville</a></li>
                  <li><a href="javascript:;">Nissan of Vacaville</a></li>
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
              <div class="search element right">
                <div class="form-group has-feedback">
                  <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                  <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search VIN, Stock#, Make, Model">
                  <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                  <span id="inputSuccess5Status" class="sr-only">(success)</span>
                </div>
              </div><!--element-right-->
            </div><!--col-->
          </div><!--row-->          
        </div><!--page-actions-->

        <div class="con-emp text-center">
          <p class="text-muted"><em>No cars bought yet</em>
            <br>
            <button class="btn btn-yellow">Browse cars</button>
          </p>
        </div>
      </div><!-- #cib-f -->


      <div role="tabpanel" class="tab-pane fade" id="cib-t">

        <?php include("cib-t.php") ?>
      </div><!-- #cib-t -->
      <div role="tabpanel" class="tab-pane fade" id="cib-d">
        <div class="page-actions">
          <div class="row">
            <div class="col-md-6">
              
              <div class="dropdown element">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  All my Dealerships &nbsp;
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="javascript:;">All my Dealerships</a></li>
                  <li><a href="javascript:;">Mazda of Vacaville</a></li>
                  <li><a href="javascript:;">Nissan of Vacaville</a></li>
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
              <div class="search element right">
                <div class="form-group has-feedback">
                  <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                  <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="Search VIN, Stock#, Make, Model">
                  <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                  <span id="inputSuccess5Status" class="sr-only">(success)</span>
                </div>
              </div><!--element-right-->
            </div><!--col-->
          </div><!--row-->          
        </div><!--page-actions-->

        <div class="con-emp text-center">
          <p class="text-muted"><em>No cars deleted</em></p>
        </div>

      </div><!-- #cib-d -->
    </div>

  </div>
</div>


<!--?php include("../footer.php") ?-->
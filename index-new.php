<?php
$title = "CARWAVE - Your Trusted Car Dealership Network";
include('head.php');
include('nav-user.php');
?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="input-group main-search">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Search</button>
          </span>
        </div>
        
      </div>
    </div>
  </div>
</div>


<div class="page-container">
  <div class="container">
    <br>
    <div class="row">
      <div class="col-lg-12">
        <div class="alert alert-info home-news" class="">
          <h4 onclick="$('.home-news > p').slideToggle();" style="cursor: pointer;">What's New? <a type="button" class="pull-right"> <i class="fa fa-angle-down"></i></a></h4>
          <p style="display: block;">lorem ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <h2>20</h2>
            <p>Sold Vehicles</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <h2>10</h2>
            <p>Unsold Vehicles</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <h2>10</h2>
            <p>Bought Vehicles</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <h2>10</h2>
            <p>Unwound Vehicles</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default home-panel">
          <div class="panel-body">
            Blogs
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">

        <div class="panel panel-default home-panel">
          <div class="panel-body">
            <h4>Outstanding Payments <span class="pull-right text-success">$20,000</span></h4>
            <br>
            <p class="text-danger"> <strong>3 vehicles in NSF </strong></p>
            <p><small>Please send your payments immediately to prevent <a href="javascript:;" class="text-normal"><strong>account lock <i class="fa fa-question-circle"></i></strong></a></small></p>
            <br>
            <div class="text-right">
              <button class="btn btn-xs btn-default">Go to Cars I Sold <i class="fa fa-angle-right"></i></button>
            </div>
          </div>
        </div>

        <div class="panel panel-default home-panel">
          <div class="panel-body">
            <h4>Outstanding Titles <span class="pull-right text-danger">$10,000</span></h4>
            <br>
            <p class="text-danger"></i> <strong>3 titles over 30 days </strong></p>
            <p class="text-danger"> <strong>1 title over 45 days </strong></p>
            <p><small>Please send us the titles immediately to receive your <strong>$10,000</strong></small></p>
            <br>
            <div class="text-right">
              <button class="btn btn-xs btn-default">Go to Cars I Sold <i class="fa fa-angle-right"></i></button>
            </div>
          </div>
        </div>

        <!-- <div class="panel panel-default home-panel">
          <div class="panel-body">
            <h4>Notifications <span class="badge">25</span></h4>
            <br>
            <div class="alert alert-danger">
              <div class="row">
                <div class="col-xs-2 no-padding-right">
                  <div class="img-cont">
                    <img src="images/car1.jpg" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-10">
                  <p class="text-xs">
                    2014 Honda Civic Sedan <br>
                    Pending Payment <strong>($17,560)</strong>
                  </p>
                  <div class="text-right">
                    <button class="btn btn-xs btn-default">
                      Go to Cars I Bought <i class="fa fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="alert alert-danger">
              <div class="row">
                <div class="col-xs-2 no-padding-right">
                  <div class="img-cont">
                    <img src="images/car1.jpg" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-10">
                  <p class="text-xs">
                    2014 Toyota Sequoia <br>
                    Send title for this vehicle.
                  </p>
                  <div class="text-right">
                    <button class="btn btn-xs btn-default">
                      Go to Cars I Bought <i class="fa fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="alert alert-warning">
              <div class="row">
                <div class="col-xs-2 no-padding-right">
                  <div class="img-cont">
                    <img src="images/car1.jpg" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-10">
                  <p class="text-xs">
                    2014 Toyota Sequoia <br>
                    This car has no photos. Please review vehicle details.
                  </p>
                  <div class="text-right">
                    <button class="btn btn-xs btn-default">
                      Go to My Cars for Sale <i class="fa fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div> -->

        <div class="panel panel-default home-panel">
          <div class="panel-heading">
            <h4>Articles</h4>
          </div>
          <div class="panel-body">
            <h5>Vehicle Pricing and Disclosure Reminders</h5>
            <p>Thanks for being a part of our trusted dealer network.  Here are a few reminders of important policies that keep this marketplace a great experience for everyone.</p>
            <hr>
            <h5>Vehicle Pricing and Disclosure Reminders</h5>
            <p>Thanks for being a part of our trusted dealer network.  Here are a few reminders of important policies that keep this marketplace a great experience for everyone.</p>
            <hr>
            <h5>Vehicle Pricing and Disclosure Reminders</h5>
            <p>Thanks for being a part of our trusted dealer network.  Here are a few reminders of important policies that keep this marketplace a great experience for everyone.</p>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        
        <div class="panel panel-default home-panel">
          <div class="panel-body">
            <h4>This Week's Auctions</h4>
            <br>
            <div class="row">
              <div class="col-xs-12">
                <div class="home-auc-list">

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <h5>Frontline Auction (1,567 Vehicles)</h5>
                      </div>
                      <div class="col-sm-6 text-right">
                        <p class="text-success"><i class="fa fa-circle "></i> Auction in progress &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-xs ">Go to Auction <i class="fa fa-angle-right"></i></button></p>
                      </div>
                    </div>
                  </a>

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <h5>San Francisco Auction (237 Vehicles)</h5>
                      </div>
                      <div class="col-sm-6 text-right">
                        <p>Aug 15, 3:00PM-5:00PM &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-xs ">Go to Auction <i class="fa fa-angle-right"></i></button></p>
                      </div>
                    </div>
                  </a>

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <h5>Sacramento Auction (567 Vehicles)</h5>
                      </div>
                      <div class="col-sm-6 text-right">
                        <p>Aug 15, 3:00PM-5:00PM &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-xs ">Go to Auction <i class="fa fa-angle-right"></i></button></p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            </div><!-- row -->
            <hr>

            <h4>Upcoming Auctions</h4>
            <br>
            <div class="row">
              <div class="col-xs-12">
                <div class="home-auc-list">

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <h5>Los Angeles Auction</h5>
                      </div>
                      <div class="col-sm-8 text-right">
                        <!-- <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Notify Me</span></label>
                        </div> -->
                        <p>Opens Aug 14, 10:00AM &nbsp;&nbsp;&nbsp;&nbsp;</p>
                      </div>
                    </div>
                  </a>

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-4">
                        <h5>San Diego Auction</h5>
                      </div>
                      <div class="col-sm-8 text-right">
                        <!-- <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-2">
                          <label for="checkbox-2"><span class="check">Notify Me</span></label>
                        </div> -->
                        <p>Opens Aug 14, 10:00AM &nbsp;&nbsp;&nbsp;&nbsp;</p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            </div><!-- row -->
            <hr>

            <h4>Previous Auction Results</h4>
            <br>
            <div class="row">
              <div class="col-xs-12">
                <div class="home-auc-list">

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <h5>Frontline Auction <span class="text-light">(1,300 Vehicles Sold)</span></h5>
                      </div>
                      <div class="col-sm-6 text-right">
                        <p>Aug 10, 3:00PM-5:00PM &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-xs ">View Results <i class="fa fa-angle-right"></i></button></p>
                      </div>
                    </div>
                  </a>

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <h5>Sacramento Auction <span class="text-light">(567 Vehicles Sold)</span></h5>
                      </div>
                      <div class="col-sm-6 text-right">
                        <p>Aug 11, 3:00PM-5:00PM &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-xs ">View Results <i class="fa fa-angle-right"></i></button></p>
                      </div>
                    </div>
                  </a>

                  <a href="javascript:;" class="home-auc-item">
                    <div class="row">
                      <div class="col-sm-6">
                        <h5> Auction <span class="text-light">(567 Vehicles Sold)</span></h5>
                      </div>
                      <div class="col-sm-6 text-right">
                        <p>Aug 13, 3:00PM-5:00PM &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-xs ">View Results <i class="fa fa-angle-right"></i></button></p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            </div><!-- row -->
          </div>
          

        </div><!-- home-panel -->
      </div><!-- col-8 -->
    </div>
  </div>
</div>



<?php include("footer.php") ?>
<?php
$title = "My Account | Settings";
include('../head.php');
include('../header-user.php');
include('editDealer-modal.php');
include('editDealership-modal.php');
include('editDMV-modal.php');
include('add_dmv.php');
include('allcomments-modal.php');
include('delete-dmv.php');

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
              <button class="btn btn-default btn-sm profile-edit" data-toggle="modal" data-target="#editDealer-profile"><i class="fa fa-pencil-alt"></i></button>
            </div>
          </h5>
          
        </div>
        <div class="">
          <div class="photo-cont text-center">
            <div class="profile-photo">
              <a href="javascript:;"><img src="images/ryan.png" class="img-responsive"></a>
            </div>
          </div>
          <div class="profile-row profile-name">
            <h4 class="text-center">Ryan "Ry" Farina</h4>
            <p class="text-center">Used Car Manager</p>
          </div>

          <div class="profile-row">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-4 control-label">Email Address</label>
                <div class="col-sm-8">
                  <p class="form-control-static">ryan@vacaville.com</p>
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

          <div class="profile-row">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-4 control-label">AA Number</label>
                <div class="col-sm-8">
                  <p class="form-control-static">983645648526</p>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div><!--col-md-6-->
    <div class="col-md-7">
      <div class="panel panel-default">
        <div>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Reviews as a Seller</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews as a Buyer</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="star-revs profile-row">
                <h1 class="text-center text-yellow">4.1</h1>
                <h3 class="text-center text-yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-alt"></i></h3><br>
                <p class="text-center text-light">Total Number of Ratings: 68</p>
                <br>
                <div class="row star-revs-crit">
                  <div class="col-xs-6 text-right">
                    <p>Vehicle as described</p>
                    <p>Accurate book</p>
                    <p>Resolved issues fairly</p>
                    <p>Timely vehicle delivery</p>
                    <p>Prompt title delivery</p>
                  </div>
                  <div class="col-xs-6">
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                  </div>
                </div>
              </div>

              <div class="profile-reviews">
                <div class="profile-row-header profile-row">
                  <div class="thumb-md thumb">
                    <img src="images/markc.jpg" class="img-responsive">
                  </div>
                  <p class="review-content"><strong>Adam Harris</strong><br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mvulputate eu pharetra nec, mvulputate eu pharetra nec, mvulputate eu pharetra...
                  <!-- <button type="button" class="btn-link"> Read more...</button> -->
                  </p>
                </div>

                <div class="profile-row-header profile-row">
                  <div class="thumb-md thumb">
                    <img src="images/markc.jpg" class="img-responsive">
                  </div>
                  <p class="review-content"><strong>Adam Harris</strong><br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit.</p>
                </div>

                <div class="profile-row-header profile-row">
                  <div class="thumb-md thumb">
                    <img src="images/markc.jpg" class="img-responsive">
                  </div>
                  <p class="review-content"><strong>Adam Harris</strong><br>
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mvulputate eu pharetra nec, mvulputate eu</p>
                </div>

                <div class="profile-row-header profile-row text-right">
                  <nav aria-label="Page navigation" class="element">
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                        </a>
                      </li>
                      <li class="hidden-sm hidden-xs"><a href="#">1</a></li>
                      <li class="hidden-sm hidden-xs"><a href="#">2</a></li>
                      <li class="hidden-sm hidden-xs"><a href="#">3</a></li>
                      <li class="hidden-sm hidden-xs"><a href="#">...</a></li>
                      <li class="hidden-sm hidden-xs"><a href="#">20</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- <div class="profile-row-header ">
                  <div class="text-right">
                    <button class="btn btn-default" data-toggle="modal" data-target="#all-comments">View All Reviews (12)</button>
                  </div>
                </div> -->
              </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
              <div class="star-revs profile-row">
                <h1 class="text-center text-yellow">4.7</h1>
                <h3 class="text-center text-yellow"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h3><br>
                <p class="text-center text-light">Total Number of Ratings: 23</p>
                <br>
                <div class="row star-revs-crit">
                  <div class="col-xs-6 text-right">
                    <p>Resolved issues promptly</p>
                    <p>Resolved issues fairly</p>
                    <p>Prompt payment</p>
                  </div>
                  <div class="col-xs-6">
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                    <p class="text-yellow">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </p>
                  </div>
                </div>              
              </div>

              <div class="profile-row">
                <br>
                <p class="text-center"><em>No reviews yet.</em></p>
                <br>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5>Dealership(s)</h5>
            </div>

            <div class="panel-body no-padding-top no-padding-bottom">
              <div class="panel panel-default">
                <div class="profile-row-header profile-row">
                  <div class="thumb-md thumb">
                    <img src="images/mazdavacaville.png" class="img-responsive">
                  </div>
                  <h5>Mazda of Vacaville</h5>
                  <div class="pull-right">
                    <button class="btn btn-default btn-sm profile-edit" data-toggle="modal" data-target="#editDealership-profile"><i class="fa fa-pencil-alt"></i></button>
                  </div>
                  <br>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dealership Address</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">580 Orange Drive <br>Vacaville, CA 95687</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Contact Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">951-658-3411</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Fax Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">951-658-3411</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dealership License Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">#13143</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Website</label>
                      <div class="col-sm-8">
                        <p class="form-control-static"><a href="javascript:;">http://www.MazdaVacaville.com</a></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="panel-body no-padding-top no-padding-bottom">
              <div class="panel panel-default">
                <div class="profile-row-header profile-row">
                  <div class="thumb-md thumb">
                    <img src="images/mazdavacaville.png" class="img-responsive">
                  </div>
                  <h5>Nissan of Vacaville</h5>
                  <div class="pull-right">
                    <button class="btn btn-default btn-sm profile-edit"><i class="fa fa-pencil-alt"></i></button>
                  </div>
                  <br>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dealership Address</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">580 Orange Drive <br>Vacaville, CA 95687</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Contact Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">951-658-3411</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Fax Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">951-658-3411</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Dealership License Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">#13143</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Webiste</label>
                      <div class="col-sm-8">
                        <p class="form-control-static"><a href="javascript:;">http://www.MazdaVacaville.com</a></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5>Your DMV Clerk(s) <button class="btn btn-sm btn-default pull-right" data-toggle="modal" data-target="#add-dmv" style="margin-top: -5px;">Add DMV Clerk <i class="fa fa-plus"></i></button></h5>
            </div>
            <div class="panel-body no-padding-top no-padding-bottom">
              <div class="panel panel-default">
                <div class="profile-row-header profile-row">
                  <div class="thumb-md thumb">
                    <img src="images/judy.jpg" class="img-responsive">
                  </div>
                  <h5>Sarah Fowler</h5>

                  <div class="pull-right">
                    <a href="javascript:;" class="btn btn-default btn-sm profile-edit" data-toggle="modal" data-target="#editDMV-profile"><i class="fa fa-pencil-alt"></i></a>
                    <button data-toggle="modal" data-target="#delete-dmv" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  </div>
                  <br>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Email Address</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">sarahfowler@gmail.com</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Mobile Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">951-658-3411</p>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="profile-row">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-4 control-label">Office Number</label>
                      <div class="col-sm-8">
                        <p class="form-control-static">951-658-3411</p>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5>Notification Settings</h5>
              <br>
              <form class="form-horizontal notif-form">
                <p>Receive notifications for:</p>
                <br>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">When I purchase/sell a vehicle </label>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="email1" checked="checked">
                      <label for="email1"><span class="check">Email</span></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="text1" checked="checked">
                      <label for="text1"><span class="check">Text</span></label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">All Dealer Direct offer notifications</label>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="email2" checked="checked">
                      <label for="email2"><span class="check">Email</span></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="text2" checked="checked">
                      <label for="text2"><span class="check">Text</span></label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Adjustments and Arbitrations</label>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="email3" checked="checked">
                      <label for="email3"><span class="check">Email</span></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="text3" checked="checked">
                      <label for="text3"><span class="check">Text</span></label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Saved Searches</label>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="email4" checked="checked">
                      <label for="email4"><span class="check">Email</span></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="text4" checked="checked">
                      <label for="text4"><span class="check">Text</span></label>
                    </div>
                  </div>
                </div>


                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-6 control-label">Upcoming Auctions</label>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Email</span></label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Text</span></label>
                    </div>
                  </div>
                </div> -->

              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!--col-md-6-->
  </div><!--row-->

</div>
<br><br><br>


<?php include("../footer.php") ?>
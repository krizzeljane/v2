<div class="row">
  <div class="col-lg-12">

    <form class="new-form">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group has-error has-feedback">
            <label for="firstname">Profile Photo</label>
            <input type="file" id="formly_1_file_file_0" class="ng-pristine ng-valid ng-touched" placeholder="">
            <!-- <p class="text-alert text-danger text-xs">Please add profile photo.</p> -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="form-group has-error has-feedback">
            <label for="firstname">Dealership Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter Dealership Name">
            <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
            <p class="text-alert text-danger text-xs">Please enter dealership name</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="nickname">Dealership LIC Number</label>
            <input type="text" class="form-control" id="nickname" placeholder="Enter Dealership LIC Number">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="email">Doing Business As (Optional)</label>
            <input type="text" class="form-control" id="email" placeholder="Doing Business As">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="email">&nbsp;</label>
            <div class="checkbox">
              <input type="checkbox" checked="" name="group2" id="checkbox-1">
              <label for="checkbox-1"><span class="check">Hot Seller</span></label>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-6">
          <div class="form-group">
            <label for="email">Dealership Group</label>
            <select class="form-control">
              <option selected="selected">Select Dealership Group</option>
              <option>Los Angeles Group</option>
              <option>San Diego Group</option>
              <option>San Francisco Group</option>
              <option>Sacramento Auto Group</option>
            </select>
            <div class="dropdown element">
              <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Select Dealership Group
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li class="opt-group"><a href="javascript:;">Select Payment Method</a></li>
                <li>
                  <a href="javascript:;">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Company Check</span></label>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">The Dealers' Forum Guaranteed</span></label>
                    </div>
                  </a>
                </li>
                <li >
                  <a href="javascript:;">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Norwalk</span></label>
                    </div>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div> -->
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="panel-title">
                  Dealership Address
                </h5>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group has-error has-feedback">
                        <label for="firstname">Street Address</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enter Street Address">
                        <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
                        <p class="text-alert text-danger text-xs">Please enter street address</p>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nickname">City</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter City">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nickname">State</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter State">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nickname">Zip Code</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter Zip Code">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nickname">Contact Number</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter Contact Number">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nickname">Extension Number (Optional)</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter Extension Number">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nickname">Fax Number (Optional)</label>
                        <input type="text" class="form-control" id="nickname" placeholder="Enter Fax Number">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading collapsed " role="tab" id="headingTwo" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                <div class="row">
                  <div class="col-sm-8">
                   <h5 class="panel-title">Shipping Address <a type="button" class="btn-link-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-question-circle"></i></a></h5>
                 </div>
                 <div class="col-sm-4">
                  <div class="checkbox">
                    <input type="checkbox" checked="" name="group2" id="checkbox-1">
                    <label for="checkbox-1"><span class="check">Same as Dealership Address</span></label>
                  </div>
                </div>
              </div>


            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group has-error has-feedback">
                      <label for="firstname">Street Address</label>
                      <input type="text" class="form-control" id="firstname" placeholder="Enter Street Address">
                      <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
                      <p class="text-alert text-danger text-xs">Please enter street address</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nickname">City</label>
                      <input type="text" class="form-control" id="nickname" placeholder="Enter City">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nickname">State</label>
                      <input type="text" class="form-control" id="nickname" placeholder="Enter State">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nickname">Zip Code</label>
                      <input type="text" class="form-control" id="nickname" placeholder="Enter Zip Code">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nickname">Contact Number</label>
                      <input type="text" class="form-control" id="nickname" placeholder="Enter Contact Number">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nickname">Extension Number (Optional)</label>
                      <input type="text" class="form-control" id="nickname" placeholder="Enter Extension Number">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nickname">Fax Number (Optional)</label>
                      <input type="text" class="form-control" id="nickname" placeholder="Enter Fax Number">
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading collapsed" role="tab" id="headingThree" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <div class="row">
                <div class="col-sm-8">
                 <h5 class="panel-title">Title Address <a type="button" class="btn-link-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-question-circle"></i></a></h5>
               </div>
               <div class="col-sm-4">
                <div class="checkbox">
                  <input type="checkbox" checked="" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Same as Dealership Address</span></label>
                </div>
              </div>
            </div>
          </div>
          <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group has-error has-feedback">
                    <label for="firstname">Street Address</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter Street Address">
                    <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
                    <p class="text-alert text-danger text-xs">Please enter street address</p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nickname">City</label>
                    <input type="text" class="form-control" id="nickname" placeholder="Enter City">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nickname">State</label>
                    <input type="text" class="form-control" id="nickname" placeholder="Enter State">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nickname">Zip Code</label>
                    <input type="text" class="form-control" id="nickname" placeholder="Enter Zip Code">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nickname">Contact Number</label>
                    <input type="text" class="form-control" id="nickname" placeholder="Enter Contact Number">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nickname">Extension Number (Optional)</label>
                    <input type="text" class="form-control" id="nickname" placeholder="Enter Extension Number">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nickname">Fax Number (Optional)</label>
                    <input type="text" class="form-control" id="nickname" placeholder="Enter Fax Number">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- <div class="col-md-6">
      <div class="form-group">
        <label for="firstname">DMV Clerk</label>
        <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
            <option value="0: 'iron_man'" class="ng-star-inserted">Alexandria Kettell</option>
            <option value="1: 'captain_america'" class="ng-star-inserted">Angela Sanchez</option>
            <option value="0: 'iron_man'" class="ng-star-inserted">Angie Munoz</option>
            <option value="1: 'captain_america'" class="ng-star-inserted">Beth Thompson</option> 
            <option value="2: 'black_widow'" class="ng-star-inserted">Brenda Agraz</option>
            <option value="3: 'hulk'" class="ng-star-inserted">Carmen Murillo</option>
        </select>
        <div class="dropdown element">
          <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select DMV Clerk
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="javascript:;" type="button" onclick="$('.newDMVform').fadeIn();"><i class="fa fa-plus"></i> &nbsp;Add New DMV Clerk</a></li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="">
                  <label for=""><span class="check">Alexandria Kettell</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="">
                  <label for=""><span class="check">Angela Sanchez</span></label>
                </div>    
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="">
                  <label for=""><span class="check">Angie Munoz</span></label>
                </div> 

              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="">
                  <label for=""><span class="check">Beth Thompson</span></label>
                </div> 

              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="">
                  <label for=""><span class="check">Brenda Agraz</span></label>
                </div> 

              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="">
                  <label for=""><span class="check">Carmen Murillo</span></label>
                </div> 

              </a>
            </li>                                
          </ul>
        </div>
      </div>
    </div> -->
    <div class="col-md-6">
      <div class="form-group">
        <label for="aan">Auction Access Number (Optional)</label>
        <input type="text" class="form-control" id="aan" placeholder="Enter Auction Access Number">
      </div>
    </div>
  </div><!--row-->

  <div class="row">
    <div class="col-md-12">
      <div class="newFormContainer newDMVform">
        <div class="row">
          <div class="col-md-12 text-right">
            <button class="btn btn-sm btn-default" type="button" onclick="$('.newDMVform').hide();">Cancel</button>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2">
            <div class="upload-icon" data-toggle="tooltip" data-placement="top" title="Upload Dealership Logo">
              <a href="javascript:;"> <i class="fa fa-user-plus fa-3x"></i></a>
            </div>
          </div><!--col-2-->
          <div class="col-md-9">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">First Name</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Last Name</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Last Name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Email Address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Job Title</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Job Title">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Mobile Number</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Mobile Number">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Office Number (Optional)</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Office Number">
                </div>
              </div>
            </div>
            <br>
            <br>

          </div><!--col-md-9-->
        </div><!--row-->                    

      </div> <!--newDMForm-->
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="aan">Dealership Type</label>
        <select class="form-control">
          <option selected="selected">Select Dealership Type</option>
          <option>Franchise Dealership</option>
          <option>Independent Dealership</option>
          <option>Wholesaler/Broker</option>
          <option>Banks/Credit Union/Financing Company</option>
          <option>Leasing Company</option>
          <option>Rental Car Company</option>
          <option>Flooring Company</option>
          <option>Mexican Company</option>
          <option>Private Party</option>
          <option>The Dealers' Forum</option>
          <option>Other</option>
        </select>
        <!-- <div class="dropdown">
          <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Dealership Type
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="opt-group"><a href="javascript:;">Select Dealership Type</a></li>
            <li>
              <a href="javascript:;">Franchise Dealership
              </a>
            </li>
            <li>
              <a href="javascript:;">Independent Dealership
              </a>
            </li>   
            <li>
              <a href="javascript:;">Wholesaler/Broker
              </a>
            </li>
            <li>
              <a href="javascript:;">Banks/Credit Union/Financing Company
              </a>
            </li>
            <li>
              <a href="javascript:;">Leasing Company
              </a>
            </li>
            <li>
              <a href="javascript:;">Rental Car Company
              </a>
            </li>   
            <li>
              <a href="javascript:;">Flooring Company
              </a>
            </li>
            <li>
              <a href="javascript:;">Mexican Company
              </a>
            </li>
            <li>
              <a href="javascript:;">Private Party
              </a>
            </li>   
            <li>
              <a href="javascript:;">The Dealers' Forum
              </a>
            </li>
            <li>
              <a href="javascript:;">Other
              </a>
            </li>                                
          </ul>
        </div> -->
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="aan">Transport Preference</label>
        <select class="form-control">
          <option selected="selected">Select Dealership Type</option>
          <option>TDF Automatic Dispatch</option>
          <option>Arrange My Own</option>
          <option>Request a Quote</option>
        </select>
        <!-- <div class="dropdown">
          <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Transport Preference
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="opt-group"><a href="javascript:;">Select Transport Preference</a></li>
            <li>
              <a href="javascript:;">TDF Automatic Dispatch
              </a>
            </li>
            <li>
              <a href="javascript:;">Arrange My Own
              </a>
            </li>   
            <li>
              <a href="javascript:;">Request a Quote
              </a>
            </li>

          </ul>
        </div> -->
      </div>
    </div>
  </div>

  <div class="company-check" style="display: none;">
    test
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="confirmpassword">How I Want to Pay (Select one or more)</label>
        <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
          <option disabled="disabled" class="text-light">Select Payment Methods</option>
            <option value="0: 'iron_man'" class="ng-star-inserted">Company Check</option>
            <option value="1: 'captain_america'" class="ng-star-inserted">CARWAVE Guaranteed</option>
            <option value="0: 'iron_man'" class="ng-star-inserted">AFS</option>
            <option value="1: 'captain_america'" class="ng-star-inserted">ACH</option> 
            <option value="2: 'black_widow'" class="ng-star-inserted">ACH for Title</option>
            <option value="3: 'hulk'" class="ng-star-inserted">Check for Title</option>
            <option value="3: 'hulk'" class="ng-star-inserted">Westlake Financial</option>
            <option value="1: 'captain_america'" class="ng-star-inserted">NextGear</option> 
            <option value="2: 'black_widow'" class="ng-star-inserted">Direct Deposit</option>
        </select>
        <!-- <div class="dropdown element">
          <button class="btn btn-default dropdown-toggle btn-block btn-dropdown-custom" type="button" id="payment-method" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Payment Methods
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="opt-group"><a href="javascript:;">Select Payment Methods</a></li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" data-rel="company-check" id="company-check" class="company-check">
                  <label for="company-check"><span class="check">Company Check</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="tdf-guar">
                  <label for="tdf-guar"><span class="check">The Dealers' Forum Guaranteed</span></label>
                </div>
              </a>
            </li>

            <li class="">
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="afs">
                  <label for="afs"><span class="check">AFS</span></label>
                </div>
              </a>
            </li>
            <li class="">
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="ach">
                  <label for="ach"><span class="check">ACH</span></label>
                </div>
              </a>
            </li>
            <li class="">
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="ach-title">
                  <label for="ach-title"><span class="check">ACH for Title</span></label>
                </div>
              </a>
            </li>
            <li class="">
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="check-title">
                  <label for="check-title"><span class="check">Check for Title</span></label>
                </div>
              </a>
            </li>
            <li class="">
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="nextgear">
                  <label for="nextgear"><span class="check">NextGear</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="payment-method" id="direct-deposit">
                  <label for="direct-deposit"><span class="check">Direct Deposit</span></label>
                </div>
              </a>
            </li>                                
          </ul>
        </div> -->
        <!-- <br>
        <span class="tag label label-secondary">
          <span>Example Tag</span>
          <a><i class="fa fa-times"></i></a> 
        </span>
        <span class="tag label label-secondary">
          <span>Example Tag</span>
          <a><i class="fa fa-times"></i></a> 
        </span> -->

      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="confirmpassword">How I Want to be Paid (Select one or more)</label>
        <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
          <option disabled="disabled" class="text-light">Select Payment Methods</option>
            <option value="0: 'iron_man'" class="ng-star-inserted">Company Check</option>
            <option value="1: 'captain_america'" class="ng-star-inserted">CarWave Guaranteed</option>
            <option value="0: 'iron_man'" class="ng-star-inserted">Norwalk</option>
            
        </select>
        <!-- <div class="dropdown element">
          <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Payment Methods
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="opt-group"><a href="javascript:;">Select Payment Methods</a></li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Company Check</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">The Dealers' Forum Guaranteed</span></label>
                </div>
              </a>
            </li>
            <li >
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Norwalk</span></label>
                </div>
              </a>
            </li>

          </ul>
        </div> -->
        <!-- <br>
        <span class="tag label label-secondary">
          <span>Example Tag</span>
          <a><i class="fa fa-times"></i></a> 
        </span>
        <span class="tag label label-secondary">
          <span>Example Tag</span>
          <a><i class="fa fa-times"></i></a> 
        </span> -->

      </div>
    </div>

    <!-- <div class="col-md-4">
      <div class="form-group">
        <label for="aan">Credit Limit</label>
        <input type="text" class="form-control text-right" id="aan" placeholder="$0">
      </div>
    </div> -->

  </div><!--row-->


  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="confirmpassword">Make (Select one or more)</label>
        <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
          <option disabled="disabled" class="text-light">Select Make</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Acura</option>
          <option value="1: 'captain_america'" class="ng-star-inserted">Alfa Romeo</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Aston Martin</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Audi</option>
          <option value="1: 'captain_america'" class="ng-star-inserted">Bentley</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">BMW</option> 
          <option value="1: 'captain_america'" class="ng-star-inserted">Bugatti</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Buick</option>  
        </select>
        <!-- <div class="dropdown element">
          <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Make
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="opt-group"><a href="javascript:;">Select Make</a></li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Acura</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Alfa Romeo</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Aston Martin</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Audi</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Bentley</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">BMW</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Bugatti</span></label>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <div class="checkbox">
                  <input type="checkbox" name="group2" id="checkbox-1">
                  <label for="checkbox-1"><span class="check">Buick</span></label>
                </div>
              </a>
            </li>                                
          </ul>
        </div>
        <br>
        <span class="tag label label-secondary">
          <span>Example Tag</span>
          <a><i class="fa fa-times"></i></a> 
        </span>
        <span class="tag label label-secondary">
          <span>Example Tag</span>
          <a><i class="fa fa-times"></i></a> 
        </span> -->

      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="aan">Photofeed Company</label>
        <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched">
          <option disabled="disabled" selected="selected" class="text-light">Select Make</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">4morehits</option>
          <option value="1: 'captain_america'" class="ng-star-inserted">Autobase</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">AutoExpress</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Autofusion</option>
          <option value="1: 'captain_america'" class="ng-star-inserted">Automanager</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Autorevo</option> 
          <option value="1: 'captain_america'" class="ng-star-inserted">Autorevolution</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Autosweet</option>

          <option value="1: 'captain_america'" class="ng-star-inserted">AutoUplink</option>
          <option value="0: 'iron_man'" class="ng-star-inserted">Avwebdesigns</option> 
          <option value="0: 'iron_man'" class="ng-star-inserted">CarsForSale</option>  
        </select>
        <!-- <div class="dropdown">
          <button class="btn btn-default btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Select Photofeed Company
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="opt-group"><a href="javascript:;">Select Photofeed Company</a></li>
            <li>
              <a href="javascript:;">4morehits
              </a>
            </li>
            <li>
              <a href="javascript:;">Autobase
              </a>
            </li>   
            <li>
              <a href="javascript:;">AutoExpress
              </a>
            </li>
            <li>
              <a href="javascript:;">Autofusion
              </a>
            </li>
            <li>
              <a href="javascript:;">Automanager
              </a>
            </li>
            <li>
              <a href="javascript:;">Autorevo
              </a>
            </li>   
            <li>
              <a href="javascript:;">Autorevolution
              </a>
            </li>
            <li>
              <a href="javascript:;">Autosweet
              </a>
            </li>
            <li>
              <a href="javascript:;">AutoUplink
              </a>
            </li>   
            <li>
              <a href="javascript:;">Avwebdesigns
              </a>
            </li>
            <li>
              <a href="javascript:;">CarsForSale
              </a>
            </li>                                
          </ul>
        </div> -->
      </div>
    </div>

  </div><!--row-->

    <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="confirmpassword">Buyer Rep (Select one or more)</label>
            <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
              <option value="0: 'iron_man'" class="ng-star-inserted">Amber Rashid</option>
              <option value="1: 'captain_america'" class="ng-star-inserted">Robin Arellano</option>
              <option value="2: 'black_widow'" class="ng-star-inserted">Mike Mina</option>
              <option value="3: 'hulk'" class="ng-star-inserted">Susan Brodie</option>
              <option value="0: 'iron_man'" class="ng-star-inserted">Craig Schneider </option>
              <option value="1: 'captain_america'" class="ng-star-inserted">Sergio Velasco </option> 
              <option value="2: 'black_widow'" class="ng-star-inserted">Charles Cox </option>
              <option value="3: 'hulk'" class="ng-star-inserted">Brad Ryan </option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="confirmpassword">Seller Rep (Select one or more)</label>
            <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
              <option value="0: 'iron_man'" class="ng-star-inserted">Amber Rashid</option>
              <option value="1: 'captain_america'" class="ng-star-inserted">Robin Arellano</option>
              <option value="2: 'black_widow'" class="ng-star-inserted">Mike Mina</option>
              <option value="3: 'hulk'" class="ng-star-inserted">Susan Brodie</option>
              <option value="0: 'iron_man'" class="ng-star-inserted">Craig Schneider </option>
              <option value="1: 'captain_america'" class="ng-star-inserted">Sergio Velasco </option> 
              <option value="2: 'black_widow'" class="ng-star-inserted">Charles Cox </option>
              <option value="3: 'hulk'" class="ng-star-inserted">Brad Ryan </option>
            </select>

          </div>
        </div>

      </div>

  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="firstname">Website URL</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter Website URL">
      </div>
    </div>
  </div><!--row-->


</form>

</div>
</div>

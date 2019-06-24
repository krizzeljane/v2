    <div class="row">
      <div class="col-lg-12">

        <form class="new-form">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group has-error has-feedback">
                <label for="firstname">Profile Photo</label>
                <button type="file" class="btn btn-default"></button>
                <input type="file" id="formly_1_file_file_0" class="ng-pristine ng-valid ng-touched" placeholder="" >
                <!-- <p class="text-alert text-danger text-xs">Please add profile photo.</p> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group has-error has-feedback">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
                <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
                <p class="text-alert text-danger text-xs">Please enter first name.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Email">
              </div>
            </div>
            <div class="col-xs-4">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password">
              </div>
            </div>
            <div class="col-xs-4">
              <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-4">
              <div class="form-group">
                <label for="mobilenumber">Mobile Number</label>
                <input type="text" class="form-control" id="mobilenumber" placeholder="Enter Mobile Number">
              </div>
            </div>
            <div class="col-xs-4">
              <div class="form-group">
                <label for="officenumber">Office Number (Optional)</label>
                <input type="text" class="form-control" id="officenumber" placeholder="Enter Office Number">
              </div>
            </div>
            <div class="col-xs-4">
              <div class="form-group">
                <label for="officenumber">Office Extension Number (Optional)</label>
                <input type="text" class="form-control" id="officenumber" placeholder="Enter Office Number">
              </div>
            </div>
            
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="jobtitle">Job Title</label>
                <input type="text" class="form-control" id="jobtitle" placeholder="Enter Job Title">
              </div>
              <br>
              <div class="checkbox">
                <input type="checkbox" name="none" id="checkbox-5">
                <label for="checkbox-5"><span class="check">Receive SMS Notifications</span></label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="confirmpassword">User Account Type (Select one or more)</label>
                <select class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
                  <option value="0: 'iron_man'" class="ng-star-inserted">Superadmin</option>
                  <option value="1: 'captain_america'" class="ng-star-inserted">Backoffice - All</option>
                  <option value="0: 'iron_man'" class="ng-star-inserted">Backoffice - Title</option>
                  <option value="1: 'captain_america'" class="ng-star-inserted">Backoffice - Collections</option> 
                  <option value="2: 'black_widow'" class="ng-star-inserted">Backoffice - Payments</option>
                  <option value="3: 'hulk'" class="ng-star-inserted">Backoffice - Arbitration</option>
                  <option value="0: 'iron_man'" class="ng-star-inserted">Backoffice - Accounting</option>

                  <option value="1: 'captain_america'" class="ng-star-inserted">Backoffice - Quality Control</option>
                  <option value="0: 'iron_man'" class="ng-star-inserted">Backoffice - Transportation</option>
                  <option value="1: 'captain_america'" class="ng-star-inserted">Sales Manager</option> 
                  <option value="2: 'black_widow'" class="ng-star-inserted">Sales - Franchise</option>
                  <option value="2: 'black_widow'" class="ng-star-inserted">Sales - Buyer</option>
                  <option value="3: 'hulk'" class="ng-star-inserted">Inspector - Crew Chief</option>
                  <option value="3: 'hulk'" class="ng-star-inserted">Inspector</option>
              </select>
                <!-- <div class="dropdown element">
                  <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select User Account Type
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="opt-group"><a href="javascript:;">Select User Account Type</a></li>
                    <li>
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Superadmin</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - All</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Title</span></label>
                        </div>
                      </a>
                    </li>

                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Collections</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Payments</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Arbitration</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Accounting</span></label>
                        </div>
                      </a>
                    </li>

                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Quality Control</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent-2x">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Backoffice - Transportation</span></label>
                        </div>
                      </a>
                    </li>

                    <li class="indent">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Sales Manager</span></label>
                        </div>
                      </a>
                    </li>
                    <li class="indent">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Account Executive</span></label>
                        </div>
                      </a>
                    </li>

                    <li class="indent">
                      <a href="newdealer.html">
                        <div class="checkbox">
                          <input type="checkbox" name="group2" id="checkbox-1">
                          <label for="checkbox-1"><span class="check">Inspector</span></label>
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
          </div>


          


        </form>

      </div>
    </div>
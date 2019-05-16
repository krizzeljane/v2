
<div class="row">
  <div class="col-lg-12">
    <!-- <div class="upload-icon" data-toggle="tooltip" data-placement="top" title="Upload Dealer Photo">
      <a href="javascript:;"> <i class="fa fa-user-plus fa-3x"></i></a>
    </div> -->

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
        <div class="col-md-4">
          <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" disabled="disabled" class="form-control" id="firstname" value="Ryan" placeholder="Enter First Name">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="nickname">Nickname</label>
            <input type="text" disabled="disabled"  class="form-control" id="nickname" value="Ry" placeholder="Enter Nickname">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" disabled="disabled" class="form-control" id="lastname" value="Farina" placeholder="Enter Last Name">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" id="email" value="ryanfarina@gmail.com" placeholder="Enter Email">
          </div>
        </div>
        <!-- <div class="col-md-4">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" value="123456789" placeholder="Enter Password">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpassword" value="123456789" placeholder="Confirm Password">
          </div>
        </div> -->
      </div>
      <div class="row edit-pw-btn">
        <div class="col-md-12">
          <div class="form-group">
            <!-- <label for="confirmpassword">&nbsp;</label> -->
            <button type="button" class="btn btn-default" onclick="$('.edit-pw-btn').hide();$('.edit-pw').fadeIn();">Update Password</button>
          </div>
          
        </div>
      </div>
      <div class="row edit-pw" style="display: none;">
        <div class="col-md-4">
          <div class="form-group">
            <label for="password">New Password</label>
            <input type="password" class="form-control" id="password" value="123456789" placeholder="Enter New Password">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" class="form-control" id="confirmpassword" value="123456789" placeholder="Confirm Password">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="confirmpassword">&nbsp;</label>
            <button type="button"  class="btn btn-default" onclick="$('.edit-pw').hide();$('.edit-pw-btn').fadeIn();">Cancel</button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="mobilenumber">Mobile Number</label>
            <input type="text" class="form-control" id="mobilenumber" value="123456789" placeholder="Enter Mobile Number">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="officenumber">Office Number (Optional)</label>
            <input type="text" class="form-control" id="officenumber" value="123456789" placeholder="Enter Office Number">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="jobtitle">Job Title</label>
            <input type="text" class="form-control" id="jobtitle" value="UCM" placeholder="Enter Job Title">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="aan">Auction Access Number (Optional)</label>
            <input type="text" class="form-control" id="aan" placeholder="Enter Auction Access Number">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="confirmpassword">Dealer Permission (Select one or more)</label>
            <select disabled="disabled" class="form-control ng-pristine ng-valid ng-star-inserted ng-touched" multiple="" id="formly_3_select_multiselect_3" placeholder="">
              <optgroup label="Frontline">
                <option value="0: 'iron_man'" class="ng-star-inserted">Frontline - Buy</option>
                <option value="1: 'captain_america'" class="ng-star-inserted">Frontline - Sell</option>
                <option value="0: 'iron_man'" class="ng-star-inserted">Frontline - Buy - Demo</option>
                <option value="1: 'captain_america'" class="ng-star-inserted">Frontline - Sell - Demo</option> 
              </optgroup>
              <optgroup label="Trade-in">
                <option value="2: 'black_widow'" class="ng-star-inserted">Trade-in - Buy</option>
                <option value="3: 'hulk'" class="ng-star-inserted">Trade-in - Sell</option>
                
                <option value="2: 'black_widow'" class="ng-star-inserted">Trade-in - Buy - Demo</option>
                <option value="3: 'hulk'" class="ng-star-inserted">Trade-in - Sell - Demo</option>
              </optgroup>
              
              
            </select>
            <!-- <div class="dropdown element">
              <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Select Dealer Permission
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li class="opt-group"><a href="javascript:;">Frontline</a></li>
                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Buy</span></label>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Sell</span></label>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Buy - Demo</span></label>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Sell - Demo</span></label>
                    </div>
                  </a>
                </li>

                <li class="opt-group"><a href="javascript:;">Trade-ins</a></li>
                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Buy</span></label>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Sell</span></label>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Buy - Demo</span></label>
                    </div>
                  </a>
                </li>

                <li>
                  <a href="newdealer.html">
                    <div class="checkbox">
                      <input type="checkbox" name="group2" id="checkbox-1">
                      <label for="checkbox-1"><span class="check">Sell - Demo</span></label>
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
      </div>
    </form>

  </div>
</div>

<script type="text/javascript">
  function addMore() {
    fileId++; // increment fileId to get a unique ID for the new element
    var html = '<div class="row"><div class="col-xs-10 padding-right-sm"><input type="text" class="form-control" id="email" placeholder="Enter Dealership"></div><div class="col-xs-2 padding-left-sm"><button class="btn btn-danger"><span class="hidden-xs">Remove</span> <i class="fas fa-times"></i></button></div></div>';
    addElement('files', 'p', 'file-' + fileId, html);
  }
</script>

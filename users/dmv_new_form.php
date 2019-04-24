

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
        <div class="col-md-4">
          <div class="form-group">
            <label for="jobtitle">Job Title</label>
            <input type="text" class="form-control" id="jobtitle" placeholder="Enter Job Title">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="mobilenumber">Office Number</label>
            <input type="text" class="form-control" id="mobilenumber" placeholder="Enter Office Number">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="officenumber">Fax Number (Optional)</label>
            <input type="text" class="form-control" id="officenumber" placeholder="Enter Fax Number">
          </div>
        </div>         
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group adddealeship">
            <div class="row no-margin">
              <div class="col-xs-12 no-padding">
                <label for="confirmpassword">Assign to Dealership:</label>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-9 padding-right-sm">

                <input type="text" class="form-control" id="email" placeholder="Enter Dealership">
              </div>
              <div class="col-xs-3 padding-left-sm">
                <!-- <label for="" width="100%">&nbsp; </label> -->
                <button class="btn btn-danger"><span class="hidden-xs">Remove</span> <i class="fas fa-times"></i></button>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-9 padding-right-sm">
                <input type="text" class="form-control" id="email" placeholder="Enter Dealership">
              </div>
              <div class="col-xs-3 padding-left-sm">
                <button class="btn btn-danger"><span class="hidden-xs">Remove</span> <i class="fas fa-times"></i></button>
              </div>
            </div>

          </div>
          <button class="btn btn-default">Add more Dealership <i class="fa fa-plus"></i></button>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Dealership Group</label>
            <select class="form-control">
              <option selected="selected">Select Dealership Group</option>
              <option>Los Angeles Group</option>
              <option>San Diego Group</option>
              <option>San Francisco Group</option>
              <option>Sacramento Auto Group</option>
            </select>
          </div>
        </div>
      </div>


    </form>
  </div>
</div>

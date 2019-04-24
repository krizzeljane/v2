<div class="modal fade" id="arb-modal" tabindex="-1" role="dialog" aria-labelledby="arb-modal">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content" id="arb-1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Request Arbitration</h4>
      </div>
      <div class="modal-body">
        <img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/assets/InspectionGuaranteeProgram.jpg" class="img-responsive">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="$('#arb-1').hide();$('#arb-2').fadeIn();">I agree, fill out the form</button>
      </div>
    </div>


    <div class="modal-content" id="arb-2">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Request Arbitration</h4>
      </div>
      
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12 text-right"><p>Current Date: May 3, 2018</p></div>
        </div>

        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group has-error has-feedback">
                <label for="firstname">Contact Name</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
                <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
                <p class="text-alert text-danger text-xs">Enter your name.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Dealership Name</label>
                <div class="dropdown element">
                  <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select Dealership
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li>
                      <a href="javascript:;">
                        Mazda of Vacaville
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        Nissan of Vacaville
                      </a>
                    </li>                               
                  </ul>
                </div>
              </div>             
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Contact Phone</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Dealership Phone</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-arb">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-2">
                      <img src="images/car1.jpg" class="img-responsive">
                    </div>
                    <div class="col-xs-10">
                      <h5>2018 Kia Forte LX Sedan 4D FWD 4-Cyl, 2.0 Liter</h5>
                      <p>WAUGB28D2XA314150 | 16,865 miles   |  Silver/Gray</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Vehicle Location</label>
                <div class="dropdown element">
                  <button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select Vehicle Location
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li>
                      <a href="javascript:;">
                        Mazda of Vacaville - 580 Orange Dr, Vacaville, CA 95687, USA
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        Nissan of Vacaville - 671 Orange Dr, Vacaville, CA 95687, USA
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;">
                        Other location
                      </a>
                    </li>                               
                  </ul>
                </div>
              </div>             
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Vehicle Received Date</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="firstname">Current Mileage</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="firstname">Arbitration Concerns (Please be as detailed as possible): </label>
                <textarea type="text" class="form-control" id="firstname" placeholder="Enter your concerns"></textarea>
              </div>
            </div>
          </div>


        </div><!-- modal-body -->
      </form>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Submit Arbitration</button>
      </div>
    </div><!-- modal-content -->



  </div>
</div>
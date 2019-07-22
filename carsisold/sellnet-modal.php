<div class="modal fade" tabindex="-1" role="dialog" id="sellnet-modal">
  <div class="modal-dialog modal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Invoice Report</h4>
      </div>
      <div  id="inv-rep-1">
        <div class="modal-body">
          <form class="form">
          <!-- <div class="form-group">
            <select class="form-control input-block" id="date">
              <option selected="selected" disabled="disabled">Select Time Period</option>
              <option>This Week</option>
              <option value="custom">Custom</option>
            </select>
          </div> -->

          <div class="form-group">
            <label for="firstname">Select Time Period</label>
            <select class="form-control" id="date">
              <!-- <option selected="selected" disabled="disabled">Select Time Period</option> -->
              <option>This Week</option>
              <option>Last Week</option>
              <option>This Month</option>
              <option>Last Month</option>
              <option value="custom">Custom</option>
            </select>
            <p class="text-alert text-danger text-xs sell-net-error"  style="display: none;"> No invoices available for this time period.</p>
            
          </div>
        </form>
        <form class="form">
          <div class="form-group has-feedback customdate custom" style="display: none; width: 100%;">
            <!-- <label for="firstname">&nbsp;</label> -->
            <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" placeholder="From">
            <span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess3Status" class="sr-only">(success)</span>
          </div>

          <div class="form-group has-feedback customdate custom" style="display: none; width: 100%;">
            <!--  <label for="firstname">&nbsp;</label> -->
            <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" placeholder="To">
            <span class="fa fa-calendar form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess3Status" class="sr-only">(success)</span>
          </div>
        </form>
        <form class="form">
          <div class="form-group has-feedback send-email" style="display: none;">
            <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" placeholder="Enter Email Address">
            <p class="text-xs text-light margin-top-sm"><em>Separate multiple email addresses with a coma.</em></p>
          </div>
        </form>
        <p class="text-alert text-danger text-xs sell-net-error"  style="display: none;"> You can only download/email a maximum of 100 files. Please adjust your time period. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <!-- <button type="button" class="btn btn-default">View</button>
          <button type="button" class="btn btn-default">Print</button> -->
          <button type="button" class="btn btn-default" onclick="$(this).hide();$('.send-email-btn').fadeIn();$('.send-email').fadeIn();">Email</button>
          <button type="button" class="btn btn-primary send-email-btn" style="display: none;" onclick="$('.sell-net-error').fadeIn();">Send Email</button>
          <button type="button" class="btn btn-default btnSave" onclick="$('#inv-rep-1').hide();">Generate Report</button>
        </div>
      </div>

      <div id="inv-rep-2"  style="display: none;">
        <div class="modal-body">
          <p class="text-muted"><em>Generating Invoice Report...</em></p>
          <div class="row">
            <div class="col-sm-10">
              <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <button class="btn btn-sm btn-default">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <div id="inv-rep-3" style="display: none;">
        <div class="inv-rep-happy">
          <div class="modal-body">
            <p class="text-muted"><em>Downloading Invoice Report...</em></p>
            <div class="progress">
              <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
              </div>
            </div>
            <button type="button" class="btn btn-xs btn-default" onclick="$('.inv-rep-happy').hide();$('.inv-rep-sad').show();">Click to show sad path</button>
          </div>
        </div>

        <div class="inv-rep-sad" style="display: none;">
          <div class="modal-body" >
            <p class="">Generated 7 of 10 Invoices</p>
            <div class="progress">
              <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <p class="text-warning">Sorry, there was an error generating invoices for the following vehicles:</p>
            <ol class="text-warning">
              <li><button type="button" class="btn-link text-warning btn-copy js-tooltip js-copy" data-toggle="tooltip" data-placement="bottom" data-copy="2HNYD2H45AH527162" title="Copy VIN">2HNYD2H45AH527162 <i class="fa fa-copy"></i></button></li>
              <li><button type="button" class="btn-link text-warning btn-copy js-tooltip js-copy" data-toggle="tooltip" data-placement="bottom" data-copy="4V4NC9GH87N453992" title="Copy VIN">4V4NC9GH87N453992 <i class="fa fa-copy"></i></button></li>
              <li><button type="button" class="btn-link text-warning btn-copy js-tooltip js-copy" data-toggle="tooltip" data-placement="bottom" data-copy="5XXGR4A63CG020535" title="Copy VIN">5XXGR4A63CG020535 <i class="fa fa-copy"></i></button></li>
            </ol>
            <p class="text-warning">You can download this report or try again.</p>
            <p class="text-xs text-muted"><em>If this error persists, please contact us at 844-428-9638.</em></p>    

            <button type="button" class="btn btn-xs btn-default" onclick="$('.inv-rep-sad').hide();$('.inv-rep-happy').show();">Click to show happy path</button>  

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-default" onclick="$('#inv-rep-2').hide();$('#inv-rep-3').hide();$('#inv-rep-1').fadeIn();">Generate Again</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Download Report</button>
          </div>
        </div>
      </div>






    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
  $(document).ready(function(){
    $('#date').change(function(){
      $('.customdate').hide();
      $('.' + $(this).val()).css('display', 'inline-block');
    });

    // $("#inv-rep-2").hide();
    $(".btnSave").click(
      function () {
        AlertSave();
      }            
      );

    function AlertSave() {
     $("#inv-rep-2").fadeIn();
     $("#inv-rep-2").delay(2000).fadeOut(
      function(){
        $("#inv-rep-3").show();
      }
      );

   }
 });

  
</script>
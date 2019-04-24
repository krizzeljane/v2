<div class="modal fade" tabindex="-1" role="dialog" id="sellnet-modal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Sell Net Report</h4>
      </div>
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
            
            <!-- <p class="text-alert text-danger text-xs">Please enter dealership name</p> -->
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
        <button type="button" class="btn btn-default" onclick="$('.sell-net-error').fadeIn();">Export</button>
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
  });
</script>
<div class="modal fade" id="edit-pa-note" tabindex="-1" role="dialog" aria-labelledby="editDealer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title text-center" id="myModalLabel">Edit Note</h5>
      </div>
      <div class="dm-vi">
        <div class="row">
          <div class="col-sm-1 col-xs-2">
            <div class="dm-vi-icon">
              <img src="images/car1.jpg">
            </div>
          </div>
          <div class="col-sm-11 col-xs-9 no-padding-left">
            <div class="dm-vi-text">
              <h6>2014 Bentley Continental Flying Spur W12 Mulliner | 50,000 mi | 3KPFL4A70JE165060 
              </h6>
              <p class="dm-vi-p hidden-sm hidden-xs"><small>KBB/KBB with Miles: $25,700/$25,300</small></p>
            </div>
          </div>
          <div class="col-xs-1">
            <a href="javascript:;" class="pull-right btn-link-default hidden-lg hidden-md" type="button" onclick="$('.dm-vi-p').toggleClass('hidden-xs hidden-sm');"><i class="fa fa-angle-down"></i></a>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <textarea class="form-control" rows="4"></textarea>
        <div class="checkbox">
          <input type="checkbox" name="group2" id="pa-note-review">
          <label for="pa-note-review"><span class="check">For Review</span></label>
        </div>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" disabled="disabled">Save Note</button>
      </div>
    </div>
  </div>
</div>
<!--MODALS END-->
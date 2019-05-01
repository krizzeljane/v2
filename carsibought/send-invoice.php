<div class="modal fade" tabindex="-1" role="dialog" id="send-invoice">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center">Send Invoice</h4>
      </div>
      <div class="modal-body">
        <form class="form">
          <div class="form-group has-feedback send-email" style="">
            <input type="text" class="form-control" id="inputSuccess3" aria-describedby="inputSuccess3Status" placeholder="Enter Email Address">
            <p class="text-xs text-light margin-top-sm"><em>Separate multiple email addresses with a coma.</em></p>
          </div>

          <div class="form-group has-feedback send-email" style="">
             <textarea class="form-control" rows="6" placeholder="Enter your message..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary send-email-btn">Send Email</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="row">
  <div class="col-lg-12">
    <form>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group has-error has-feedback">
            <label for="firstname">Grade</label>
            <input type="text" class="form-control text-right" id="firstname" placeholder="0.0">
            <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
            <p class="text-alert text-danger text-xs">Please input grade.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="lastname">MMR</label>
            <input type="text" class="form-control text-right" id="lastname" placeholder="$0">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="firstname">Starting Price</label>
            <input type="text" class="form-control text-right" id="firstname" placeholder="$0">
            <!-- <span class="fa fa-exclamation-triangle form-control-feedback" aria-hidden="true"></span>
            <p class="text-alert text-danger text-xs">Please enter first name.</p> -->
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="lastname">Reserve Price</label>
            <input type="text" class="form-control text-right" id="lastname" placeholder="$0">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="lastname">Auction</label>
            <select class="form-control">
              <option disabled="disabled" selected="selected">Not in Auction</option>
              <option>My Fresh Trades</option>
              <option>Trade-ins Sacramento</option>
              <option>Trade-ins San Diego</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <br>
          <label class="text-xs text-normal">Approved? &nbsp;&nbsp;&nbsp;<input type="checkbox" data-toggle="toggle" data-size="mini" data-on="Yes" data-off="No"></label>
        </div>
        
      </div>

    </form>
  </div>
</div>
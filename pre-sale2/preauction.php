<?php
$title = "Pre-Auction";
include('../head.php');
include('../nav.php');
include('pa_edit_modal.php');
include('pa_edit_note.php');

?>



<div class="nav-blue">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">Quality Control</h4>
      </div>
    </div>
  </div>
</div>

<div class="tab-container">
  <div class="container-fluid">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#pa-f" aria-controls="pa-f" role="tab" data-toggle="tab">Frontlines (20)</a></li>
      <li role="presentation"><a href="#pa-t" aria-controls="pa-t" role="tab" data-toggle="tab">Trade-ins (10)</a></li>
      <li role="presentation"><a href="#pa-d" aria-controls="pa-d" role="tab" data-toggle="tab">Deleted (5)</a></li>
    </ul>
  </div>
</div>

<div class="page-container">
  <div class="container-fluid">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="pa-f">
        <?php include('pa-f.php');?>
      </div>
      <div role="tabpanel" class="tab-pane fade in active" id="pa-t">
        <?php include('pa-t.php');?>
      </div>
      <div role="tabpanel" class="tab-pane fade in" id="pa-d">
        <?php include('pa-d.php');?>
      </div>
    </div>
  </div>
</div>


<!-- <div style="position: fixed;right: 20px; bottom: 20px;">
  <button class="btn btn-default">Refresh <i class="fa fa-undo"></i></button>
</div> -->

<?php include("footer.php") ?>
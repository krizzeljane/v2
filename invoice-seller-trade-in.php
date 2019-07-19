<!DOCTYPE html>
<html>
<head>
  <title>Seller Trade-in Invoice</title>

  <style type="text/css">
  body {
    font-family: 'Roboto', Arial, sans-serif;
  }
  
  p, h1, h2,h3,h4,h5,h6,a,label {
    font-family: 'Roboto', Arial, sans-serif;
    margin: 0;
    color: #333;
    font-weight: 300;
    line-height: 1.5;
  }
  h1, h2,h3,h4,h5,h6 {
    font-weight: 700;
  }
  h5 {
    margin: 5px 0;
    font-size: 16px;
  }

  .container {
    width: 1000px;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    transition: 0.3s;
  }
  .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  .row {
    margin-right: -15px;
    margin-left: -15px;
  }

  .row:before,
  .row:after,
  .panel-body:before,
  .panel-body:after{
    display: table;
    content: " ";
  }

  .container:after,
  .container-fluid:after,
  .panel-body:after,
  .row:after {
    clear: both;
  }

  .panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
  }
  .panel-body {
    padding: 15px;
  }
  .panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }

  .panel-danger {
  border-color: #ebccd1;
  }
  .panel-danger > .panel-heading {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
  }
  .panel-danger > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #ebccd1;
  }
  .panel-danger > .panel-heading .badge {
    color: #f2dede;
    background-color: #a94442;
  }
  .panel-danger > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ebccd1;
  }
  .panel-danger h5,.panel-danger p {
    color: #b20000;
  }

  .panel-default {
    border-color: #ddd;
  }
  .panel-default > .panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
  }
  .panel-default > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #ddd;
  }
  .panel-default > .panel-heading .badge {
    color: #f5f5f5;
    background-color: #333;
  }
  .panel-default > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ddd;
  }

  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
    float: left !important;
  }
  .col-sm-12 {
    width: 97%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    /*width: 50%;*/
    width: 47%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }

  .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6,.col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11,.col-sm-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }

  .img-responsive,
  .thumbnail > img,
  .thumbnail a > img,
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    display: block;
    max-width: 100%;
    height: auto;
  }

  .invoice-header {
    background-color: #3b356e;
    padding: 30px;
    color: white;
    margin-bottom: 10px;
  }
  .pull-right {
    float: right;
  }
  .text-right {
    text-align: right;
  }
  .invoice-header p {
    color: white;
  }
  .total label, .total p {
    font-size: 20px;
    font-weight: bold;
    color: green;
  }
  </style>

</head>
<body>

  <div class="container">
    <div class="invoice-header">
    <div class="row">
      <div class="col-sm-12 no-padding">
        <h4 style="display: none;">CARWAVE</h4>
        <img src="images/cw-logo-w.png">
        <p class="pull-right">Phone: 844-428-9638 | Email: admin@carwave.com</p>
      </div>
    </div>
  </div>

  <div class="invoice-btn-func">
    <div style="position: absolute;right: 20px;top: 10px;">
      <a href="javascript:;" class="btn btn-default"><i class="fa fa-envelope"></i></a>
      <a href="javascript:;" id="btnsPrint" class="btn btn-default"><i class="fa fa-print"></i></a>
    </div>
  </div>

  <div class="invoice invoice-modal">

    <div class="panel panel-danger">
      <div class="panel-heading">
        <h5><i class="fa fa-exclamation-circle"></i> Important Instructions</h5>
      </div>
      <div class="panel-body">
        <p>Please send properly executed title docs to:<br><br>
          <strong>
           CARWAVE <br>
           855 North Broadway, Suite 100 <br>
           Escondido, CA 92025 
         </strong>
       </p>
      </div>
    </div>

    <div class="inv-v-info">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-2">
              <img src="images/car1.jpg" class="img-responsive">
            </div>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-5">
                  <p>Year: <strong>2018</strong></p>
                  <p>Make: <strong>Kia</strong></p>
                  <p>Model: <strong>Forte LX</strong></p>
                  <p>Trim: <strong>Sedan 4D FWD</strong></p>
                  <p>Odometer: <strong>12,000 mi</strong></p>
                </div>
                <div class="col-sm-6">
                  <p>Color: <strong>Black/Black</strong></p>
                  <p>VIN: <strong>HY237HS7953987765</strong></p>
                  <p>License Plate Number: <strong>WG2567</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 padding-left-md">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h5>Seller:</h5>
          </div>
          <div class="panel-body">
            <div class="inv-v-users">
              <div class="row">
                <div class="col-sm-12 no-padding-right">
                  <div class="inv-v-seller">
                    <!-- <p class="inv-v-title">Sold by:</p> -->
                    <p>Pacific Honda</p>
                    <p>4761 Convoy St, San Diego, CA 92111</p>
                    <p>Dealer License #: 7645536</p>
                    <p>&nbsp;</p>
                  </div>
                  
                </div>
              </div>
            </div><!-- inv-v-users -->
          </div> <!-- panel body -->
        </div> <!-- panel -->

      </div>

      <div class="col-sm-6 padding-right-md">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h5>Buyer:</h5>
          </div>
          <div class="panel-body">
            <div class="inv-v-users">
              <div class="row">
                <div class="col-sm-12 no-padding-right">
                  <div class="inv-v-buyer">
                    <!-- <p class="inv-v-title">Sold to:</p> -->
                    <p>Nissan of Vacaville</p>
                    <p>Ryan Farina</p>
                    <p>671 Orange Dr, Vacaville, CA 95687</p>
                    <p>Dealer License #: 4568366</p>
                  </div>
                  
                </div>
              </div>
            </div><!-- inv-v-users -->
          </div> <!-- panel body -->
        </div> <!-- panel -->

      </div>
      
    </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h5>Transaction Details:</h5>
            </div>
            <div class="panel-body">
              <div class="inv-v-trans">

                <div class="row">
                  <div class="col-sm-6 no-padding-right">
                    <div class="form-horizontal">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Sold Date:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static">July 29, 2018</p>
                        </div>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Payment Method:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static">CARWAVE Guarantee</p>
                        </div>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Facilitating Location:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static">CARWAVE <br>
                          855 North Broadway, Suite 100 <br>
                          Escondido, CA 92025</p>
                        </div>
                      </div><!-- form-group -->

                    </div><!-- form-horizontal -->
                  </div>
                  <div class="col-sm-5">
                    <div class="form-horizontal">
                      <div class="form-group">
                        <label class="col-sm-6 control-label">Sale Price:</label>
                        <div class="col-sm-4">
                          <p class="form-control-static text-right">$3,100</p>
                        </div>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <label class="col-sm-6 control-label">Sale Fee:</label>
                        <div class="col-sm-4">
                          <p class="form-control-static text-right">($0)</p>
                        </div>
                      </div><!-- form-group -->
                      <div class="form-group">
                        <label class="col-sm-6 control-label">Inspection Fee:</label>
                        <div class="col-sm-4">
                          <p class="form-control-static text-right">($0)</p>
                        </div>
                      </div><!-- form-group -->
                      <div class="form-group total">
                        <label class="col-sm-6 control-label text-success">Total:</label>
                        <div class="col-sm-4">
                          <p class="form-control-static text-right">$3,100</p>
                        </div>
                      </div><!-- form-group -->
                    </div>

                  </div>
                </div>

              </div><!-- inv-v-trans -->

            </div>
          </div>
        </div>
      </div>



  </div><!-- invoice invoice-modal -->
  </div>
</body>
</html>
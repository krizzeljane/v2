<!DOCTYPE html>
<html>
<head>
  <title>Buyer Franchise CARWAVE Guar Invoice</title>

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


  .inv-item {
    margin-bottom: 15px;
  }

  .inv-v-disc p {
    font-size: 14px;
  }

  p.inv-desc-sub {
    background-color: #e2e2e2;
    padding: 3px 7px 2px 7px;
    border-radius: 50px;
    margin-top: 5px;
    margin-bottom: 5px;
  }
  .inv-desc-title p {
    font-size: 14px;
    font-weight: bold;
  }

  .vi-kbb > .panel {
    margin-bottom: 10px;
    padding: 30px 20px 30px;
  }

  .vi-kbb p {
    line-height: 12px;
    font-size: 14px;
    line-height: 1.5;
  }

  .kbb-details {
    width: 40%;
    margin: 0 auto;
  }

  .kbb-footnote p {
    font-size: 10px;
    color: #cbcbcb;
    text-align: center;
    font-weight: 300;
    margin-top: 10px;
    width: 80%;
    margin: 20px auto 0px;
  }

  .text-center {
    text-align: center;
  }

  .kbb-details2 {
    width: 80%;
    margin: 0 auto;
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
		      <p class=""><i class="fa fa-exclamation-circle"></i> <strong>Important Instructions:</strong>  Please send payment within <strong>2 business days after receiving vehicle.</strong> <br><br>Make check payable to:<br> <strong>CARWAVE <br>
		        855 North Broadway, Suite 100 <br>
		      Escondido, CA 92025</strong></p>
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
                      <p>707-455-4500</p>
                    </div>
                    <br>
                    <div class="inv-v-buyer-dmv">
                      <p class="inv-v-title">DMV Clerk Information:</p>
                      <p>Kelly Grewer</p>
                      <p>Phone: 562-690-1141</p>
                      <p>Fax: 562-697-7294 </p>
                      <p>Dealer License #:31713</p>
                      <p>Auction Access 5 million #: 5189105</p>
                    </div>
                  </div>
                </div>
              </div><!-- inv-v-users -->
            </div> <!-- panel body -->
          </div> <!-- panel -->

        </div>
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
                      <p>Adam Harris</p>
                      <p>4761 Convoy St, San Diego, CA 92111</p>
                      <p>707-455-4500</p>
                    </div>
                    <br>
                    <div class="inv-v-seller-dmv">
                      <p class="inv-v-title">DMV Clerk Information:</p>
                      <p>Mohammad Abaali</p>
                      <p>Phone: 562-690-1141</p>
                      <p>Fax: 562-697-7294 </p>
                      <p>Dealer License #:31713</p>
                      <p>Auction Access 5 million #: 5189105</p>
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
                        <label class="col-sm-4 control-label">Purchase Date:</label>
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
                          <p class="form-control-static">CARWAVE 
													<br>855 North Broadway, Suite 100 
													<br>Escondido, CA 92025</p>
                        </div>
                      </div><!-- form-group -->

                    </div><!-- form-horizontal -->
                  </div>
                  <div class="col-sm-5">
                    <div class="form-horizontal">
                      <div class="form-group">
                        <label class="col-sm-4 control-label">Purchase Price:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static text-right">$25,000</p>
                        </div>
                      </div><!-- form-group -->

                      <div class="form-group">
                        <label class="col-sm-4 control-label">Adjustment:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static text-right">($1,000)</p>
                        </div>
                      </div><!-- form-group -->

                      <div class="form-group">
                        <label class="col-sm-6 control-label">Carwave Guarantee Fee:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static text-right">$125</p>
                        </div>
                      </div><!-- form-group -->
                      <div class="form-group total">
                        <label class="col-sm-4 control-label text-success">Total:</label>
                        <div class="col-sm-6">
                          <p class="form-control-static text-right">$24,000</p>
                        </div>
                      </div><!-- form-group -->
                      <p class="text-light"><small><em>Both parties agree to <a href="javascript:;">CARWAVE Guidelines Terms and Conditions</a>.</em></small></p>
                    </div>

                  </div>
                </div>

              </div><!-- inv-v-trans -->

            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-sm-12">
          <div class="vi-kbb">
            <div class="panel panel-default">
              <h4 class="text-center">Wholesale Lending/Retail Breakdown <br> Kelley Blue Book</h4>
              <h5 class="text-center">Effective dates: 06/22/2018 -06/28/2018</h5>
              <br>
              <p class="text-center">Zip Code 92111 </p>
              <p class="text-center"> 2018 Kia Forte LX Sedan 4D  $14,744/$17,479</p>
              <br>
              <div class="kbb-details">
                <div class="row">
                  <div class="col-sm-5">
                    <p>4-Cyl, 2.0 Liter</p>
                    <p>Automatic, 6-Spd w/Sportmatic</p>
                    <p>FWD</p>
                  </div>
                  <div class="col-sm-5 text-right">
                    <p>Included</p>
                    <p>Included</p>
                    <p>Included</p>
                  </div>
                </div>
              </div><!-- kbb-details -->
              <br>

              <div class="kbb-details2">
                <div class="row">
                  <div class="col-sm-5">
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Hill Start Assist Control</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Traction Control</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Electronic Stability Control</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>ABS (4-Wheel)</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Keyless Entry</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Air Conditioning</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Power Windows</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Power Door Locks</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Cruise Control</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Power Steering</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Power Door Locks</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Cruise Control</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Power Steering</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Cruise Control</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Power Steering</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>

                  </div><!--col-sm-6-->

                  <div class="col-sm-6">

                    <div class="row">
                      <div class="col-sm-6">
                        <p>Tilt & Telescoping Wheel</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>AM/FM Stereo</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>CD/MP3 (Single Disc)</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>SiriusXM Satellite</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Bluetooth Wireless</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p> Backup Camera</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>140/177</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Dual Air Bags</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Side Air Bags</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>F&R Head Curtain Air Bags</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Steel Wheels</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Dual Air Bags</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Side Air Bags</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>F&R Head Curtain Air Bags</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <p>Steel Wheels</p>
                      </div><!--col-sm-6-->
                      <div class="col-sm-4 text-right">
                        <p>Included</p>
                      </div><!--col-sm-6-->
                    </div>

                  </div><!--col-sm-6-->
                </div>
              </div><!-- kbb-details-2 -->
              <br><br>
              <div class="kbb-details2">
                <div class="row">
                  <div class="col-sm-7">
                    <p>Total Value without mileage</p>
                  </div>
                  <div class="col-sm-4 text-right">
                    <p>$14,884/$17,656</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-7">
                    <p>Mileage Adjustment(16,865 miles)</p>
                  </div>
                  <div class="col-sm-4 text-right">
                    <p>($298)</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-7">
                    <p>***Total Wholesale Lending/Retail Value</p>
                  </div>
                  <div class="col-sm-4 text-right">
                    <p><strong>$14,586/$17,358</strong></p>
                  </div>
                </div>
              </div> <!-- kbb-details-2 -->

              <div class="kbb-footnote">
                <p>Kelley Blue Book® KARPOWER Online's® values for .Values are subjective opinions. Kelley Blue Book assumes no liability for errors oromissions as to values, manufacturer or dealer information.©Copyright Kelley Blue Book 2015. All rights reserved.</p>
              </div>

            </div>
          </div>
        </div><!--col-sm-12-->
      </div><!-- row -->





      <div class="inv-v-disc">
        <div class="row">
          <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h5>Disclosures</h5>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">

                    <div class="inv-item">
                      <div class="inv-desc-title">
                        <p>Description</p>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                          <p>Franchise Frontline</p>
                          <p>Certified</p>
                          <p>Clean CARFAX</p>
                        </div>
                      </div>
                    </div>

                    <div class="inv-item">
                      <div class="inv-desc-title">
                        <p>Structural, Mechanical, Electrical</p>
                      </div>
                      <p class="inv-desc-sub">Frame Damage</p>
                      <div class="row">
                        <div class="col-sm-5">
                          <p>No</p>
                        </div>
                        <div class="col-sm-5">
                        </div>
                      </div>
                    </div>

                    <div class="inv-item">
                      <div class="inv-desc-title">
                        <p>Exterior</p>
                      </div>


                      <p class="inv-desc-sub">Exterior Damage</p>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Quarter Panel - Left</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Scratch Heavy</p>
                        </div>
                        <div class="col-sm-3">
                          <p>2" to 3"</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Hood</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Scratch Heavy</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Multiple</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Rear Door Right</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Scratch Heavy</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Multiple</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Deck Lid</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Scratch Heavy</p>
                        </div>
                        <div class="col-sm-3">
                          <p>4" to 5"</p>
                        </div>
                      </div>

                      <p class="inv-desc-sub">Paintwork</p>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Quarter Panel - Right</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Substandard - Fish Eye</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Light</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Rear Door - Right</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Bolts turned</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Light</p>
                        </div>
                      </div>

                      <p class="inv-desc-sub">Tires</p>
                      <div class="row">
                        <div class="col-sm-5">
                          <p>Tires Good 5/32" or ></p>
                        </div>
                        <div class="col-sm-5">
                          <p>Yes</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-5">
                          <p>All tires match (brand and size)? </p>
                        </div>
                        <div class="col-sm-5">
                          <p>Yes</p>
                        </div>
                      </div>
                    </div><!-- inv-item -->
                  </div>

                  <div class="col-sm-5">
                    <div class="inv-item">
                      <div class="inv-desc-title">
                        <p>Interior</p>
                      </div>
                      <p class="inv-desc-sub">Interior Damage</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <p>None</p>
                        </div>
                        <div class="col-sm-6">
                        </div>
                      </div>

                      <p class="inv-desc-sub">Odor</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <p>None</p>
                        </div>
                        <div class="col-sm-6">
                        </div>
                      </div>

                      <p class="inv-desc-sub">Keys</p>
                      <div class="row">
                        <div class="col-sm-3">
                          <p>Keyless</p>
                        </div>
                        <div class="col-sm-3">
                          <p>2</p>
                        </div>
                        <div class="col-sm-3">
                          <p>Good</p>
                        </div>
                      </div>

                      <p class="inv-desc-sub">Manuals</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <p>No</p>
                        </div>
                        <div class="col-sm-6">
                        </div>
                      </div>
                    </div><!-- inv-item -->

                    <div class="inv-item">
                      <div class="inv-desc-title">
                        <p>Aftermarket</p>
                      </div>
                      <p class="inv-desc-sub">Aftermarket Items</p>
                      <div class="row">
                        <div class="col-sm-6">
                          <p>Exhaust</p>
                          <p>Brake Controller</p>
                          <p>Amp/Sub Woofer</p>
                        </div>
                      </div>                          
                    </div><!-- inv-item -->

                    <div class="inv-item">
                      <div class="inv-desc-title">
                        <p>Other Comments</p>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                      </div>                          
                    </div><!-- inv-item -->

                  </div>
                </div>
              </div>

            </div><!-- invoice invoice-modal -->
          </div>
        </body>
        </html>

<?php include("head.php") ?>

    <!-- <div class="nav-blue">
      <div class="container">
        <div class="col-sm-4 col-xs-6">
          <h4 class="page-title">FrontlineSSS Auction</h4>
        </div>
        <div class="col-sm-4 col-xs-6">
          <div class="auc-time">
            <p class="text-xs">Auction Time Remaining</p>
            <p class="text-lg">02:06:44</p>
          </div>
        </div>
        <div class="col-xs-4">
          <span class="label label-default">0</span>

        </div>
      </div>
    </div> -->

    <div class="modal fade modal-alert modal-fs" id="modal-gallery" tabindex="-1" role="dialog" aria-labelledby="modal-gallery">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- <div class="modal-header">
            
            <h4 class="modal-title" id="myModalLabel"><i class="fa text-danger fa-exclamation-triangle"></i> Alert</h4>
          </div> -->
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
            <div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Main Photos</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Damages</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home"> 
                  <div class="row">
                    <div class="col-md-12">
                      <!-- <img class="img-responsive" src="slider/demo/images/car1.jpg"> -->
                      <section class="slider">
                        <div id="slider2" class="flexslider">
                          <ul class="slides" id="animated-thumbnails">
                            <li>
                              <a href="slider/demo/images/car1.jpg">
                                <img class="img-responsive" src="slider/demo/images/car1.jpg" alt="Thumb-1">
                              </a>
                            </li>
                            <li>
                              <a href="slider/demo/images/car2.jpg">
                                <img class="img-responsive" src="slider/demo/images/car2.jpg" alt="Thumb-1">
                              </a>
                            </li>
                            <li>
                              <img src="slider/demo/images/car1.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car2.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car3.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car4.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car6.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car7.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car8.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car9.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car10.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car11.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car12.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car13.jpg" />
                            </li>
                          </ul>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile"> 
                  <div class="row">
                    <div class="col-md-9">
                      <!-- <img class="img-responsive" src="slider/demo/images/car1.jpg"> -->
                      <section class="slider">
                        <div id="slider2" class="flexslider">
                          <ul class="slides" id="animated-thumbnails">
                            <li>
                              <a href="slider/demo/images/car1.jpg">
                                <img class="img-responsive" src="slider/demo/images/car1.jpg" alt="Thumb-1">
                              </a>
                            </li>
                            <li>
                              <a href="slider/demo/images/car2.jpg">
                                <img class="img-responsive" src="slider/demo/images/car2.jpg" alt="Thumb-1">
                              </a>
                            </li>
                            <li>
                              <img src="slider/demo/images/car1.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car2.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car3.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car4.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car6.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car7.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car8.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car9.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car10.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car11.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car12.jpg" />
                            </li>
                            <li>
                              <img src="slider/demo/images/car13.jpg" />
                            </li>
                          </ul>
                        </div>
                      </section>
                    </div>
                    <div class="col-md-3">
                      <h4>Description</h4>
                      <p>Description</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
            <button type="button" class="btn btn-primary">Okay</button>
          </div> -->
        </div>
      </div>
    </div>

    <div class="modal fade modal-alert" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"><i class="fa text-danger fa-exclamation-triangle"></i> Alert</h4>
          </div>
          <div class="modal-body">
           Lorem ipsum.
         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
          <button type="button" class="btn btn-primary">Okay</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: none;padding-bottom: 0;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">2011 Volkswagen CC Sport Sedan 4D</h4>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" role="tablist" >
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false" style="font-family: 'Archivo';font-weight: 600;">Main  Photos</a></li>
            <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="true" style="font-family: 'Archivo';font-weight: 600;">Additional Photos</a></li>
          </ul>
          <br>

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive" style="width:100%; margin: 0 auto;">
              <ul class="photo-con list-unstyled">
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/normal/WVWMP7AN2BE718204_4a90d9b2-3efc-4b48-b009-f1f252e4442d.jpg" class="img-responsive" ></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/normal/WVWMP7AN2BE718204_e549fd2c-c5c8-4db8-bf99-de112c827b34.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
              </ul>
              <div style="width: 100%;display: block;position: relative;top: -83px;">
                <span class="fa fa-angle-left pull-left fa-3x"></span>
                <span class="fa fa-angle-right pull-right fa-3x"></span>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
              <div class="row">
                <div class="col-md-7">
                  <img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive">
                </div>
                <div class="col-md-5">
                  <div class="row">
                    <div class="col-md-1"><h4><i class="fa fa-exclamation-triangle text-yellow"></i></h4></div>
                    <div class="col-md-11"><h4>Power Locks</h4><br>
                      <p>Lock Left Front - Non-Op</p><br>
                      <button class="btn btn-danger"> Delete this disclosure</button>
                    </div>
                  </div>



                </div>
              </div>

              <ul class="photo-con list-unstyled">
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/normal/WVWMP7AN2BE718204_4a90d9b2-3efc-4b48-b009-f1f252e4442d.jpg" class="img-responsive" ></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/normal/WVWMP7AN2BE718204_e549fd2c-c5c8-4db8-bf99-de112c827b34.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
                <li><img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WVWMP7AN2BE718204_cf84c77f-80f5-4bea-809f-da9c26fb230f.jpg" class="img-responsive"></li>
              </ul>
              <div style="width: 100%;display: block;position: relative;top: -83px;">
                <span class="fa fa-angle-left pull-left fa-3x"></span>
                <span class="fa fa-angle-right pull-right fa-3x"></span>
              </div>

            </div>
          </div>


        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <!-- <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dealers America</a>
        </div>

       
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Auction</a></li>
                <li><a href="#">Direct</a></li>
                <li><a href="#">Cars I Want</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sell <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Cars I Sell</a></li>
                <li><a href="#">Car Offers</a></li>
                <li><a href="#">Archive</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Add Car</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Transactions <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Cars I Sold</a></li>
                <li><a href="#">Car I Bought</a></li>
              </ul>
            </li>
            <li class=""><a href="#">Dealers</a></li>
            <li class=""><a href="#">My Dealerships</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> krizzel@saperium.com <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Account</a></li>
                <li><a href="#">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->

    <div class="text-center title">
      <h1>V2 UI Guidelines</h1>
      <p>Prepared by: Krizzel Jane Bigol</p>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-gallery">
      Modal gallery
    </button>

    <div class="container">
      <div class="panel colors">
        <div class="panel-heading">
          <h3>Color Scheme</h3>
        </div>
        <div class="panel-body">
          <div class="row">

            <div class="col-md-6">
              <h4>Primary and Highlight Color</h4>
              <br>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color primary one"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color primary two"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color primary three"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color primary four"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color primary yellow"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>

            </div>

            <div class="col-md-6">
              <h4>Neutrals and Warnings</h4>
              <br>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color neutral dark"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color neutral normal"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color neutral light"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="color red"></div>
                </div>
                <div class="col-sm-9">
                  <p></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="panel" id="typography">
        <div class="panel-heading">
          <h3>Typography</h3>
        </div>
        <div class="panel-body">
          <div class="row">

            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-5">
                  <h1 class="Archivo"> AaBbCc</h1>
                </div>
                <div class="col-sm-7">
                  <h3 class="Archivo">Archivo</h3>
                  <ul class="Archivo">
                    <li>Used mainly for Headings, Buttons, Header texts, Marketing Display texts.</li>
                    <li><span class="header-normal">Normal font-weight: 500</span></li>
                    <li><span class="header-semi">Semi-bold font-weight: 600</span></li>
                    <li><span class="header-bold">Bold font-weight: 700</span></li>
                    <li>letter-spacing: 0px;</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <h1 class="Roboto"> AaBbCc</h1>
                </div>
                <div class="col-sm-7">
                  <h3 class="Roboto">Roboto</h3>
                  <ul class="Roboto">
                    <li>Main Font Style - used for Paragraphs, Alerts, Links, etc</li>
                    <li><span>Light font-weight: 300</span></li>
                    <li><span>Normal font-weight: 400</span></li>
                    <li><span>Bold font-weight: 500 or 700</span></li>
                  </ul>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <h4>Headings</h4>
                  <h1>H1 Heading (36px)</h1>
                  <h2>H2 Heading (30px)</h2>
                  <h3>H3 Heading (30px)</h3>
                  <h4>H4 Heading (30px)</h4>
                  <h5>H5 Heading (30px)</h5>
                  <h6>H6 Heading (30px)</h6>
                </div>
                <div class="col-sm-8">
                  <h4>Paragraph</h4>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit <a href="#" class="btn-link">This is a button link in a paragraph.</a> lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
                  <hr>
                  <p class="text-lg">Paragraph text-lg</p>
                  <p class="text-md">Paragraph text-md</p>
                  <p class="text-sm">Paragraph text-sm</p>
                  <p class="text-xs">Paragraph text-xs</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <h4>Contextual Colors</h4>
                  <p class="text-primary-one">text-primary-one</p>
                  <p class="text-primary-two">text-primary-two</p>
                  <p class="text-primary-three">text-primary-three</p>
                  <p class="text-primary-four">text-primary-four</p>
                  <p class="text-yellow">text-yellow</p>
                  <p class="text-white bg-primary-one">text-white</p>
                </div>
                <div class="col-sm-8">
                  <h4>&nbsp;</h4>
                  <p class="text-dark">text-primary-one</p>
                  <p class="text-normal">text-primary-two</p>
                  <p class="text-light">text-primary-three</p>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4">
                  <h4>Contextual Colors</h4>
                  <p class="text-white bg-primary-one">text-primary-one</p>
                  <p class="text-white bg-primary-two">text-primary-two</p>
                  <p class="text-white bg-primary-three">text-primary-three</p>
                  <p class="text-white bg-primary-four">text-primary-four</p>
                  <p class="text-white bg-yellow">text-yellow</p>
                  <p class="text-white bg-white">text-white</p>
                </div>
                <div class="col-sm-8">
                  <h4>&nbsp;</h4>
                  <p class="text-white bg-dark">text-primary-one</p>
                  <p class="text-white bg-normal">text-primary-two</p>
                  <p class="text-white bg-light">text-primary-three</p>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="panel">
        <div class="panel-heading">
          <h3>Buttons</h3>
        </div>
        <div class="panel-body">

          <div class="row">
            <div class="col-md-12">
              <h4>Primary Button</h4>
              <p>For happy path call-to-action buttons (i.e "Save Changes", "Buy Now")</p>
              <button class="btn btn-primary btn-lg">btn btn-primary btn-lg</button>
              <button class="btn btn-primary">btn btn-primary</button>
              <button class="btn btn-primary btn-sm">btn btn-primary btn-sm</button>
              <button class="btn btn-primary btn-xs">btn btn-primary btn-xs</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Danger / Warning Button</h4>
              <p>For warning action buttons (i.e "Delete")</p>
              <button class="btn btn-danger btn-lg">btn btn-danger btn-lg</button>
              <button class="btn btn-danger">btn btn-danger</button>
              <button class="btn btn-danger btn-sm">btn btn-danger btn-sm</button>
              <button class="btn btn-danger btn-xs">btn btn-danger btn-xs</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Yellow Button</h4>
              <p>For highlighted action buttons, Promotional action buttons and other buttons (i.e "I Want a Demo", "Proxy Bid")</p>
              <button class="btn btn-yellow btn-lg">btn btn-yellow btn-lg</button>
              <button class="btn btn-yellow">btn btn-yellow</button>
              <button class="btn btn-yellow btn-sm">btn btn-yellow btn-sm</button>
              <button class="btn btn-yellow btn-xs">btn btn-yellow btn-xs</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Default Button</h4>
              <button class="btn btn-default btn-lg">btn btn-default btn-lg</button>
              <button class="btn btn-default">btn btn-default</button>
              <button class="btn btn-default btn-sm">btn btn-default btn-sm</button>
              <button class="btn btn-default btn-xs">btn btn-default btn-xs</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Success Button</h4>
              <p>We will use this for "BID" buttons for Auctions</p>
              <button class="btn btn-success btn-lg">btn btn-success btn-lg</button>
              <button class="btn btn-success">btn btn-success</button>
              <button class="btn btn-success btn-sm">btn btn-success btn-sm</button>
              <button class="btn btn-success btn-xs">btn btn-success btn-xs</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Button Links</h4>
              <button class="btn btn-link btn-lg">btn btn-link btn-lg</button>
              <button class="btn btn-link">btn btn-link</button>
              <button class="btn btn-link btn-sm">btn btn-link btn-sm</button>
              <button class="btn btn-link btn-xs">btn btn-link btn-xs</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <h4>Disabled Button</h4>
              <button class="btn btn-primary btn-lg" disabled="disabled">Disabled Button Large</button>
              <button class="btn btn-yellow" disabled="disabled">Disabled Button Normal</button>
              <button class="btn btn-default btn-sm" disabled="disabled">Disabled Button Small</button>
              <button class="btn btn-danger btn-xs" disabled="disabled">Disabled Button Extra-Small</button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2">
              <div class="btn-group">
                <button type="button" class="btn btn-success">Action</button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
            
          </div>

        </div>
      </div>
    </div>


    <div class="container">
      <div class="panel">
        <div class="panel-heading">
          <h3>Forms</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6">
              <h4>Input Fields</h4>
              <div class="row">
                <div class="col-sm-12">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email with Label">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password with Label">
                    </div>

                    <hr>

                    <div class="form-group">
                      <input type="text" class="form-control input-lg" id="exampleInputPassword1" placeholder="input-lg">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="input normal">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control input-sm" id="exampleInputPassword1" placeholder="input-sm">
                    </div>

                  </form>
                </div>
              </div>
              
              <h4>Select</h4>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Option:</label>
                    <select class="form-control" id="exampleInputPassword1" placeholder="Select Option">
                      <option>Select with Label</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <hr>
                  <div class="form-group">
                    <select class="form-control input-lg" id="exampleInputPassword1" placeholder="Select Large">
                      <option>Select Large</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div class="form-group">
                   <select class="form-control input" id="exampleInputPassword1" placeholder="Select Normal">
                    <option>Select Normal</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <div class="form-group">
                 <select class="form-control input-sm" id="exampleInputPassword1" placeholder="Select Small">
                  <option>Select Small</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

            </div>

          </div>

        </div>

        <div class="col-md-6">
          <h4>Checkboxes</h4>
          <p>Please follow the same HTML code for this.</p>
          <div class="row">
            <div class="col-sm-12">
              <div class="checkbox">
                <input type="checkbox" name="group2" id="checkbox-1">
                <label for="checkbox-1"><span class="check">Checkbox 1</span></label>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="group2" id="checkbox-2">
                <label for="checkbox-2"><span class="check">Checkbox 2</span></label>
              </div>
              <div class="checkbox">
                <input type="checkbox" name="group2" id="checkbox-3">
                <label for="checkbox-3"><span class="check">Checkbox 3</span></label>
              </div>
            </div>
          </div>

          <h4>Radio Buttons</h4>
          <p>Please follow the same HTML code for this.</p>
          <div class="row">
            <div class="col-sm-12">
              <label class="radio "> 
                <input type="radio" name="sex" value="male" checked>
                <span> Male </span> 
              </label>
              <label class="radio "> 
                <input type="radio" name="sex" value="female">
                <span>Female </span> 
              </label>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="panel">
    <div class="panel-heading">
      <h3>Alerts</h3>
    </div>
    <div class="panel-body">
      <div class="row">

        <div class="col-md-6">
          <p class="alert alert-danger">alert alert-danger &nbsp;<button class="btn btn-xs btn-danger">btn btn-xs btn-danger</button></p>
          <p class="alert alert-info">alert alert-info</p>
          <p class="alert alert-success">alert alert-success</p>
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            alert alert-warning alert-dismissible 
          </div>      

        </div>
        <div class="col-sm-6">              
          <div class="alert alert-danger" role="alert">
            <strong>Paragraph Alert</strong><br><br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit <br><br><a href="#" class="btn-link">This is a button link in a paragraph.</a> lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
          </div>

          <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Dismissible Paragraph Alert</strong><br><br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit <br><br><a href="#" class="btn-link">This is a button link in a paragraph.</a> lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
        Modal Large
      </button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
        Modal Medium
      </button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
        Modal Small
      </button>
      <h4>MODAL ALERTS</h4>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-alert">
        modal-alert
      </button>
    </div>
  </div>
  <br>

      <!-- <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">Col-md-12</div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-2">
          <div class="panel">
            <div class="panel-heading">col-lg-2</div>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="panel">
            <div class="panel-heading">col-lg-10</div>
          </div>
        </div>
      </div> -->

    </div>

    <div class="container">
      <div class="panel">
        <div class="panel-heading">
          <h3>Tabs</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-12">

              <div class="blue-tab">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All (1,200)</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Watchlist (26)</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">My Cars for Sale (45)</a></li>
                  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hidden (5)</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home"><br>All</div>
                  <div role="tabpanel" class="tab-pane" id="profile"><br>Watchlist</div>
                  <div role="tabpanel" class="tab-pane" id="messages"><br>My Cars for Sale</div>
                  <div role="tabpanel" class="tab-pane" id="settings"><br>Hidden</div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="panel">
        <div class="panel-heading">
          <h3>Tabs</h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-12">

              <div class="">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All <br class="visible-xs visible-sm">(1,200)</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Watchlist <br class="visible-xs visible-sm">(26)</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">My Offer<br class="visible-xs visible-sm"> (45)</a></li>
                  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Deleted<br class="visible-xs visible-sm"> (5)</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home"><br>All</div>
                  <div role="tabpanel" class="tab-pane" id="profile"><br>Watchlist</div>
                  <div role="tabpanel" class="tab-pane" id="messages"><br>My Cars for Sale</div>
                  <div role="tabpanel" class="tab-pane" id="settings"><br>Hidden</div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

<!--     <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="panel">test</div>
        </div>
        <div class="col-md-10">
          <div class="panel">test</div>
        </div>
      </div>
    </div> -->

<!-- <div class="container">
  <div class="panel">
    <div class="row">
      <div class="col-md-12">
        <br>
        <div class="toggler">
          <div id="effect" class="ui-widget-content ui-corner-all">
            <h3 class="ui-widget-header ui-corner-all">Effect</h3>
            <p>
              Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
            </p>
          </div>
        </div>
         
        <select name="effects" id="effectTypes">
          <option value="highlight">Highlight</option>
          <option value="blind">Blind</option>
          <option value="bounce">Bounce</option>
          <option value="clip">Clip</option>
          <option value="drop">Drop</option>
          <option value="explode">Explode</option>
          <option value="fade">Fade</option>
          <option value="fold">Fold</option>          
          <option value="puff">Puff</option>
          <option value="pulsate">Pulsate</option>
          <option value="scale">Scale</option>
          <option value="shake">Shake</option>
          <option value="size">Size</option>
          <option value="slide">Slide</option>
          <option value="transfer">Transfer</option>
        </select>
         
        <button id="button" class="ui-state-default ui-corner-all">Run Effect</button>
      </div>
    </div>
  </div>
</div> -->
<div style="height:100vh;"></div>

<div class="container">
  <div class="panel">
    <br>
    <!-- <div class="row">
      <div class="col-xs-3">
        <div class="form-group">
          <label for="exampleInputPassword1">Custom Mileage:</label>
          <form class="form-inline ">
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail3">From</label>
              <input type="email" class="form-control" id="exampleInputEmail3" placeholder="From" style="max-width: 100px;">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword3">To</label>
              <input type="password" class="form-control" id="exampleInputPassword3" placeholder="To" style="max-width: 100px;">
            </div>
            <button type="submit" class="btn btn-default">Go</button>
          </form>
        </div>
      </div>
    </div> -->
    <br>
    <div class="row">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-2">
        <!-- <div class="btn-group input-group">
          <button type="button" class="btn btn-sm btn-default" data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="top"><i class="fa fa-pencil"></i></button>
          <button type="button" class="btn btn-sm btn-success">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bid $9,200&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </button>                
        </div>
        <br>
         <div class="input-group">
          
          <button type="button" class="btn btn-sm btn-success">
            &nbsp;&nbsp;&nbsp;Bid $9,200&nbsp;&nbsp;&nbsp;&nbsp;
          </button> &nbsp;
          <button type="button" class="btn btn-sm btn-default" data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="top"><i class="fa fa-pencil"></i></button>               
        </div> -->
        <br>
        <div class="input-group" style="margin-top:10px;">
          <input type="text" class="form-control input-sm text-right" placeholder="$9,000"  data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="bottom">
          <span class="input-group-btn">
            <button class="btn btn-success btn-sm" type="button">&nbsp;&nbsp;&nbsp;Bid&nbsp;&nbsp;&nbsp;&nbsp;</button>
          </span>
        </div><!-- /input-group -->
        <div class="input-group" style="margin-top:10px;">
          <input type="text" class="form-control input-sm text-right" placeholder=""  data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="bottom">
          <span class="input-group-btn">
            <button class="btn btn-yellow btn-sm" type="button">Autobid</button>
          </span>
        </div><!-- /input-group -->
        <br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  <br>

</div>
</div>



<div class="container" style="height:100vh;"></div>

<div class="container">
  <div class="upper-cont">
    <button class="btn btn-default">Filter <i class="fa fa-sliders-h"></i> <p class="badge">10</p></button>
    <!-- Single button -->
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sort: Most Recent <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>

    <div class="btn-group pull-right" role="group" aria-label="...">
      <button type="button" class="btn btn-default"><i class="fa fa-angle-left"></i></button>
      <button type="button" class="btn btn-default"><i class="fa fa-angle-right"></i></button>
    </div>
  </div>

</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-6">
      <div class="panel vehicle">
        <div class="row">
          <div class="col-xs-12">
            <img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/WDDUG8CB2GA267756_0337c9d2-05e5-4013-ad10-63783b5d8f55.jpg" class="img-responsive">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="vehicle-name">
              <div class="row">
                <div class="col-xs-11">
                  <p>2001 Ford F150 Super Cab Short Bed 4D 2WD V8, 5.4 Liter</p>
                </div>
                <div class="col-xs-1">
                  <i class="fa fa-angle-down"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="vehicle-inner">
          <div class="row">
            <div class="col-xs-6">
              <div class="auction-status outbid">
                <h6>OUTBID</h6>
                <h5>$ 99,000</h5>
              </div>
            </div>
            <div class="col-xs-6">

              <div class="input-group" style="margin-top:10px;">
                <input type="text" class="form-control input-sm" placeholder="$9,000"  data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="bottom">
                <span class="input-group-btn">
                  <button class="btn btn-success btn-sm" type="button">&nbsp;&nbsp;&nbsp;Bid&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </span>
              </div><!-- /input-group -->
              <div class="input-group" style="margin-top:10px;">
                <input type="text" class="form-control input-sm" placeholder=""  data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="bottom">
                <span class="input-group-btn">
                  <button class="btn btn-yellow btn-sm" type="button">Autobid</button>
                </span>
              </div><!-- /input-group -->

            </div>

          </div>
          <br>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-sm-6">
      <div class="panel vehicle">
        <div class="row">
          <div class="col-xs-12">
            <img src="https://portalvhdsmvc40zw13wg13.blob.core.windows.net/vimages/large/1N4AL3AP3FN915211_8e3912c2-6f5a-47d6-84ef-03e38b582fa8.jpg" class="img-responsive">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="vehicle-name">
              <div class="row">
                <div class="col-xs-11">
                  <p>2001 Ford F150 Super Cab Short Bed 4D 2WD V8, 5.4 Liter</p>
                </div>
                <div class="col-xs-1">
                  <i class="fa fa-angle-down"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="vehicle-inner">
          <div class="row">
            <div class="col-xs-6">
              <div class="auction-status curbid">
                <h6>CURRENT BID</h6>
                <h5>$ 99,000</h5>
              </div>
            </div>
            <div class="col-xs-6">
              <div class="input-group" style="margin-top:10px;">
                <input type="text" class="form-control input-sm text-right" placeholder="$9,000"  data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="bottom">
                <span class="input-group-btn">
                  <button class="btn btn-success btn-sm" type="button">&nbsp;&nbsp;&nbsp;Bid&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </span>
              </div><!-- /input-group -->
              <div class="input-group" style="margin-top:10px;">
                <input type="text" class="form-control text-right input-sm" placeholder=""  data-toggle="popover" title="Edit Bid Amount" data-content="Your Bid is less than the minimum acceptable bid. The minimum bid is $99,500" data-placement="bottom">
                <span class="input-group-btn">
                  <button class="btn btn-yellow btn-sm" type="button">Autobid</button>
                </span>
              </div><!-- /input-group -->
            </div>
          </div>
          <br> 
        </div>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <table class="table">
    <tbody>
      <tr>
        <td><p>Test</p><i class="glyphicon glyphicon-edit"></i></td>
        <td><p>Test</p><i class="glyphicon glyphicon-edit"></i></td>
      </tr>
    </tbody>
  </table>
</div>




<script type="text/javascript">
 $(function () {
  $('[data-toggle="popover"]').popover()
})
 $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

 $('.table > tbody > td').hover(function() {
  $('.table > tbody > tr > td > i').show();
})
</script>
<script>


  $(document).ready(function(){
    $('#modal-gallery a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    
  });
  $(window).load(function(){
    // $('#carousel2').flexslider({
    //   animation: "slide",
    //   controlNav: false,
    //   animationLoop: false,
    //   slideshow: false,
    //   itemWidth: 100,
    //   itemMargin: 5,
    //   asNavFor: '#slider2',
    //   prevText: "",
    //   nextText: ""
    // });

    $('#slider2').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel2",
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });

</script>
<?php include("footer.php") ?>
</body>
</html>
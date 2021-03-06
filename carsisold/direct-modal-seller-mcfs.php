<div class="modal fade direct-modal" id="direct-modal-seller-mcfs" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">


    <div class="modal-content" >

      <span class="modal-content-seller">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="dm-vi-header">
            <div class="dm-vi-header-icon">
              <img src="images/car1.jpg" >
            </div>

            <div class="dm-vi-header-text">
              <h5>2012 Ram 1500 Quad Cab ST Pickup</h5>
              <!-- <p><small>Pacific Honda</small></p> -->
            </div>
          </div>
        </div>

        <div class="modal-body" id="sticky-main">
          <a href="javascript:;" class="buyer-row" onclick="$('.modal-content-seller').hide(); $('.modal-content-seller-inner').fadeIn();">
            <div class="buyer-row-img buyer-row-col">
              <img src="images/pacifichonda.jpg" class="img-responsive">
              <img src="images/user2.jpg" class="user-thumb">
            </div>
            <div class="buyer-row-desc buyer-row-col">
              <h5>Adam Harris (Pacific Honda)</h5>
              <p class="buyer-row-date pull-right">June 6, 2018, 9:04AM</p>
              <p class="buyer-icon-arrow"><span class="notif-badge">3</span><i class="fa fa-angle-right"></i></p>
              <div class="msg-bubble-stat primary">
                <p>Mike Requested Adjustment $1,000</p>
              </div>
              <div class="msg-bubble-stat default">
                <p>Your Counter Adjustment $500</p>
              </div>
              <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
          </a>

          <a href="javascript:;" class="buyer-row" onclick="$('.modal-content-seller').hide(); $('.modal-content-seller-inner').fadeIn();">
            <div class="buyer-row-img buyer-row-col">
              <img src="images/mcac.jpg" class="img-responsive">
              <img src="images/markc.jpg" class="user-thumb">
            </div>
            <div class="buyer-row-desc buyer-row-col">
              <h5>Mark Christopher (Mark Christopher Chevrolet Buick GMC Cadillac)</h5>
              <p class="buyer-row-date pull-right">June 6, 2018, 9:04AM</p>
              <p class="buyer-icon-arrow"><i class="fa fa-angle-right"></i></p>
              <div class="msg-bubble-stat primary">
                <p>Buyer's Offer $12,000</p>
              </div>
              <div class="msg-bubble-stat grey">
                <p>Car no longer available</p>
              </div>
              <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
            </div>
          </a>
        </div>

        <div class="dm-footer modal-footer">
          <div class="row">
            <div class="col-sm-6">
              <div class="dropdown element" style="margin-bottom: 10px;">
                <div class="btn-group dropup btn-block ">
                  <button class="btn btn-default disabled btn-block dropdown-toggle" disabled="disabled" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Select action for all &nbsp;
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="javascript:;" onclick="$('.dm-footer>#select-action').hide();$('#dm-adjustment').slideDown();">Counter Adjustment</a></li>
                    <li><a href="javascript:;" onclick="$('.dm-footer>#select-action').hide();$('#dm-accept-adj').slideDown();">Accept Adjustment</a></li>
                    <li><a href="javascript:;" onclick="$('.dm-footer>#select-action').hide();$('#dm-withdraw-adj').slideDown();">Withdraw Adjustment</a></li>
                    <li><a href="javascript:;">Request Arbitration</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </span><!-- modal-content-seller -->


      <span class="modal-content-seller-inner">
        <div class="modal-header">
          <button type="button" class="modal-content-back btn-link-default" onclick="$('.modal-content-seller-inner').hide(); $('.modal-content-seller').fadeIn();">
            <i class="fa fa-angle-left" ></i>
          </button>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <div class="dm-vi-header">
            <div class="dm-vi-header-icon">
              <img src="images/pacifichonda.jpg" class="img-responsive">
            </div>

            <div class="dm-vi-header-text">
              <h5>Pacific Honda</h5>
            </div>
          </div>
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
                <h6>2012 Ram 1500 Quad Cab ST Pickup   | 50,000 mi | WAUGB28D2XA314150 
                </h6>
                <p class="dm-vi-p hidden-sm hidden-xs"><small>Asking Price: $25,000  |  KBB/KBB with Miles: $25,700/$25,300</small></p>
              </div>
            </div>
            <div class="col-xs-1">
              <a href="javascript:;" class="pull-right btn-link-default hidden-lg hidden-md" type="button" onclick="$('.dm-vi-p').toggleClass('hidden-xs hidden-sm');"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>

        <div class="dm-actions">
          <div class="dm-actions-inner">
            <div class="row">
              <div class="col-xs-12">
                <button class="btn btn-default btn-sm">Leave Review <i class="fa fa-star text-yellow"></i></button>
                <div id="select-action" class="pull-right select-action">
                  <div class="dropdown element">
                    <div class="btn-group dropdown btn-block">
                      <button class="btn btn-default btn-block btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        More &nbsp;
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="javascript:;" onclick="$('.dm-message').slideDown(); $('.dm-footer>#select-action').hide(); $('.dm-actions').slideUp(); $('#dm-adjustment').slideDown();">Propose Adjustment</a></li>
                        <!-- <li><a href="javascript:;" onclick="$('.dm-footer>#select-action').hide();$('#dm-adjustment').slideDown();">Counter Adjustment</a></li>
                          <li><a href="javascript:;" onclick="$('.dm-footer>#select-action').hide();$('#dm-accept-adj').slideDown();">Accept Adjustment</a></li> -->
                          <li><a href="javascript:;" onclick=" $('.dm-actions').slideUp(); $('.dm-footer>#select-action').hide();$('#dm-withdraw-adj').slideDown();">Cancel Adjustment</a></li>
                          <li><a href="javascript:;">Request Arbitration <br>
                            <small class="text-light"><em>Third party will be involved</em></small></a>
                          </li>
                          <li><a href="javascript:;">Cancel Arbitration</a>
                          </li>
                          <li><a href="javascript:;">Car no longer available</a>
                          </li>
                          <li><a href="javascript:;">Unwind<br>
                            <small class="text-danger"><em>admin view only</em></small></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- <script type="text/javascript">
          $(document).ready(function(){
            $('.redAdj').click(function(){
              $(this).parents().find().closest('.dm-message').slideDown();
              $(this).closest('.dm-actions').slideUp();
              $(this).parents().find('.modal-footer').closest('#dm-adjustment').slideDown();
              alert('akshdg');
            });
          });
        </script> -->

        <div class="modal-body" id="sticky-main">

          <div class="msg-thread">

            <div class="row">
              <div class="col-xs-11">
                <div class="dealer">
                  <div class="row">
                    <div class="col-xs-1 no-padding-right">
                      <div class="msg-icon">
                        <img src="images/user2.jpg" class="img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-11 padding-left-md">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat primary">
                          <p>Mike's Offer $12,000</p>
                        </div>
                        
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>

                        <div class="msg-bubble-body">
                          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1"></div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->

            <div class="row">
              <div class="col-sm-1 col-xs-0"></div>
              <div class="col-sm-11 col-xs-11">
                <div class="user">
                  <div class="row">
                    <div class="col-sm-11 col-xs-11">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat default">
                          <p>You countered $13,000</p>
                        </div>
                        
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>
                        <div class="msg-bubble-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date pull-right">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1 no-padding-left">
                      <div class="msg-icon">
                        <img src="images/ryan.png" class="img-responsive">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div><!-- .row -->

            <div class="row">
              <div class="col-xs-11">
                <div class="dealer">
                  <div class="row">
                    <div class="col-xs-1 no-padding-right">
                      <div class="msg-icon">
                        <img src="images/user2.jpg" class="img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-11 padding-left-md">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat primary">
                          <p>Mike's Counter Offer $12,000</p>
                        </div>
                        
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>

                        <div class="msg-bubble-body">
                          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1"></div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->


            <div class="row">
              <div class="col-sm-1 col-xs-0"></div>
              <div class="col-sm-11 col-xs-12">
                <div class="user">
                  <div class="row">
                    <div class="col-sm-11 col-xs-11">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat sold">
                          <p>Sold $12,000</p>
                        </div>
                        
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>
                        <div class="msg-bubble-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date pull-right">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1 no-padding-left">
                      <div class="msg-icon">
                        <img src="images/ryan.png" class="img-responsive">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->



            <div class="row">
              <div class="col-xs-11">
                <div class="dealer">
                  <div class="row">
                    <div class="col-xs-1 no-padding-right">
                      <div class="msg-icon">
                        <img src="images/user2.jpg" class="img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-11 padding-left-md">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat primary">
                          <p>Buyer Requested Adjustment $2,000</p>
                        </div>
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>

                        <div class="msg-bubble-body adj">             
                          <div class="dm-vi-actions-content no-padding">

                            <div class="row">
                              <!-- <div class="col-sm-1 col-xs-2 padding-right-sm">
                                <div class="dm-vi-icon">
                                  <a href="javascript:;" class="btn-link-default">
                                    <img src="images/car1.jpg" class="img-responsive">
                                  </a>
                                </div>
                              </div> -->
                              <div class="col-sm-9 col-xs-9">
                                <p>Original Sale Price</p>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                <p class="text-right"><strong>$5,000</strong></p>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                <p class="text-right"><strong>($2,000)</strong></p>
                              </div>
                            </div>

                            <hr>
                            
                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Buyer Requested Selling Price:</p>
                              </div>
                              <div class="col-xs-3 col-xs-3">
                                <p class="text-right text-primary-four"><strong>$3,000</strong></p>
                              </div>
                            </div>
                          </div>
                        </div><!-- dm-vi-actions-content -->
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1"></div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->



            <div class="row">
              <div class="col-sm-1 col-xs-0"></div>
              <div class="col-sm-11 col-xs-12">
                <div class="user">
                  <div class="row">
                    <div class="col-sm-11 col-xs-12">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat default">
                          <p>You countered $2,000</p>
                        </div>

                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>

                        <div class="msg-bubble-body adj">             
                          <div class="dm-vi-actions-content no-padding">

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Original Sale Price</p>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                <p class="text-right"><strong>$5,000</strong></p>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                <p class="text-right"><strong>($2,000)</strong></p>
                              </div>
                            </div>

                            <hr>
                            
                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Your Proposed Selling Price:</p>
                              </div>
                              <div class="col-xs-3 col-xs-3">
                                <p class="text-right text-primary-four"><strong>$3,000</strong></p>
                              </div>
                            </div>

                          </div><!-- dm-vi-actions-content -->
                        </div>
                      </div><!-- msg-bubble -->

                      <div class="msg-bubble-date pull-right">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1 no-padding-left">
                      <div class="msg-icon">
                        <img src="images/ryan.png" class="img-responsive">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->

            <div class="row">
              <div class="col-xs-11">
                <div class="dealer">
                  <div class="row">
                    <div class="col-xs-1 no-padding-right">
                      <div class="msg-icon">
                        <img src="images/user2.jpg" class="img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-11 padding-left-md">
                      <div class="msg-bubble">
                        <div class="msg-bubble-stat primary">
                          <p>Buyer Counter Adjustment $1,000</p>
                        </div>
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>
                        <div class="msg-bubble-body">
                          <div class="dm-vi-actions-content no-padding">

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Original Sale Price</p>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                <p class="text-right"><strong>$5,000</strong></p>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                              </div>
                              <div class="col-sm-3 col-xs-3">
                                <p class="text-right"><strong>($1,000)</strong></p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Buyer Requested Selling Price:</p>
                              </div>
                              <div class="col-xs-3 col-xs-3">
                                <p class="text-right text-primary-four"><strong>$4,000</strong></p>
                              </div>
                            </div>

                          </div><!-- dm-vi-actions-content -->
                        </div>
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1"></div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->

            <div class="row latest">
              <div class="col-sm-1 col-xs-0"></div>
              <div class="col-sm-11 col-xs-12">
                <div class="user">
                  <div class="row">
                    <div class="col-sm-11 col-xs-12">
                      <div class="msg-bubble">

                        <div class="msg-bubble-stat sold">
                          <p>Sold $4,500</p>
                        </div>
                        <div class="msg-bubble-pm">
                          <p>Company Check</p>
                        </div>
                        <div class="msg-bubble-body adj">
                          <div class="dm-vi-actions-content no-padding">

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Original Sale Price</p>
                              </div>
                              <div class="col-xs-3 col-xs-3">
                                <p class="text-right"><strong>$5,000</strong></p>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-sm-9 col-xs-9">
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                              </div>
                              <div class="col-xs-3 col-xs-3">
                                <p class="text-right"><strong>$500</strong></p>
                              </div>
                            </div>
                            <hr>
                            <div class="row">
                            <div class="col-sm-9 col-xs-9">
                              <p>New Selling Price:</p>
                            </div>
                            <div class="col-xs-3 col-xs-3">
                              <p class="text-right text-success"><strong>$4,500</strong></p>
                            </div>
                          </div>
                        </div><!-- dm-vi-actions-content -->

                      </div>
                    </div><!-- msg-bubble -->
                    <div class="msg-bubble-date pull-right">
                      <p>June 6, 2018, 9:04AM</p>
                    </div>
                  </div>
                  <div class="col-xs-1 no-padding-left">
                      <div class="msg-icon">
                        <img src="images/ryan.png" class="img-responsive">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div><!-- .row -->


          <div class="row">
            <div class="col-sm-1 col-xs-0"></div>
            <div class="col-sm-11 col-xs-12">
              <div class="user">
                <div class="row">
                  <div class="col-sm-11 col-xs-12">
                    <div class="msg-bubble">
                      <div class="msg-bubble-stat default">
                        <p>You Requested Arbitration</p>
                      </div>
                      <div class="msg-bubble-body">
                        <p class="text-center"><em>A Dealers’ Forum representative  will be contacting you soon.</em></p>
                      </div>
                    </div><!-- msg-bubble -->
                    <div class="msg-bubble-date pull-right">
                      <p>June 6, 2018, 9:04AM</p>
                    </div>
                  </div>
                  <div class="col-xs-1 no-padding-left">
                      <div class="msg-icon">
                        <img src="images/ryan.png" class="img-responsive">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div><!-- .row -->


          <div class="row">
            <div class="col-sm-1 col-xs-0"></div>
            <div class="col-sm-11 col-xs-12">
              <div class="user">
                <div class="row">
                  <div class="col-sm-11 col-xs-12">
                    <div class="msg-bubble">
                      <div class="msg-bubble-stat grey">
                        <p>Car no longer available</p>
                      </div>
                      <div class="msg-bubble-body">
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                      </div>
                    </div><!-- msg-bubble -->
                    <div class="msg-bubble-date pull-right">
                      <p>June 6, 2018, 9:04AM</p>
                    </div>
                  </div>
                  <div class="col-xs-1 no-padding-left">
                      <div class="msg-icon">
                        <img src="images/ryan.png" class="img-responsive">
                      </div>
                    </div>
                </div>
              </div><!-- user -->
            </div><!-- col -->
          </div><!-- .row -->


          <div class="row">
              <div class="col-xs-11">
                <div class="dealer">
                  <div class="row">
                    <div class="col-xs-1 no-padding-right">
                      <div class="msg-icon">
                        <img src="images/cole.jpg" class="img-responsive">
                      </div>
                    </div>
                    <div class="col-xs-11 padding-left-md">
                      <div class="msg-bubble">
                        
                        <div class="msg-bubble-stat grey">
                          <p>Unwind</p>
                        </div>
                        <div class="msg-bubble-body">
                          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                        
                      </div><!-- msg-bubble -->
                      <div class="msg-bubble-date">
                        <p>June 6, 2018, 9:04AM</p>
                      </div>
                    </div>
                    <div class="col-xs-1"></div>
                  </div>
                </div>
              </div>
            </div><!-- .row -->






        </div><!-- msg-thread -->        
      </div> <!-- modal-body -->

      <div class="dm-footer modal-footer">
        <div class="dm-message" id="dm-message">
          <form class="form-horizontal">
            <div class="form-group">
              <div class="col-sm-9 col-xs-10 padding-right-md">
                <textarea type="text" class="form-control" rows="1" placeholder="Enter message..." style='max-height: 60px;resize: none;'></textarea>
              </div>
              <div class="col-sm-3 col-xs-2 no-padding-left">
                <button class="btn btn-default" type="button"><span class="hidden-sm hidden-xs">Send Message</span> <i class="far fa-paper-plane"></i></button>
              </div>
            </div>
          </form>
        </div><!-- dm-vi-actions -->

        <div class="dm-vi-actions" id="dm-adjustment">
          <div class="dm-vi-actions-content">
            <div class="row">
              <div class="col-sm-1 col-xs-2 padding-right-sm">
                <div class="dm-vi-icon">
                  <a href="javascript:;" class="btn-link-default">
                    <img src="images/car1.jpg" class="img-responsive">
                  </a>
                </div>
              </div>
              <div class="col-sm-8 col-xs-7 padding-right-sm padding-left-sm">
                <p>Original Sale Price</p>
              </div>
              <div class="col-xs-2 padding-right-sm padding-left-sm">
                <p class="text-right"><strong>$500</strong></p>
              </div>
              <div class="col-xs-1 text-center padding-left-sm">

              </div>
            </div>


            <div class="adj-items">
              <div class="row adj-item">
                <div class="col-xs-1 padding-right-sm">
                  <div class="dm-vi-icon">
                    <a href="javascript:;" class="btn-link-default"><i class="fa fa-camera"></i></a>
                    <!-- <img src="images/car1.jpg" class="img-responsive"> -->
                  </div>
                </div>
                <div class="col-xs-8 padding-right-sm padding-left-sm">
                  <input type="text" name="comment1" class="form-control padding-left-lg padding-right-lg" placeholder="Reason for Adjustment">
                </div>
                <div class="col-xs-2 padding-right-sm padding-left-sm">
                  <input type="text" name="comment1" class="text-right form-control padding-left-lg padding-right-lg" placeholder="($0)">
                </div>
                <div class="row-action col-xs-1 text-center padding-left-sm">
                  <a href="javascript:;" onclick="$(this).closest('.adj-item').remove();" class="btn-link-default"><i class="fa fa-trash-alt fa-1x"></i></a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <a href="javascript:;" class="btn btn-sm btn-link" onclick="$('.adj-item:first').clone().insertAfter('.adj-items>.adj-item:last');">
                  Add More Items <i class="fa fa-plus"></i>
                </a>
              </div>
            </div>

            <div class="adj-row-total">
              <div class="row">
                <div class="row-action col-xs-1">
                </div>
                <div class="col-xs-7 no-padding-left">
                  <h5>Your Proposed Selling Price:</h5>
                </div>
                <div class="col-xs-3 text-right padding-right-sm">
                  <h5 class="text-primary">$9,000</h5>
                </div>
                <div class="row-action col-xs-1">            
                </div>
              </div>
            </div>

          </div>

          <div class="dm-vi-actions-btn">
            <button type="button" class="btn btn-default" onclick="$('#dm-adjustment').slideUp();$('.dm-footer>#select-action').slideDown(); $('.dm-actions').slideDown();">Cancel</button>
            <button type="button" class="btn btn-primary" onclick="$('#dm-adjustment').slideUp();$('.dm-footer>#select-action').slideDown(); $('.dm-actions').slideDown();">Propose Adjustment</button>
          </div>
        </div><!-- dm-vi-actions -->


        <div class="dm-vi-actions" id="dm-accept-adj">
          <div class="dm-vi-actions-content">

            <div class="row">
              <div class="col-sm-1 col-xs-2 padding-right-sm">
                <div class="dm-vi-icon">
                  <a href="javascript:;" class="btn-link-default">
                    <img src="images/car1.jpg" class="img-responsive">
                  </a>
                </div>
              </div>
              <div class="col-sm-8 col-xs-7 padding-right-sm padding-left-sm">
                <p>Original Sale Price</p>
              </div>
              <div class="col-xs-2 padding-right-sm padding-left-sm">
                <p class="text-right"><strong>$5,000</strong></p>
              </div>
              <div class="col-xs-1 text-center padding-left-sm">

              </div>
            </div>

            <div class="row">
              <div class="col-sm-1 col-xs-2 padding-right-sm">
                <div class="dm-vi-icon">
                  <a href="javascript:;" class="btn-link-default">
                    <img src="images/car1.jpg" class="img-responsive">
                  </a>
                </div>
              </div>
              <div class="col-sm-8 col-xs-7 padding-right-sm padding-left-sm">
                <p>Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
              </div>
              <div class="col-xs-2 padding-right-sm padding-left-sm">
                <p class="text-right"><strong>($500)</strong></p>
              </div>
              <div class="col-xs-1 text-center padding-left-sm">

              </div>
            </div>

           <!--  <div class="row">
              <div class="col-xs-1 padding-right-sm">
                <div class="dm-vi-icon">
                  <a href="javascript:;" class="btn-link-default">
                    <img src="images/car1.jpg" class="img-responsive">
                  </a>
                </div>
              </div>
              <div class="col-xs-8 padding-right-sm padding-left-sm">
                <input type="text" name="comment1" class="form-control padding-left-lg padding-right-lg" placeholder="Reason for Adjustment">
              </div>
              <div class="col-xs-2 padding-right-sm padding-left-sm">
                <input type="text" name="comment1" class="text-right form-control padding-left-lg padding-right-lg" placeholder="($0)">
              </div>
              <div class="row-action col-xs-1 text-center padding-left-sm">
                <a href="javascript:;" class="btn-link-default"><i class="fa fa-trash-alt fa-1x"></i></a>
              </div>
            </div> -->

            <div class="adj-row-total">
              <div class="row">
                <div class="row-action col-xs-1">
                </div>
                <div class="col-xs-7 no-padding-left">
                  <h5>Your Proposed Selling Price:</h5>
                </div>
                <div class="col-xs-3 text-right padding-right-sm">
                  <h5 class="text-success">$4,500</h5>
                </div>
                <div class="row-action col-xs-1">            
                </div>
              </div>
            </div>

          </div>

          <div class="dm-vi-actions-btn">
            <button type="button" class="btn btn-default" onclick="$('#dm-accept-adj').slideUp();$('.dm-footer>#select-action').slideDown();">Cancel</button>
            <button type="button" class="btn btn-success" onclick="$('#dm-accept-adj').slideUp();$('.dm-footer>#select-action').slideDown();">Accept Adjustment</button>
          </div>
        </div><!-- dm-vi-actions -->



        


        <div class="dm-vi-actions" id="dm-withdraw-adj">
          <div class="dm-vi-actions-content">

            <div class="row">
              <div class="col-xs-12 text-center">
                <p>Are you sure you want to cancel your adjustment?</p>
              </div>
            </div>
          </div>

          <div class="dm-vi-actions-btn">
            <button type="button" class="btn btn-default" onclick="$('#dm-withdraw-adj').slideUp();$('.dm-footer>#select-action').slideDown(); $('.dm-actions').slideDown();">Back</button>
            <button type="button" class="btn btn-danger" onclick="$('#dm-withdraw-adj').slideUp();$('.dm-footer>#select-action').slideDown();">Cancel Adjustment</button>
          </div>
        </div><!-- dm-vi-actions -->
        
      </div>
    </span>



  </div><!-- modal-content -->



</div>
</div>






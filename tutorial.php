<?php
$title = "Tutorial";
include('head.php');
include('nav-user.php');
?>

<div class="nav-blue">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-6">
        <h4 class="page-title">Tutorial</h4>
      </div>
    </div>
  </div>
</div>

<div class="page-container">
  <div class="container">
    <br><br>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Let's get started!
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
            Go to www.carwave.com and log in using your current login email and password for The Dealers’ Forum<br><br>
            Once logged in, you will be redirected to the Dealer Direct page (previously Cars for Sale page). This page contains ALL the frontline cars that you can Make an Offer to or Buy Now
          </div>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              How do I add my vehicle? 
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
            <ol>
              <li>In the navigation bar, click the SELL link and select ADD CAR from the dropdown list.</li>
              <li>If you want to schedule an inspection for your trade-in OR frontline vehicles, click Schedule Inspection and fill out the required fields and once you're done, click "Done, Schedule Inspection".<br>
                Note: You can only add Trade-in vehicles by scheduling an inspection.
              </li>
              <li>If you want to self disclose a Frontline vehicle, click Self-Disclose Frontline Car and fill out all required fields. <br>
              </li>
              <li>Once you're done, click "Done, Post Car" and a modal will appear for confirmation. If you want to add another vehicle, click "I want to add another car". If not, click "Go to My Cars for Sale" to view your newly added vehicle.
              </li>
            </ol>

          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="three">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#togglethree" aria-expanded="false" aria-controls="togglethree">
              How do I list my vehicles in an Auction?
            </a>
          </h4>
        </div>
        <div id="togglethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="three">
          <div class="panel-body">
            <ol>
              <li>On your My Cars for Sale, you can view all of the cars you've added, both Frontlines and Trade-ins.<br>
                On the dropdown list, click the Auction name you want to add that vehicle to. <br> A notification will appear if you've already listed your vehicle in an auction.<br>
                Note: Frontline cars can only be added on Frontline auctions and Trade-in cars can only be added on Trade-in Auctions.
              </li>
            </ol>

          </div>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="four">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#togglefour" aria-expanded="false" aria-controls="togglefour">
              How do I withdraw my vehicles from an Auction?
            </a>
          </h4>
        </div>
        <div id="togglefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="four">
          <div class="panel-body">
            <ol>
              <li>On the dropdown list, just select "Not listed in Auction" to withdraw that vehicle from an auction <br>   A notification will appear if you've already withdrawn your vehicle from an auction.<br>
               Note: You cannot withdraw a vehicle that has is already Reserve Met.
             </li>
           </ol>
         </div>
       </div>
     </div>


    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="five">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#togglefive" aria-expanded="false" aria-controls="togglefive">
            My vehicle has a good offer, how do I sell the vehicle?
          </a>
        </h4>
      </div>
      <div id="togglefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="five">
        <div class="panel-body">
          <ol>
            <li>On the vehicle row, click "View All Direct Offers"</li>
            <li>In the modal, you will see the buyer/s that made an offer to that vehicle. You can click on the offer and you will see a message thread. Think of this as a messaging app.</li>
            <li>From here you can click on the Sell button.</li>
            <li>A confirmation will appear and just click Sell.</li>
            <li>Congratulations! You have sold your vehicle. This vehicle will be moved from your My Cars for Sale list to your Cars I Sold list.</li>
          </ol>
        </div>
      </div>
    </div>



      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="six">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#togglesix" aria-expanded="false" aria-controls="togglesix">
              My vehicle has an offer, how can I counter offer?
            </a>
          </h4>
        </div>
        <div id="togglesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="six">
          <div class="panel-body">
            <ol>
              <li>On the vehicle row, click "View All Direct Offers"</li>
              <li>In the modal, you will see the buyer/s that made an offer to that vehicle. You can click on the offer you want to make a counter offer to.</li>
              <li>From here you can click on the Counter button.</li>
              <li>Place your counter offer amount and your prefered payment method.</li>
              <li>Click Counter Offer.</li>
            </ol>
          </div>
        </div>
      </div>



      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="six">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#togglesix" aria-expanded="false" aria-controls="togglesix">
              I need to edit 
            </a>
          </h4>
        </div>
        <div id="togglesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="six">
          <div class="panel-body">
            <ol>
              <li>On the vehicle row, click "View All Direct Offers"</li>
              <li>In the modal, you will see the buyer/s that made an offer to that vehicle. You can click on the offer you want to make a counter offer to.</li>
              <li>From here you can click on the Counter button.</li>
              <li>Place your counter offer amount and your prefered payment method.</li>
              <li>Click Counter Offer.</li>
            </ol>
          </div>
        </div>
      </div>



    </div>
  </div>


  <?php include("footer.php") ?>
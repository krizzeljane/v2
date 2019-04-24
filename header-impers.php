<?php include("impers-modal.php") ?>

<div class="topnav">
  <div class="container">
    <a href="#">Updated: December 12, 2018</a>
    <a href="javascript:;" class="pull-right">Customer Support: 0836-3646-836 &nbsp;</a>
  </div>
</div>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="images/CARWAVE-logo-02.svg">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <!--  <li class="<?php if($currentPage =='about'){echo 'active';}?>"><a href="#">Home <span class="sr-only">(current)</span></a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy <span class="caret"></span></a>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-gavel"></i> Frontline Auction</a></li>
            <li><a href="#"><i class="fa fa-gavel"></i> Trade-in Auction</a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i> Dealer Direct</a></li>
          </ul>
        </li>

        <li class="dropdown <?php if($currentPage =='about'){echo 'active';}?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sell <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">My Cars for Sale</a></li>
            <li><a href="#">Add Car</a></li>
          </ul>
        </li>

        <li class="dropdown <?php if($currentPage =='about'){echo 'active';}?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Transactions <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="carsibought/carsibought.php">Cars I Bought</a></li>
            <li><a href="carsisold/carsisold.php">Cars I Sold</a></li>
          </ul>
        </li>
        <li><a href="users/dealers.php">Dealers</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle user-log-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 5px;padding-bottom: 9px; line-height: 17px;">
            <img class="user-log-photo" src="images/ryan.png"> 
            <small>Logged in as:</small><br>
            Ryan Farina 
            <span class="caret"></span>
          </a>
            <ul class="dropdown-menu">
              <li><a href="#" class="user-log-name" role="button">
                <img class="user-log-photo" src="images/robin.jpg"> 
                Robin Arellano</a>
              </li>
              <li><a href="#" data-toggle="modal" data-target="#impers-modal">Log in as...</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
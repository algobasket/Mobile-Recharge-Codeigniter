<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
  </head>

  <body>
		 <div class="container">
			 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:#eb2026 !important">
				 <a class="navbar-brand" href="#">Payz24</a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
					 <span class="navbar-toggler-icon"></span>
				 </button>

				 <div class="collapse navbar-collapse" id="navbarsExampleDefault">

					 <form class="form-inline my-2 my-lg-0 col-md-6">
						 <input class="form-control mr-sm-2 col-md-9" type="text" aria-label="Search" placeholder="Search for a Product , Brand or Category">
						 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					 </form>

					<ul class="navbar-nav mr-auto">
						 <li class="nav-item active">
							 <a class="nav-link" href="#">Accept Payments <span class="sr-only">(current)</span></a>
						 </li>
						 <li class="nav-item">
							 <a class="nav-link" href="#">Food Wallet</a>
						 </li>
						 <li class="nav-item">
							 <a class="nav-link" href="#">Track Order</a>
						 </li>
						 <li class="nav-item">
							<a class="nav-link" href="#">Sell on Paytm Mall</a>
						</li>

					 </ul>
				 </div>
			 </nav>

		<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="margin-top:15px">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          More
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Mobile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Electricity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Landline</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#">Fees</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#">Gold</a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#">Metro</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <a class="form-inline my-2 my-md-0">
            Paytm Balance Rs 1000
          </a>
        </div>
      </nav>

		</div>


    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Mobile Recharge or Bill Payment</h1>
            <p>Tell us your number and we will figure out the rest</p>
						<?php echo form_open('welcome');?>
					  <p>Prepaid <input type="radio" name="prepaid_postpaid" value="prepaid" /> &nbsp;&nbsp;&nbsp;&nbsp;Postpaid <input type="radio" name="prepaid_postpaid" value="postpaid" /></p>
            <p>
							<div class="row">

								<div class="col-6 col-md-3">Mobile Number<input type="text" name="rechargeNumber" class="form-control" placeholder="Your Mobile Number" required/></div>
				        <div class="col-6 col-md-3">Operator<select name="utilityOperatorId" class="form-control" >
                    <option>Your Operator</option>
                     <?php foreach($operators as $operatorName => $operatorCode): ?>
											 <option value="<?php echo $operatorCode;?>"><?php echo $operatorName;?></option>
										 <?php endforeach;?>
								</select></div>
								<div class="col-6 col-md-3">Amount &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small><a href="#">(Browser all plans)</a></small><input type="text" name="rechargeAmount" class="form-control" placeholder="Enter Amount" required/></div>

								<div class="col-6 col-md-3">
                 <input type="radio" name="prepaid" /> Fast Forward
									<input type="submit" class="btn btn-primary btn-lg" name="submit_recharge" style="background-color:#eb2026 !important" value="Proceed To Recharge &raquo;"/>
                    <br><small>Instant payment from your Paytm balance</small>
								</div>
				      </div>

						</p>
						<?php echo form_close();?>
        </div>
      </div>


    </main>

		<div class="container">
     <h3>Book on Paytm</h3>
		 <div class="nav-scroller py-1 mb-2">
			 <div class="nav d-flex justify-content-between">
				 <a class="p-2 text-muted" href="#">Movie</a>
				 <a class="p-2 text-muted" href="#">Trains</a>
				 <a class="p-2 text-muted" href="#">Bus</a>
				 <a class="p-2 text-muted" href="#">Deals</a>
				 <a class="p-2 text-muted" href="#">Flights</a>
				 <a class="p-2 text-muted" href="#">Hotels</a>
				 <a class="p-2 text-muted" href="#">Events</a>
				 <a class="p-2 text-muted" href="#">Gift Cards</a>
				 <a class="p-2 text-muted" href="#">Cars & Bikes</a>
				 <a class="p-2 text-muted" href="#">Amusement Parks</a>
				 <a class="p-2 text-muted" href="#">International Flights</a>
				 <a class="p-2 text-muted" href="#">Tickets</a>
			 </div>
		 </div>

		 <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
			 <div class="col-md-6 px-0">
				 <h1 class="display-4 font-italic">Get upto <br>300 Rs Cashback</h1>
				 <p class="lead my-3">Recharge or Pay Bills for Your Family Members</p>
				 <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">PROMOCODE : GOLD500</a></p>
			 </div>
		 </div>

		</div>


	<footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  </body>
</html>

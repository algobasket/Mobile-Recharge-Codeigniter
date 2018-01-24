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

    <title>Online Mobile Recharge</title>

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
        <a class="navbar-brand" href="#">Utilities</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          More
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/recharge/recharge-48x48.png" /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/electricity/electricity-48x48.png" /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/landline/landline-48x48.png" /></a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/hotel/hotel-48x48.png" /></a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/broadband/broadband-48x48.png" /></a>
            </li>
						<li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/flight/flight-48x48.png" /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/bus/bus-48x48.png" /></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="../../assets/t4jIcons/datacard/datacard-48x48.png" /></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#"><img src="../../assets/t4jIcons/gas/gas-48x48.png" /> Gas</a>
                <a class="dropdown-item" href="#"><img src="../../assets/t4jIcons/movies/movies-48x48.png" /> Movies</a>
                <a class="dropdown-item" href="#"><img src="../../assets/t4jIcons/creditcard/creditcard-48x48.png" /> Credit Card</a>
                  <a class="dropdown-item" href="#"><img src="../../assets/t4jIcons/dth/dth-48x48.png" /> DTH</a>
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
      <div class="jumbotron"></div>

      <div class="container" style="margin-top:-90px">
        <div class="row mb-2">
     <div class="col-md-4">
       <div class="card flex-md-row mb-4 box-shadow h-md-250">
         <div class="card-body d-flex flex-column align-items-start">
           <strong class="d-inline-block mb-2 text-primary">
           <h6 class="mb-0">
             <a class="text-dark" href="#">Mobile Recharge or Bill Payment</a>
           </h6>
           </strong>
           <?php echo form_open('welcome');?>
           <div class="mb-1 text-muted">Prepaid <input type="radio" name="prepaid_postpaid" value="prepaid" onclick="document.getElementById('prepaid_btn').style.display='block';document.getElementById('postpaid_btn').style.display='none'" checked /> &nbsp;&nbsp;&nbsp;&nbsp;Postpaid <input type="radio" name="prepaid_postpaid" value="postpaid" onclick="document.getElementById('prepaid_btn').style.display='none';document.getElementById('postpaid_btn').style.display='block'" /></div>
           <div class="mb-1 text-muted">

               <div class="mb-3">
                <label for="email">Mobile Number</label>
                 <input type="text" name="rechargeNumber" class="form-control" placeholder="Your Mobile Number" id="mobileNumber" required/>
                <div class="invalid-feedback">
                  Please enter mobile number.
                </div>
              </div>
              <div class="mb-3">
               <label for="email">Operator</label>
               <select name="utilityOperatorId" class="form-control" onchange="document.getElementById('circle_change').style.display='block'">
                   <option>Your Operator</option>
                    <?php foreach($operators as $operatorName => $operatorCode): ?>
                      <option value="<?php echo $operatorCode;?>"><?php echo $operatorName;?></option>
                    <?php endforeach;?>
               </select>
               <div class="invalid-feedback">
                Please enter an operator
               </div>
             </div>
             <div class="mb-3" style="display:none" id="circle_change">
              <label for="email">Circle</label>
              <select name="circleId" class="form-control" >
                  <option>Your Circle</option>
                   <?php foreach($circles as $circleName => $circleCode): ?>
                     <option value="<?php echo $circleCode;?>"><?php echo $circleName;?></option>
                   <?php endforeach;?>
              </select>
              <div class="invalid-feedback">
               Please enter an circle
              </div>
            </div>
             <div class="mb-3">
              <label for="email">Amount <span class="text-muted">(Browser all plans)</span></label>
               <input type="text" name="rechargeAmount" class="form-control" placeholder="Enter Amount" required/>
              <div class="invalid-feedback">
              Please enter an amount
              </div>
            </div>
            <div class="mb-3" id="prepaid_btn">
             <label for="email"><input type="radio" name="prepaid" /> Fast Forward</span></label>
             <input type="submit" class="btn btn-primary btn-lg" name="submit_recharge" style="background-color:#eb2026 !important" value="Proceed To Recharge &raquo;"/>
               <br><small>Instant payment from your Paytm balance</small>
             <div class="invalid-feedback">
             Please enter an amount
             </div>
           </div>
           <div class="mb-3" id="postpaid_btn" style="display:none">
            <label for="email"><input type="radio" name="prepaid" /> Fast Forward</span></label>
            <input type="submit" class="btn btn-primary btn-lg" name="submit_recharge" style="background-color:#eb2026 !important" value="Proceed To Pay Bill &raquo;"/>
              <br><small>Instant payment from your Paytm balance</small>
            <div class="invalid-feedback">
            Please enter an amount
            </div>
          </div>
           </div>

           <?php echo form_close();?>

         </div>

       </div>
     </div>
     <div class="col-md-8">
       <div class="card flex-md-row mb-4 box-shadow h-md-250">
         <div class="card-body d-flex flex-column align-items-start">

           <nav>
             <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Promo Codes</a>
               <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="display:none">Browse Plans</a>

             </div>
           </nav>
           <div class="tab-content" id="nav-tabContent">
             <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                  <br>
                 <div class="col-12">
                   <ul class="list-group">
                    <li class="list-group-item">FAMILY<br>
                    Pay for your family and earn Cashback upto ₹300 & additional Cashback of up to Rs. 50 on Paying through Paytm Payments Bank savings a/c.
                    </li>
                    <li class="list-group-item">FAMILY<br>
                    Pay for your family and earn Cashback upto ₹300 & additional Cashback of up to Rs. 50 on Paying through Paytm Payments Bank savings a/c.
                    </li>
                    <li class="list-group-item">FAMILY<br>
                    Pay for your family and earn Cashback upto ₹300 & additional Cashback of up to Rs. 50 on Paying through Paytm Payments Bank savings a/c.
                    </li>
                    <li class="list-group-item">FAMILY<br>
                    Pay for your family and earn Cashback upto ₹300 & additional Cashback of up to Rs. 50 on Paying through Paytm Payments Bank savings a/c.
                    </li>

                    </ul>

               </div>

             </div>
             <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div class="row">
                 <div class="col-12"><br>
                   <h6>Browse Plans of Vodafone - Delhi NCR</h6><br>
                 </div>
                 <div class="col-3">
                   <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Best Offer</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Full Talktime</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">3G/4G Data</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">2G Data</a>
                    </div>
                 </div>
                 <div class="col-9">
                   <div class="tab-content" id="v-pills-tabContent">
                     <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Talktime</th>
                            <th scope="col">Validity</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody id="updatePlanOffer">
                          <tr>
                            <th>85</th>
                            <td>7 days</td>
                            <td>Full Talktime + 5 Night local Vodafone minutes</td>
                            <td>Rs 85</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                     </div>
                     <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                     <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                   </div>
                 </div>
               </div>
             </div>

           </div>

         </div>
       </div>
     </div>
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
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
     <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
      $('#mobileNumber').keyup(function(){
         if(this.value.length > 5 || this.value.length == 5){
           $('#nav-profile-tab').show(function(){ $(this).click();});
           // $('#nav-profile').addClass('active show').show();   
           $.post('<?php echo base_url();?>Welcome/getOperatorPlanofferAjax',{'mobileNumber':this.value,'cir' : "",'type':'','max':'','amt':''},function(data,status){
             $('#updatePlanOffer').html(data).show();
             console.log(data);
           })
        }
      });
    });
    </script>
  </body>
</html>

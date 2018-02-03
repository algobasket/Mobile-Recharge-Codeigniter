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
    <style>
    @media (min-width: 768px) {

     /* show 3 items */
     .carousel-inner .active,
     .carousel-inner .active + .carousel-item,
     .carousel-inner .active + .carousel-item + .carousel-item,
     .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
         display: block;
     }

     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
     .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
         transition: none;
     }

     .carousel-inner .carousel-item-next,
     .carousel-inner .carousel-item-prev {
       position: relative;
       transform: translate3d(0, 0, 0);
     }

     .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
         position: absolute;
         top: 0;
         right: -25%;
         z-index: -1;
         display: block;
         visibility: visible;
     }

     /* left or forward direction */
     .active.carousel-item-left + .carousel-item-next.carousel-item-left,
     .carousel-item-next.carousel-item-left + .carousel-item,
     .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
     .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
     .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
         position: relative;
         transform: translate3d(-100%, 0, 0);
         visibility: visible;
     }

     /* farthest right hidden item must be abso position for animations */
     .carousel-inner .carousel-item-prev.carousel-item-right {
         position: absolute;
         top: 0;
         left: 0;
         z-index: -1;
         display: block;
         visibility: visible;
     }

     /* right or prev direction */
     .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
     .carousel-item-prev.carousel-item-right + .carousel-item,
     .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
     .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
     .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
         position: relative;
         transform: translate3d(100%, 0, 0);
         visibility: visible;
         display: block;
         visibility: visible;
     }

 }

  /* Bootstrap Lightbox using Modal */

 #profile-grid { overflow: auto; white-space: normal; }
 #profile-grid .profile { padding-bottom: 40px; }
 #profile-grid .panel { padding: 0 }
 #profile-grid .panel-body { padding: 15px }
 #profile-grid .profile-name { font-weight: bold; }
 #profile-grid .thumbnail {margin-bottom:6px;}
 #profile-grid .panel-thumbnail { overflow: hidden; }
 #profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
 .carousel-control-prev{ top: -30px !important }
  .carousel-control-next{ top: -30px !important }
    </style>

  </head>

  <body>
		 <div class="container">
			 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:#eb2026 !important">
         <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#categoryNav" style="display:block !important">
          <span class="navbar-toggler-icon"></span>
        </button>

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
							 <a class="nav-link" href="#">Wallet <span class="sr-only">(current)</span></a>
						 </li>
             <li class="nav-item">
              <a class="nav-link" href="#"> | <span class="sr-only">(current)</span></a>
            </li>
						 <li class="nav-item">
							 <a class="nav-link btn btn-danger btn-sm pull-right" href="#">Login</a>
						 </li>
             <li class="nav-item">
              <a class="nav-link btn btn-danger btn-sm" href="#">Signup</a>
            </li>
					 </ul>
				 </div>
			 </nav>

		<nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="margin-top:15px">
        <a class="navbar-brand" href="#">Book on Payz24</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          More
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09"> 
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/movies/movies-48x48.png" /><br>Movies</a>
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/bus/bus-48x48.png" /><br>Train</a>
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/bus/bus-48x48.png" /><br>Bus</a>
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/hotel/hotel-48x48.png" /><br>Hotel</a>
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/flight/flight-48x48.png" /><br>Flight</a>
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/bus/bus-48x48.png" /><br>Bus</a>
          <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/datacard/datacard-48x48.png" /><br>Datacard</a>

          <!-- <a class="form-inline my-2 my-md-0">
            Paytm Balance Rs 1000
          </a> -->
        </div>

      </nav>

		</div>


    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="height:200px;background-color:#d83434"></div>

      <div class="container" style="margin-top:-150px">
        <div class="row mb-2">
          <div class="col-md-12">
       <div class="card flex-md-row mb-4 box-shadow h-md-250">
         <div class="card-body d-flex flex-column align-items-start">
           <h4>Mobile Recharge or Bill Payment</h4>
             <p>Tell us your number and we will figure out the rest</p>
            <?php echo form_open('welcome');?>
            <p>Prepaid <input type="radio" name="prepaid_postpaid" value="prepaid" onclick="document.getElementById('prepaid_btn').style.display='block';document.getElementById('postpaid_btn').style.display='none'" checked /> &nbsp;&nbsp;&nbsp;&nbsp;Postpaid <input type="radio" name="prepaid_postpaid" value="postpaid" onclick="document.getElementById('prepaid_btn').style.display='none';document.getElementById('postpaid_btn').style.display='block'"/></p>
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

                <div class="col-6 col-md-3" id="prepaid_btn">
                  <input type="radio" name="prepaid" /> Fast Forward
                  <input type="submit" class="btn btn-primary btn-lg" name="submit_recharge_prepaid" style="background-color:#eb2026 !important" value="Proceed To Recharge &raquo;"/>
                     <br><small>Instant payment from your Paytm balance</small>
                </div>
                <div class="col-6 col-md-3" id="postpaid_btn" style="display:none">
                  <input type="radio" name="prepaid" /> Fast Forward
                  <input type="submit" class="btn btn-primary btn-lg" name="submit_recharge_postpaid" style="background-color:#eb2026 !important" value="Proceed To Bill Pay &raquo;"/>
                     <br><small>Instant payment from your Paytm balance</small>
                </div>
              </div>

            </p>
            <?php echo form_close();?>
         </div>
       </div>

     </div>
       </div>
      </div>

    </main>

		<div class="container">
     <h3>Mobile Recharge and Bill Payments</h3>
     <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" style="margin-top:15px">
         <div class="row">
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/movies/movies-48x48.png" /><br>Movies</a>
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/bus/bus-48x48.png" /><br>Train</a>
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/bus/bus-48x48.png" /><br>Bus</a>
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/hotel/hotel-48x48.png" /><br>Hotel</a>
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/flight/flight-48x48.png" /><br>Flight</a>
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/bus/bus-48x48.png" /><br>Bus</a>
           <a class="nav-link" href="#" style="float:left"><img src="<?php echo base_url();?>assets/t4jIcons/datacard/datacard-48x48.png" /><br>Datacard</a>

           <!-- <a class="form-inline my-2 my-md-0">
             Paytm Balance Rs 1000
           </a> -->
         </div>

       </nav>

		 <!-- <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
			 <div class="col-md-6 px-0">
				 <h1 class="display-4 font-italic">Get upto <br>300 Rs Cashback</h1>
				 <p class="lead my-3">Recharge or Pay Bills for Your Family Members</p>
				 <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">PROMOCODE : GOLD500</a></p>
			 </div>
		 </div> -->

		</div>

    <div class="container">
      <hr>
     <h3>Shop on Payz24</h3>
     <h5>Category  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">View All >></a> </h5>
		</div>

    <div class="container">



 <div class="container-fluid">
     <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
         <div class="carousel-inner row w-100 mx-auto" role="listbox">
             <div class="carousel-item col-md-3  active">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 1" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">

                     </a>
                       <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 3" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                     </a>
                     <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 4" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                 <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 5" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 6" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 7" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
             <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 8" class="thumb">
                       <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">

                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
              <div class="carousel-item col-md-3  ">
                 <div class="panel panel-default">
                   <div class="panel-thumbnail">
                     <a href="#" title="image 2" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                     </a>
                      <center><h6>Red Wine 78ml<br>Rs 100/-</h6></center>
                   </div>
                 </div>
             </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
 </div>

   </div><!--.container-->


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

    <!-- The Modal -->
<div class="modal fade" id="categoryNav">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-6 col-md-4">
            <h6>Shop by Category</h6>
            <ul class="list-group">
            <li class="list-group-item">Mobile</li>
            <li class="list-group-item">Gas</li>
            <li class="list-group-item">Clothing</li>
            <li class="list-group-item">Watches</li>
            <li class="list-group-item">Laptops</li>
            </ul>
          </div>
          <div class="col-12 col-md-8">.col-12 .col-md-8</div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        <script>

    $('#carouselExample').on('slide.bs.carousel', function (e) {


       var $e = $(e.relatedTarget);
       var idx = $e.index();
       var itemsPerSlide = 4;
       var totalItems = $('.carousel-item').length;

       if (idx >= totalItems-(itemsPerSlide-1)) {
           var it = itemsPerSlide - (totalItems - idx);
           for (var i=0; i<it; i++) {
               // append slides to end
               if (e.direction=="left") {
                   $('.carousel-item').eq(i).appendTo('.carousel-inner');
               }
               else {
                   $('.carousel-item').eq(0).appendTo('.carousel-inner');
               }
           }
       }
    });


     $('#carouselExample').carousel({
                   interval: 2000
           });


     $(document).ready(function() {
    /* show lightbox when clicking a thumbnail */
       $('a.thumb').click(function(event){
         event.preventDefault();
         var content = $('.modal-body');
         content.empty();
           var title = $(this).attr("title");
           $('.modal-title').html(title);
           content.html($(this).html());
           $(".modal-profile").modal({show:true});
       });

     });
        </script>
  </body>
</html>

<?php 
include('header.php');
?>

<section class="location">
	<br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
         		<div class="col-md-8"></div>
         		<div class="col-md-4">
         			<div class="card shadow">
         				<div class="card-header bg-primary">
         					<div class="row">
         						<div class="col-md-6"><h5 class="text-center text-white">Out Station</h5>
         						</div>
         						<div class="col-md-6"><h5 class="text-center text-white">Local</h5></div>
         					</div>
         				</div>
         				<div class="card-body">
         					<form method="POST" action="car_detail.php" enctype="multipart/form-data">
         						<div class="form-group">
         							<input type="text" name="pickup" class="form-control" placeholder="Pickup Location" required="">
         						</div>
         						<div class="form-group">
         							<input type="text" name="drop" class="form-control" placeholder="Drop Location" required="">
         						</div>
         						<div class="form-group">
         							<input type="date" name="date" class="form-control" placeholder="Date" required="">
         						</div>
         						<div class="form-group">
         							<input type="time" name="time" class="form-control" placeholder="Time" required="">
         						</div>

                          <center> <button class="btn btn-primary text-white" type="submit" name="submit"><a href="car_detail.php"></a>Search</button></center>
         					</form>
         				</div>
         			</div>
         			<br><br>
         		</div>
         	</div>
		</div>
	</div>
</section>
<br><br>
<section>
	<div class="container-fluid bg-light">
		<br>
		<h2 class="text-center" style="font-family: 'Ubuntu', sans-serif;">How it works?</h2>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<center><img src="image/ride.svg" width="40%"></center>
					<h5 class="text-center">Book a ride</h5>
					<p class="text-center">Select your destination and the type of cab you'd like.</p>
				</div>
				<div class="col-md-3">
					<center><img src="image/track.svg" width="40%"></center>
					<h5 class="text-center">Track your cab</h5>
					<p class="text-center">Track the arrival of your cab on map in real time.</p>
				</div>
				<div class="col-md-3">
				    <center><img src="image/ebill.svg" width="40%"></center>
					<h5 class="text-center">Get an e-bill</h5>
					<p class="text-center">Pay for your ride and get an e-bill on your registered email id.</p>
				</div>
				<div class="col-md-3">
					<center><img src="image/feedback.svg" width="40%"></center>
					<h5 class="text-center">Feedback</h5>
					<p class="text-center">Instant feedback, helps us to serve you better</p>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<section>
	<div class="container-fluid">
		<div class="heading" style="font-family: 'Ubuntu', sans-serif;">
		<h3 class="text-center text-dark">Our Top Services</h3>
	    </div>
		<br>
		<div class="container">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              	<div class="row">
                 <div class="carousel-item active shadow">
                 	<div class="row">
                     <div class="card  col-md-3 ">
                     	  <img class="d-block w-100" src="https://www.gticabs.com/private/admin/upload/Vhimages%20(2).jpeg" alt="First slide" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">Innova Crystal</h5>
                     	  	<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                      <div class="card  col-md-3 ">
                     	  <img class="d-block w-100" src="https://www.gticabs.com/private/admin/upload//Vhmaruti-ertiga-cat-500x500.png" alt="First slide" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">ERTIGA</h5>
                     	  		<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>20 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                      <div class="card col-md-3 ">
                     	  <img class="d-block w-100" src="https://images.ctfassets.net/wmdwnw6l5vg5/71jz89dFBIdA9KHrLh8T0h/c4c0a817afe77c35ff5a1461f052b03f/economy.png" alt="First slide" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">Suv/Xs</h5>
                     	  		<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                      <div class="card  col-md-3 ">
                     	  <img class="d-block w-100" src="https://www.gticabs.com/private/admin/upload//Vhinnova.jpg" alt="First slide" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">SEDAN</h5>
                     	  	<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                   </div>
                 </div>
                 <div class="carousel-item">
                    <div class="row">
                     <div class="card  col-md-3 ">
                     	  <img class="d-block w-100" src="https://images.ctfassets.net/wmdwnw6l5vg5/71jz89dFBIdA9KHrLh8T0h/c4c0a817afe77c35ff5a1461f052b03f/economy.png" alt="First slide" width="100%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">Innova Crystal</h5>
                     	  	<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                      <div class="card  col-md-3 ">
                     	  <img class="d-block w-100" src="https://www.autotrader.co.uk/home-pages/images/static/covid-panel/red-car-v2.png" alt="First slide" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">Innova Crystal</h5>
                     	  	<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                      <div class="card col-md-3 ">
                     	  <img class="d-block w-100" src="https://images.newindianexpress.com/uploads/user/imagelibrary/2019/6/24/original/Capture_9.JPG" alt="First slide" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">Innova Crystal</h5>
                     	  	<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                      <div class="card  col-md-3 ">
                     	  <img class="d-block w-100" src="https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=http%3A%2F%2Fcms.haymarketindia.net%2Fmodel%2Fuploads%2Fmodelimages%2FTata-Tiago-220120201441.jpg&h=300&w=450&c=1" width="10%" height="160px">
                     	  <div class="card-body">
                     	  	<h5 class="text-center">Innova Crystal</h5>
                     	  	<ul class="">
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  		<i class="fa fa-star text-warning" aria-hidden="true"></i>
                     	  	</ul>
                     	  	<p class="text-center">From Delhi</p>
                     	  	<p class="text-center"><i class="fa fa-inr" aria-hidden="true"></i>15 / km</p>
                     	  	  	<center><button class="btn btn-success">Book Now</button></center>
                     	  </div>
                     </div>
                   </div>
                 </div>
                 
             </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
              </a>
             <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
             </a>
           </div>
		</div>
	</div>
</section>
<br><br>
<?php
include('footer.php');
?>
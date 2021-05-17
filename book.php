<?php
include('header.php');
?>
<br><br><br>
<section>
	<div class="container-fluid ">
		<div class="container ">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form action="bookinsert.php" method="POST" style="box-shadow:10px 10px 8px #888888;">
						<div class="card">
                            <div class="card-header text-center text-dark bg-warning "><b>Passenger Details</b></div>
							<div class="card-body">
								<div class="row">
									<div class="form-group col-md-6">
									   <label>Name : </label>
									   <input type="text" name="name" class="form-control" placeholder="Name" required="">
								    </div>
								    <div class="form-group col-md-6 ">
									    <label>Email : </label>
									    <input type="email" name="email" class="form-control" placeholder="Email" required="">
									    <span class="text-danger text-muted" style="font-size:10px;">*Enter Valid Email</span>
								    </div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 ">
									   <label>Mobile : </label>
									   <input type="tel" pattern="[7-9]{1}[0-9]{9}" name="phone" class="form-control" placeholder="Phone Number" required="">
								   </div>
								   <div class="form-group col-md-6 ">
									  <label>Pickup Location : </label>
									   <input type="text" name="pickup" class="form-control" placeholder="Enter Pickup Location" required="">
								   </div>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
									<label>No of Passanger : </label>
									<input type="number" name="person" class="form-control" placeholder="Enter No.of Passanger" required="">
								</div>
								<div class="form-group col-md-6">
									<label>Booking Date : </label>
									<input type="date" name="date" class="form-control" placeholder="Enter No.of Passanger" required="">
								</div>
								</div>
								<br>
								<br>
								<center><button class="btn btn-dark" style="width:100px;">Proceed</button></center>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
	</div>
</section>
<br><br>
<?php
include('footer.php');
?>
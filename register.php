<?php
include("header.php");
include("dbcon.php");
if (isset($_POST['submit'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];
   $data="INSERT into user(name,email,password,phone,address)VALUES('$name','$email','$password','$phone','$address')";
   $query=mysqli_query($con,$data);
   header('location:register.php');
}
?>
<div class="container-fluid bg-light">
	<br>
	<div class="container ">
		<br><br><br><br><br><br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card bg-warning">
					<div class="text-center text-dark">
						<h3>Register</h3>
					</div>
				  <div class="card-body bg-light">
					<form method="POST" action="register.php">
						<div >
					     <label><b>Name : </b></label>
                        <input type="text" placeholder="Enter Username" name="name" required class="form-control">
                       </div>
                       <br>
                       <div >
						 <label><b>Email : </b></label>
                        <input type="text" placeholder="abc@123.com" name="email" required class="form-control">
                       </div>
                       <br>
                       <div >
						 <label><b>Password : </b></label>
                        <input type="password" name="password" required class="form-control">
                       </div>
                       <br>
                       <div >
					    <label><b>Phone : </b></label>
                        <input type="text" placeholder="Enter phone" name="phone" required class="form-control">
                       </div>
                       <br>
                       <div >
				   	    <label><b>Address : </b></label>
                        <input type="text" placeholder="Enter Address" name="address" required class="form-control">
                       </div>
                       <br>
                       <button name="submit" type="submit" class="btn btn-warning row">Register</button>
					</form>
				</div>
			  </div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
<br>
<?php
include("header.php");
?>

<div class="container">
		<div class="card-body">
			   <div class="container login ">
					<img src="https://thumbs.dreamstime.com/b/man-profile-cartoon-smiling-round-icon-vector-illustration-graphic-design-135443422.jpg" class="rounded-circle mx-auto d-block">
				  	<form method="POST" action="">
				              	<div class="text-box">
					            	<i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <input type="text" placeholder="Enter Username" name="email" required class="form-control">
                       </div>
                         
                       <br>
                         
                       <div class="text-box">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <input type="password" placeholder="Enter Password" name="password" required class="form-control">
				             	</div>
					    <button class="btn btn-primary" name="submit" type="submit">Login</button>
		  		</form>
			</div>
		</div>	
</div>




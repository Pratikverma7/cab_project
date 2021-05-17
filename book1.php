<?php
include("dbcon.php");
if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$deletedata= "update car_details set status=0 where id='$id'";
	$delete = mysqli_query($con,$deletedata);

	if($deletedata)
	{
     header("Location:book.php");
	}
}

?>
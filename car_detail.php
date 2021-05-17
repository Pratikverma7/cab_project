<?php
include('header.php');
?>
<br><br>
<section>
	<div class="container-fluid">
		<div class="container">
			<table class="table shadow ">
				<thead class="bg-warning">
					<tr>
						<th>Image</th>
						<th>Car Model</th>
						<th>Driver</th>
						<th>Driver Contact</th>
						<th>Price</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
				<?php
                    $i=1;
                    include('dbcon.php');
                    if(isset($_POST['submit']))
                    {
                        $pickup=$_POST['pickup'];
                        $drop=$_POST['drop'];
                        $query="select * from car_details where pickuplocation='$pickup' AND droplocation='$drop' AND status=1";
                        $data=mysqli_query($con,$query);
                        while($result=mysqli_fetch_array($data))
                        {
                      ?>
					<tr>
						<td><img src="admin/<?php echo $result['image']?>" width="150px" height="100px"></td>
						<td><?php echo $result['name']?></td>
						<td><?php echo $result['driver']?></td>
						<td><?php echo $result['contact']?></td>
						<td><?php echo $result['price']?></td>
						<td><a href="book1.php?id=<?php echo $result['id']?>"><button class="btn btn-success">Book Now</button></a></td>
					</tr>
                        <?php
                        }
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</section>

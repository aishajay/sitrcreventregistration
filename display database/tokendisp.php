<?php 
	include('conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Event</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
</head>
<body style="background-color:skyblue";>
	<h3 class="text-center";>Display Token Registration...</h3>
	
	
	<div class="container";>
		<?php 
			$sql="SELECT * FROM token";
			$count=1;
			$result = mysqli_query($conn, $sql);
			
	        if(mysqli_num_rows($result) > 0)//Calculate no of rows
	         {
		 ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Sr.No</th>
				<th>First Name</th>
				<th>last Name</th>
				<th>Student ID</th>
				<th>Department</th>
				<th>Class</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Coming-Stud.</th>
				<th>Check-in</th>
				<th>Check-out</th>
				<th>Check-in</th>
				<th>Check-out</th>
				<th>QR-Name</th>
				
			</tr>
		</thead>
		<tbody>
				<?php 
				while($row = mysqli_fetch_assoc($result)){
				 ?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['dep']; ?></td>
				<td><?php echo $row['class']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['come']; ?></td>
				<td><?php echo $row['checkindate']; ?></td>
				<td><?php echo $row['checkoutdate']; ?></td>
				<td><?php echo $row['ajay']; ?></td>
				<td><?php echo $row['ajju']; ?></td>
				<td><?php echo $row['qr']; ?></td>
				
			
			</tr>
		</tbody>
		<?php 
				$count++;}
			}
			
			else{
				echo"Data Not Found";
			}
			?>
	</table>
			
	</div>
	<?php mysqli_close($conn); ?>
</body>
</html>
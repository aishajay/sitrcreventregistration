<?php 
	include('conn.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Display Complaint Data...</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
</head>
<body style="background-color:skyblue";>
	<h3 class="text-center";>Display Database</h3>
	
	
	<div class="container";>
		<?php 
			$sql="SELECT * FROM complaint";
			$count=1;
			$result = mysqli_query($conn, $sql);
			// print_r($result);exit;
	        if(mysqli_num_rows($result) > 0)//Calculate no of rows
	         {
		 ?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Sr.No</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Mobile</th>
				<th>Faculty Class</th>
				<th>Address</th>
				<th>Street address-2</th>
				<th>City</th>
				<th>Tehsil</th>
				<th>Postal / Zip code</th>
				<th>District</th>
				<th>Email</th>
				<th>Student ID</th>
				<th>Date</th>
				<th>Name person(s) involved</th>
				<th>complaint in detail.</th>
				<th>Invol</th>
				<th>Why.</th>
				<th>resolution</th>
				<th>Any</th>
				
				
			</tr>
		</thead>
		<tbody>
				<?php 
				// $row = mysqli_fetch_assoc($result);
				// echo "<pre>";
				// print_r($row);exit();
				while($row = mysqli_fetch_assoc($result)){
				 ?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><?php echo $row['fname']; ?></td>
				<td><?php echo $row['lname']; ?></td>
				<td><?php echo $row['mobile']; ?></td>
				<td><?php echo $row['class']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['addresss']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['tehsil']; ?></td>
				<td><?php echo $row['zip']; ?></td>
				<td><?php echo $row['dst']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['comp']; ?></td>
				<td><?php echo $row['persn']; ?></td>
				<td><?php echo $row['sam']; ?></td>
				<td><?php echo $row['invol']; ?></td>
				<td><?php echo $row['resl']; ?></td>
				<td><?php echo $row['resln']; ?></td>
				<td><?php echo $row['any']; ?></td>
			
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
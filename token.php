<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$id=$_POST['id'];
	$dep=$_POST['dep'];
	$class=$_POST['class'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$come=$_POST['come'];
	$checkindate=$_POST['checkindate'];
	$checkoutdate=$_POST['checkoutdate'];
	$ajay=$_POST['ajay'];
	$ajju=$_POST['ajju'];
	$qr=$_POST['qr'];
	
	
		$sql = "INSERT INTO token (fname, lname, id, dep, class, mobile, email, come,checkindate,checkoutdate,ajay,ajju,qr) VALUES ('$fname','$lname','$id','$dep','$class','$mobile','$email','$come','$checkindate','$checkoutdate','$ajay','$ajju','$qr')";
		if ($conn->query($sql) === TRUE)
			{
		// Return success response
		$response = array('success' => true);
		header('Content-Type: application/json');
		echo json_encode($response);
		} 
		else 
		{
    // Return error response
		$response = array('success' => false);
		header('Content-Type: application/json');
		echo json_encode($response);
		}

// Close database connection
$conn->close();
?>

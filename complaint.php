<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$class=$_POST['class'];
	$address=$_POST['address'];
	$addresss=$_POST['addresss'];
	$city=$_POST['city'];
	$tehsil=$_POST['tehsil'];
	$zip=$_POST['zip'];
	$dst=$_POST['dst'];
	$email=$_POST['email'];
	$id=$_POST['id'];
	$comp=$_POST['comp'];
	$persn=$_POST['persn'];
	$sam=$_POST['sam'];
	$invol=$_POST['invol'];
	$resl=$_POST['resl'];
	$resln=$_POST['resln'];
	$any=$_POST['any'];
	
		$sql = "INSERT INTO complaint (fname, lname, mobile, class, address, addresss, city, tehsil, zip, dst, email,id,comp,persn,sam,invol,resl,resln,any ) VALUES ('$fname','$lname','$mobile','$class','$address','$addresss', '$city', '$tehsil', '$zip', '$dst', '$email','$id', '$comp','$persn','$sam','$invol','$resl','$resln','$any')";
if ($conn->query($sql) === TRUE) {
    // Return success response
    $response = array('success' => true);
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Return error response
    $response = array('success' => false);
    header('Content-Type: application/json');
    echo json_encode($response);
}

// Close database connection
$conn->close();
?>

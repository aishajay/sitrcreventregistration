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
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$msg = $_POST['msg'];

// Insert data into the database
$sql = "INSERT INTO contact (name, email, mobile, msg) VALUES ('$name', '$email', '$mobile', '$msg')";
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

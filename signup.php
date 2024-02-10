<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Sign Up</h2>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" id="student_id" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>
        <input type="submit" name="signup" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root"; // Change this to your MySQL username
    $password = ""; // Change this to your MySQL password
    $dbname = "mydatabase"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Signup form processing
    if (isset($_POST['signup'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $student_id = $_POST['student_id'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Perform validation
        if ($password != $confirm_password) {
            echo "<script>alert('Passwords do not match');</script>";
        } else {
            // Check if email already exists in the database
            $check_email_query = "SELECT * FROM users WHERE email='$email'";
            $result = $conn->query($check_email_query);
            if ($result->num_rows > 0) {
                echo "<script>alert('Email already exists');</script>";
            } else {
                // Insert new user data into database
                $insert_query = "INSERT INTO users (name, email, student_id, password) VALUES ('$name', '$email', '$student_id', '$password')";
                if ($conn->query($insert_query) === TRUE) {
                    echo "<script>alert('Sign up successful');</script>";
                } else {
                    echo "Error: " . $insert_query . "<br>" . $conn->error;
                }
            }
        }
    }

    // Close database connection
    $conn->close();
}
?>

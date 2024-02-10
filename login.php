<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <input type="submit" name="login" value="Login">
		<p>Register Here? <a href="signup.php">Signup here</a>.</p><br>
		<p>Forgot your password? <a href="#">Reset it here</a>.</p>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>

<?php
session_start();

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

    // Login form processing
    if (isset($_POST['login'])) {
        $login_email = $_POST['email'];
        $login_password = $_POST['password'];

        // Check if user exists with the provided email and password
        $login_query = "SELECT * FROM users WHERE email='$login_email' AND password='$login_password'";
        $result = $conn->query($login_query);
        if ($result->num_rows > 0) {
            // User found, store email in session
            $_SESSION['email'] = $login_email;
            echo "<script>alert('Login successful.');</script>";
            echo "<script>window.location.href = 'index.html';</script>"; // Redirect to home page after login
            exit;
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    }

    // Close database connection
    $conn->close();
}
?>



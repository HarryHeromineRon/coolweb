<?php
// Connect to MySQL database
$host = "sql12.freemysqlhosting.net";
$username = "sql12616700";
$password = "EccuiYhrSK";
$dbname = "sql12616700";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
} else {
    echo "Invalid email or password";
}

// Close MySQL connection
mysqli_close($conn);
?>
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
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Insert user into database
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "User registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);
?>
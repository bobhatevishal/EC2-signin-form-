<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Fetch form data
$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];
$gender = $_POST["gender"];

// Database credentials
$servername = "localhost";
$username = "root";
$password = "vishal";
$dbname = "facebook";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL query using prepared statements
$sql = "INSERT INTO users (name, email, website, comment, gender) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $website, $comment, $gender);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully!";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

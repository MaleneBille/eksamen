<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "eksamen";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (mysqli_connect_errno()) {

    echo "Connection failed: " . mysqli_connect_errno();
} 
?>
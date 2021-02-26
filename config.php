<?php
$servername = "localhost";
$username = "admin";
$password = "morelifehome2021";
$db = "store";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
 ?>

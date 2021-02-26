<?php
  include 'config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$houseno = $_POST['houseno'];
$street = $_POST['street'];
$city = $_POST['city'];
$country = $_POST['country'];
$postcode = $_POST['postcode'];

$sql = "SELECT from users(email)";
$result = $conn->query($sql);
if ($result == $email){
  Header("signupform.php");
  echo "Email registered already"
}

$sql = "INSERT into users(firstname, lastname, email, password,houseno,street,city,country,postcode) VALUES($email,$password,$houseno,$street,$city,$country,$postcode)";

    //create connection

    $servername = "localhost";
    $username = "all";
    $password = "customers";
    $db = "store";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
  // Checks connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email, password FROM users WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);

    if($result-> num_rows>0){
      $_SESSION['loggedin'] = true;
      $_SESSION['email'] = $email;
      while($row=$result->fetch_assoc()){
       header("Location: index.php");
      }
    }

?>

<?php
//insert into the order the email and items using checkout table? delete items from item table with those id

echo  "PAYPAL FORM AND TRANSCATION"

$email = $_GET["email"]
$item = $_GET["id"]


$sql = "INSERT into orders(email_id, item_id) = "$email", "$item_id";

?>

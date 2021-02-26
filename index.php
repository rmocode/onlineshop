<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" contet="width-device-width, initial-scale=1.0">
  <title>More Life Home | Shop</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https//stackpath.bootstrapcdb.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script src="javascript/lightbox-plus-jquery.min.js"></script>

</head>

<body>


  <div class="header">
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="./images/5318_MoreLIfe_logo_BJ_PB.png" width="150px">
      </div>
      <nav>
        <ul id="MenuItems">
          <li><a href="index.php">Product Categories</li>
          <li><a href="">About</li>
          <li><a href="">Contact</li>
            <?php
            $link_name1 = "";
            $link_name2 = "";
            $link_name3 = "";
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $link_name2 = "Logout";
            }
            else {
                $link_name1 = "Login";
                $link_name3 = "Signup";
            }
             ?>
             <li><a href="loginform.php"><?php echo $link_name1;?></a></li>
             <li><a href="signupform.php"><?php echo $link_name3; ?></a></li>
             <li><a href="logout.php"><?php echo $link_name2;?></a></li>
      </nav>
      <a href="basket.php">
        <img src="./images/cart.png" width="30px" height="30px">
      </a>
      <img src="./images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>

    <div class="row">
      <div class="col-2">
        <h1>EVERY CONTRIBUTION COUNTS</h1>
        <p>By buying our furniture, you are contributing to supporting those struggling with low income in London.</p>
        <a href="" class="btn">Our Furniture &#8594;</a>
    </div>
      <div class="col-2">
      </div>
    </div>
  </div>
</div>

<div class="categories">
  <div class="small-container">
  <div class="row">
    <div class="col-3">
      <a href="livingroom.php">
        <img src="./images/livingroom.jpg">
      <p>Living Room</p>
    </a>
    </div>
    <div class="col-3">
      <a href="bedroom.php">
        <img src="./images/bedroom.jpg">
      <p>Bed Room</p>
    </a>
    </div>
    <div class="col-3">
      <a href="office.php">
        <img src="./images/office.png">
      <p>Office Space</p>
    </a>
    </div>
  </div>
</div>
</div>


<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Keep up with us</h3>
        <p>Upcoming events, new products, spaces and more!</p>
    </div>
      <div class="footer-col-2">
        <h3>Links</h3>
        <ul>
          <a href="index.php"><li>Product Categories</li></a>
          <a href=""><li>Contact</li></a>
          <a href="basket.php"><li>Basket</li></a>
        </ul>
      </div>
      <div class="footer-col-3">
        <h3>Follow us</h3>
        <ul>
          <a href=""><li>Instagram</li></a>
          <a href=""><li>Facebook</li></a>
          <a href=""><li>Twitter</li></a>
        </ul>
      </div>
    </div>
    <hr>
    <p class="copyright">Copyright 2020 | More Life Home</p>
  </div>
</div>

<script>
  var MenuItems = document.getElementByid("MenuItems");
  MenuItems.style.maxHeight = "0px";
  function menutoggle(){
    if(MenuItems.style.maxHeight == "0px"){
      MenuItems.style.maxHeight = "200px"
    }
    else{
      MenuItems.style.maxHeight = "0px"
    }
  }
</script>
    </body>
  </html>

<!DOCTYPE html>
<?php session_start(); ?>

<!--add background image on header, make it look more appealing-->
<!-- for corresponding links to furniture, add photos, prices and find a way of storing stock in database-->

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>More Life Home Shop</title>
  <link rel="stylesheet" href="mainpagestyle.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script src="javascript/lightbox-plus-jquery.min.js"></script>
</head>

<body>

    <div class="header">
      <div class="row">
        <div class="col-3">
          <img src="./images/5318_MoreLIfe_logo_BJ_PB.png" width="200px">
        </div>
      <div class="col-3">
        <nav>
        <a href="">Home</a>
        &emsp;&emsp;
        <a href="mainpage.php">Shop</a>
        &emsp;&emsp;
        <a href="">Furniture Type</a>
        &emsp;&emsp;
      </nav>
    </div>
    <div class="col-3">
      <a href="./basket.php"><img src="./images/bag.png" width="3px"</a>
      <?php
      $link_name1 = "";
      $link_name2 = "";
      $link_name3 = "";
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          $link_name2 = "LOGOUT";
      }
      else {
          $link_name1 = "LOGIN";
          $link_name3 = "SIGNUP";
      }
       ?>
       <a href="loginform.php"><?php echo $link_name1;?></a>
       <a href="signupform.php"><?php echo $link_name3; ?></a>
       <a href="logout.php"><?php echo $link_name2;?></a>
    </div>
  </div>
</div>


<div class="container">
  <div class="small-container">
  <div class="row">
      <div class="col-3">
        <a href="./livingroom.php"><img src="./images/livingroom.jpg"></a>
      </div>
      <div class="col-3">
        <a href="./bedroom.php"><img src="./images/bedroom.jpg"></a>
      </div>
      <div class="col-3">
        <a href="./kitchen.php"><img src="./images/kitchen.png"></a>
      </div>
      <div class="col-3">
        <a href="./bathroom.php"><img src="./images/bathroom.png"></a>
      </div>
      <div class="col-3">
        <a href="./outdoors.php"><img src="./images/outdoors.jpg"></a>
      </div>
      <div class="col-3">
        <a href="./other.php"><img src="./images/other.jpg"></a>
      </div>
    </div>
  </div>
</div>

<footer>
</footer>

</body>
</html>

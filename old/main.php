<!DOCTYPE HTML>
<?php session_start(); ?>

<html>

<head lang="en">
  <meta charset="utf-8">
  <meta name="viewport">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>More Life Home</title>
</head>

<body>

  <header>
  <div class="container">
    <div class="row custom-class" style="height: 100px">
      <div class="col-sm-4 h-100 d-inline-block bg-light">
        <img class="img-fluid" src="./images/mlhlogo.jpg" alt="">
      </div>
      <div class="col-sm-4 h-100 d-inline-block bg-light">
        <h1>MORE LIFE HOME</h1>
      </div>
    <div class="col-sm-4 h-100 d-inline-block bg-light text-right img">
      <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
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
       <kbd><a href="loginform.php"><?php echo $link_name1;?></a></kbd>
       <kbd><a href="signupform.php"><?php echo $link_name3; ?></a></kbd>
       <kbd><a href="logout.php"><?php echo $link_name2;?></a></kbd>

    </div>
  </div>
</div>
</header>

<div class="row" style="height: 100px">
  <div class="col-sm-12 h-100 d-inline-block bg-light content">
    F U R N I T U R E
  </div>
</div>


<div class="container">
  <table>
    <tr>
      <td><a href="./livingroom.php"><img class="img" style="width: 350px" src="./images/mlhlogo.jpg "></a></td>
      <td><a href="./bedroom.html"><img class="img"style="width: 350px" src="./images/mlhlogo.jpg"></a></td>
      <td><a href="./office.html"><img class="img"style="width: 350px"  src="./images/mlhlogo.jpg"></a></td>
    </tr>
    <tr>
      <td><a href="#"><img></a></td>
      <td><a href="#"><img></a></td>
      <td><a href="#"><img></a></td>
    </tr>
  </table>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<footer>
  <div class="row" style="height: 100px">
    <div class="col-sm-12 h-100 d-inline-block bg-light">
      <p>footer</p>

</footer>

</html>

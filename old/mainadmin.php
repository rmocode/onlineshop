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
       <kbd><a href="login.html"><?php echo $link_name1;?></a></kbd>
       <kbd><a href="signup.html"><?php echo $link_name3; ?></a></kbd>
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

<form enctype="multipart/form-data" method="post" action="addproduct.php">
  <label>UPLOAD PRODUCT</label>
  <input type="file" name="photo" id="photo"></input>
  <label>NAME</label>
  <input type="text" name="name" id="name"></input>
  <label>PRICE</label>
  <input type="text" name="price" id="price"></input>
  <input type="submit" value="upload"></input>
</form>


      <?php
      $dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");
    // Creates connection
    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
    // Checks connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }

      $sql = "SELECT id, product, name, price FROM items";
      $result = $conn->query($sql);
      $row_count=mysql_num_rows($results);
        // output data of each row
      echo "<table>";
      for ($i=0; $i<$row_count; $i++)
      {
        echo "<tr><td>".($row['product']).($row['name']). "<p>£</p>" .($row['price'])."</td></tr>";
      }
      echo "</table>";
      ?>
  </body>
</html>

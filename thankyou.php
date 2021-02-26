<!DOCTYPE HTML>
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
    <div class="row" style="height: 100px">
      <div class="col-sm-4 h-100 d-inline-block bg-light">
        <p>LOGO</p>
    </div>
      <div class="col-sm-4 h-100 d-inline-block bg-light">
        <h1>MORE LIFE HOME</h1>
      </div>
    <div class="col-sm-4 h-100 d-inline-block bg-light text-right">
      <kbd>CHECKOUT</kbd>
      <kbd><a href="login.html">LOGIN</a></kbd>
    </div>
  </div>
</header>

<div class="container">
  <?php

  $dbhost = getenv("MYSQL_SERVICE_HOST");
  $dbport = getenv("MYSQL_SERVICE_PORT");
  $dbuser = getenv("DATABASE_USER");
  $dbpwd = getenv("DATABASE_PASSWORD");
  $dbname = getenv("DATABASE_NAME");
  // Creates connection
  $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

  $sql = "DELETE id, product, name, price FROM items where id=:id";
  $statement = $pdo -> prepare($sql);
  $statement->bindParam(":id", $_GET['id']);
  $statement->execute();

  ?>
  THANK YOU FOR ORDERING! CHECK YOUR EMAIL FOR CONFIRMATION!
  ---TABLE WITH ITEMS ORDERED----
  ORDER:
  ESTIMATED ARRIVAL:
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

<footer>
  <div class="row" style="height: 100px">
    <div class="col-sm-12 h-100 d-inline-block bg-light">
      <p>footer</p>

</footer>

</html>

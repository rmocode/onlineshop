
<html>

<head>
  <title>More Life Home</title>
  <meta charset="utf-8">
  <meta name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="mainpagestyle.css">
  <script src="javascript/lightbox-plus-jquery.min.js"></script>
</head>

<body>
  <div class = "container">
    <div class="navbar">
      <div class="logo">
        <img src="./images/5318_MoreLIfe_logo_BJ_PB.png" width="200px">
      </div>
      <nav>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
      </nav>
      <img src="./images/cart.png" width="30px" height="30px">
    </div>

    <div class="header">
      <div class="row">
        <div class="col-2">
        <h1></h1>
        <a href="" class="btn"></a>
        </div>
        <div class="col-2">
        <img src="">
        </div>
      </div>
    </div>

    <div class="categories gallery">
      <div class="small-container">
        <div class="row">
          <div class="col-4">
            <?php
            $servername = "localhost";
            $username = "admin";
            $password = "morelifehome2021";
            $db = "mysql";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $db);
            $sql = "SELECT product, name, price FROM livingroom";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<a data-lightbox="gallery">" .$row["product"]."</a>";
                echo "<caption>". $row["name"] ."</caption>";
                echo "<p>£" .$row["price"] ."</p>";
                echo "<button>ADD</button>";//if you click add, it should redirect you to an checkout.php which will take the product and display it in a checkout table-->
               }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  <body>
</html>

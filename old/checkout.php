<?php session_start(); ?>
<!--create a js function that adds a new item to basket, if its the same item, increase quantity by and add the new price, also adds the new product to the table-->

<html>
  <head>
   <meta charset="UTF-8">
   <title>More Life Home Shop</title>
  <link rel="stylesheet" href="mainpagestyle.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css2">
  </head>

<body>
  <div class = "container">
    <div class="navbar">
      <div class="logo">
        <img src="./images/5318_MoreLIfe_logo_BJ_PB.png" width="200px">
      </div>
      <nav>
        <a href="l"></a>
        <a href="l"></a>
        <a href="l"></a>
        <a href="l"></a>
        <a href="l"></a>
      </nav>
      <img src="./images/cart.png" width="30px" height="30px">
    </div>

    <div class="small-container cart-page">
      <table>
        <tr>
          <th>PRODUCT</th>
          <th>QUANTITY</th>
          <th>SUBTOTAL</th>
          </tr>
          <tr>
            <td>
              <div class="cart-info">
                <img src="images/5318_MoreLIfe_logo_BJ_PB-mockup-01copy.jpg">
                  <div>
                    <p>Product name</p>
                      <br>
                      <a href="">Remove</a>
                  </div>
              </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>£0.00</td>
          </tr>

        <?php
        //retrieves table data, displays
        $dbhost = getenv("MYSQL_SERVICE_HOST");
      $dbport = getenv("MYSQL_SERVICE_PORT");
      $dbuser = getenv("DATABASE_USER");
      $dbpwd = getenv("DATABASE_PASSWORD");
      $dbname = getenv("DATABASE_NAME");
      // Creates connection
      $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

        $sql = "SELECT product, name, price FROM checkout";
        $result = $conn->query($sql);
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo $row["product"]. "<div><p>" .$row["name"]. "</p></div></div></td>";
            echo "<td> £". $row["price"]."</td></tr>";
          }
       ?>
      </table>
    </div>

    <div class="total-price">
      <table>
        <tr>
          <td>TOTAL</td>
          <td>£
           <?php
           $qty = 0.00;
           while($row = $result->fetch_assoc()) {
              $qty += $num["price"];
           echo $qty;
           } ?>
         </td>
         </tr>
       </table>
       </div>
       <button>BUY</button>
 </body>
</html>

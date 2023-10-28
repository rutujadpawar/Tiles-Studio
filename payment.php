<?php
    session_start();
    $database_name = "Products_details";
    $con = mysqli_connect("localhost","root","",$database_name);
?>

<html>

  
  <body>
    $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?>
<h1 class="text-center">
  <a href="cart.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>
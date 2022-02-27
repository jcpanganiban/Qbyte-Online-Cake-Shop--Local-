<?php
  session_start();
  require "../includes/functions.inc.php";
  // if(isset($_GET['item'])){

  // }
  $try = print_r($_GET['item'], true);
  $arr = explode(",",$_GET['item']);
  require "../includes/dbh.order.inc.php";
  $sql = "INSERT INTO orders (username, userOrder) VALUES ('tryy lang ahe', '$try');";
  mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Qbyte Online Cake Shop</title>
  <link rel="stylesheet" href="../css/index.css" type="text/css" />
  <link rel="stylesheet" href="../css/variables.css" type="text/css" />
  <link rel="stylesheet" href="../css/navbar.css" type="text/css" />
  <link rel="stylesheet" href="../css/checkout.css" />
</head>
<?php 
    include "../includes/header.inc.php";
  ?>

<div class="main">
  <div class="checkout-content">
    <div class="left-content">
      <div class="topleft-content">
        <div class="arrow">
          <img src="../img/icons/back-icon.svg" alt="basta kunyare arrow" />
        </div>
        <h1 class="checkout-word">Checkout</h1>
      </div>
      <div class="lowerleft-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi
        excepturi facilis asperiores totam sequi delectus nostrum libero
        assumenda reiciendis. Sequi maiores nostrum qui mollitia natus
        iusto quia totam porro corrupti?
      </div>
    </div>

    <div class="right-content">
      <div class="topright-content">
        <h1 class="fontsize">Order Summary</h1>
        <div class="wline"></div>
        <div class="orders">
          <div class="ordersum">
            <span class="prodname">Tite</span><span class="prodprice">P2.00</span>
          </div>
          <div class="ordersum">
            <span class="prodname">Tite</span><span class="prodprice">P2.00</span>
          </div>
        </div>
      </div>
      <div class="lowerright-content">
        <form action="" method="" class="form">
          <div class="inputfield">
            <label for="deliverydate"><strong>Deliver Time</strong></label><br />
            <select name="deliverydate" id="deliverydate">
              <option value="today">Today</option>
              <option value="tomorrow">Tomorrow</option>
            </select>
            <select name="time" id="time">
              <option value="15min">15 Mins</option>
              <option value="30min">30 Mins</option>
              <option value="45min">45 Mins</option>
              <option value="1hr">1 Hour</option>
              <option value="2hr">2 Hour</option>
            </select>
            <br />
            <label for="address"><strong>Delivery Address</strong></label><br />
            <input type="text" name="address" id="address" placeholder="Enter your Address here..." />
            <br />
            <label for="address2"><strong>Floor / Unit / Room</strong></label><br />
            <input type="text" name="address2" id="address2" placeholder="Enter your Address here..." />
            <br />
            <label for="payment"><strong>Payment</strong></label><br />
            <input type="text" name="payment" id="payment" placeholder="Cash on Delivery" />
          </div>
        </form>
        <button class="checkout-btn">PLACE ORDER</button>
      </div>
    </div>
  </div>
</div>
</div>
<footer class="footer"></footer>
</body>

</html>
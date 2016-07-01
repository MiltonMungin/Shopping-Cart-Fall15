<!DOCTYPE html>
<html>
<?php
include("session.php");
?>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<ul id="menubar">
  <li><a href="http://localhost:8080/mystore/index.php">Home</a></li>
  <li><a href="http://localhost:8080/mystore/products.php">Shop</a></li>
  <li><a href="http://localhost:8080/mystore/cart.php">Cart</a></li>
  <li>
    <?php
  if(!isset($_SESSION['log_usr'])){
  ?>
    <a href="http://localhost:8080/mystore/account/signin.php">Sign in</a>
  <?php
  }else{
    echo 'Hello,  '.$_SESSION['log_firstname'];
  ?>
    <a href="http://localhost:8080/mystore/account/signout.php">Sign out</a>
  <?php
  }
  ?>
  </li>
</ul>
</body>
</html>

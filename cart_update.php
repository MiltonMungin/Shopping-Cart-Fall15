
<!DOCTYPE html>
<html>
<?php
session_start();
include("session.php");
include('menubar.php');
?>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Welcome</title>
</head>
<body>
<?php

$cart = $_SESSION['myCart'];

foreach ($cart as $product_id => $qty) {
if(!$_POST[$product_id] == 0) {
  $cart[$product_id] = $_POST[$product_id];
}else{
  unset($cart[$product_id]);
  }
}
$_SESSION['myCart'] = $cart;
header("location: http://localhost:8080/mystore/cart.php");
exit;

?>
</body>
</html>

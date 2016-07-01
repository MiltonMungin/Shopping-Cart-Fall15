
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
$itemID = $_POST["product_id"];
$qty = $_POST["qty"];
echo $itemID;
echo $qty;
if (!isset($_SESSION['myCart'])) {
  $_SESSION['myCart'] = array();
}
$cart = $_SESSION['myCart'];

if(!isset($cart[$itemID])) {
    $cart += array($itemID => $qty);
}else{
  $tmpQty = $cart[$itemID];
  $qty += $tmpQty;
  $cart[$itemID] = $qty;
}
$_SESSION['myCart'] = $cart;

header("location: http://localhost:8080/mystore/cart.php");

?>
</body>
</html>

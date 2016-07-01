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
$total = $_SESSION['total'];

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$name = $firstname.' '.$lastname;
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$street = $_POST['streetaddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$address = $street.' '.$city.' '.$state.' '.$zip;
$creditcard =  $_POST['creditcard'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];
$payment = 'payment: '.$creditcard.' exp: '.$exp_month.'/'.$exp_year;

$sql = "INSERT INTO orders (name, usr, shippinginfo, payment, email, phone, shippingstatus, items, price) VALUES ('".$name."', '".$_SESSION['log_usr']."', '".$address."', '".$payment."', '".$email."', '".$phonenumber."', 'processing', '".serialize($cart)."', '".$total."')";
if(mysqli_query($conn, $sql)) {
?>
<p>Completed</p>
<?php
}else {
  echo 'fail';
}

//header("location: http://localhost:8080/mystore/cart.php");

?>
</body>
</html>

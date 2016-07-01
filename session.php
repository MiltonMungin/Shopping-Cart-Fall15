<?php
session_start();
include_once 'shoppingcart.php';
$db_username="root";
$db_password="root";
$db_database="mystore";

$conn = mysqli_connect("localhost", $db_username, $db_password, $db_database)or die ("cannot connect to the database");

?>

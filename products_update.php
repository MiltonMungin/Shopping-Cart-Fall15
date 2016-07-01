
<!DOCTYPE html>
<html>
<?php
session_start();
include("session.php");
include('menubar.php');
?>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>processing</title>
</head>
<body>
<?php
$_SESSION['select_department'] = $_POST['department'];

header("location: http://localhost:8080/mystore/products.php");

?>
</body>
</html>

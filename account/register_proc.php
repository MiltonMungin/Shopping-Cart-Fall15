<?php
include('../session.php');
$reg_usr = $_POST["reg_username"];
$reg_pass = $_POST["reg_password"];
$reg_first = $_POST["reg_firstname"];
$reg_last = $_POST["reg_lastname"];
$reg_email = $_POST["reg_email"];
$sql = "INSERT INTO members (usr, pass, firstname, lastname, email) VALUES ('".$reg_usr."','".$reg_pass."','".$reg_first."','".$reg_last."','".$reg_email."')";
if(mysqli_query($conn, $sql)) {
?>
<h2>Account successfully created</h2>
<p>Thank you, You can now login</p>
<?php
}else {
  echo 'register fail';
}
 ?>

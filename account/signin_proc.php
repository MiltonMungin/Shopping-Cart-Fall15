<?php
include('../session.php');

$log_usr = $_POST["log_username"];
$log_pass = $_POST["log_password"];

$sql = "SELECT * FROM members WHERE usr= '".$log_usr."' && pass = '".$log_pass."'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0) {
  while($row = mysqli_fetch_array($result)) {
    $_SESSION['log_usr'] = $row['usr'];
    $_SESSION['log_pass'] = $row['pass'];
    $_SESSION['log_firstname'] = $row['firstname'];
    $_SESSION['log_lastname'] = $row['lastname'];
    $_SESSION['log_email'] = $row['email'];
  }
header("location: http://localhost:8080/mystore/");
}else {
?>
  <script type="text/javascript">
  alert("Invalide username or password");
  window.location.href='signin.php';
  </script>
<?php
}
?>

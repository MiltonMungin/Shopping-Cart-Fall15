<!DOCTYPE html>
<html>
<?php
include('../menubar.php');
?>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>Register</title>
</head>
<body>
  <h1>Create account</h1>
  <form action="register_proc.php" method="POST">
    <table>
      <tr>
        <td>Username:</td>
        <td><input type="text" name="reg_username"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="reg_password"></td>
      </tr>
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="reg_firstname"></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" name="reg_lastname"></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="email" name="reg_email"></td>
      </tr>
    </table>
    <p><input type="submit" value="Register"></p>
  </form>
</body>
</html>

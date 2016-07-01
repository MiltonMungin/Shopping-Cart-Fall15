<!DOCTYPE html>
<html>
<?php
include('../menubar.php');
?>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <title>Sign in</title>
</head>
<body>
  <h3>Sign in</h3>
  <form action="signin_proc.php" method="POST">
    <table>
      <tr>
        <td>Username:</td>
        <td><input type="text" name="log_username" /></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="log_password" /></td>
      </tr>
    </table>
    <input type="submit" value="login" />
  </form>
  <p><a href="register.php">Create an account</p>
</body>
</html>

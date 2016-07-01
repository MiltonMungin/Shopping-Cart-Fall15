<?php
include('../session.php');
$_SESSION['log_usr']=NULL;
$_SESSION['log_pass']=NULL;
$_SESSION['log_firstname']=NULL;
$_SESSION['log_lastname']=NULL;
header("location: http://localhost:8080/mystore/");
?>

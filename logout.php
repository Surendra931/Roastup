<?php
session_start();
$_SESSION['mail']="";
$_SESSION['log']=false;
header("Location:login.php");

?>

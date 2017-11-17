<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: page-login.php");
//header("Location: login.php");
exit(); }
?>

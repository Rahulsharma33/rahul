<?php
$con = mysqli_connect("localhost","rahul","12345","register_user");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
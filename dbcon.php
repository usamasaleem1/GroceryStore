<?php

$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'wfJDJmJgdL';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);
mysqli_select_db($conn,"HTADFpjYkD");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
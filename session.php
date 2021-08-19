<?php
$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'Ng7fU9bD9m';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);
   
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['email']) || (trim($_SESSION['email']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['email'];



?>
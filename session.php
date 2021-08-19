<?php
$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'Ng7fU9bD9m';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);
   

if ($conn)
{
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select password from admin where password = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['password'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
    }
}

?>
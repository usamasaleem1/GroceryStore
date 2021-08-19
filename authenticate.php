<?php

$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'Ng7fU9bD9m';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}

if(isset($_POST["submit"]))
{
if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $email and $password
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT id FROM register WHERE email='$email' and password='$password'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


if(mysqli_num_rows($result) == 1)
{
    echo "login success"
$_SESSION['username'] = $login_user; // Initializing Session
header("location: home.html"); // Redirecting To Other Page
}else
{
    echo "error";
$error = "Incorrect username or password.";
}

}
}

?>
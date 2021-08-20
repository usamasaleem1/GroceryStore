<?php
session_start();
session_destroy();
header('location:index.php');
?>

<!DOCTYPE html>
<html>
   <head>
      <title>HTML Meta Tag</title>
      <meta http-equiv = "refresh" content = "0; url = https://concordiagrocery.herokuapp.com/home.html" />
   </head>
   <body>
      <p>loading...</p>
   </body>
</html>
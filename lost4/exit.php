<?php
session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="3;url=index.php" />

    
    <link rel="stylesheet" href="./css/bootstrap.min.css">

<!--    <link rel="stylesheet" href="./css/style2.css">-->

  </head>

<body>

<div class="container">
  <h1 class="display-1">Thanks for visiting Lost and Found Website!</h1>
  <h1 class="display-4">Redirecting you to home page in 3 seconds...</h1>
  <a href="index.php">Click here if your browser does not redirect you.</a>
</div>

<div class="container">
 <?php include 'footer.php';?>
</div>
</body>
</html>
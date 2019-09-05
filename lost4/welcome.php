<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="3 ;url=lf.php" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">

  </head>

<body>

<div class="container">
  <h1 class="display-2">Thanks for logging in,<?php echo("{$_SESSION['username']}");?>.</h1>
  <h1 class="display-4">You'll be redirected in 3 seconds.</h1>
  <a href="lf.php">Click here if your browser does not redirect you.</a>
</div>

<div class="container">
 <?php include 'footer.php';?>
</div>
</body>
</html>
